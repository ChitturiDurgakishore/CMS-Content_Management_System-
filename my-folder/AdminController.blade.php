<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adminlogin;
use App\Models\HeaderNavigation;
use App\Models\RegisteredUsers;
use App\Models\Footer;
use Illuminate\Support\Facades\Storage;;
use Illuminate\Support\Str;
class Admin extends Controller
{
    function AdminLoginCheck(Request $req)
    {
        $detail = Adminlogin::where('email', $req->email)->first();
        if ($detail) {
            $user = Adminlogin::where('email', $req->email)->where('password', $req->password)->first();
            if ($user) {
                $req->session()->put('email', $req->input('email'));
                return redirect('/AdminHome');
            } else {
                return "Password wrong";
            }
        }
        if (!$detail) {
            return "User Not found";
        }
    }
    // Header Items in Header option for ADMIN DASHBOARD
    function HeaderItems()
    {
        $Items = HeaderNavigation::all();
        return view('admin.header', ['items' => $Items]);
    }
    // Admin  Deleting  header in Header option
    function DeleteHeader($id)
    {
        $operation = HeaderNavigation::destroy($id);
        return  redirect('/Header');
    }

    // Admin getting headr info before going to update it
    function HeaderInfo($id)
    {
        $details = HeaderNavigation::where('id', $id)->first();
        return view('admin.UpdateHeader', ['details' => $details]);
    }
    // ADmin Updating the header
    function UpdateHeader(Request $req, $id)
    {
        $details = HeaderNavigation::where('id', $id)->first();
        $details->name = $req->name;
        $details->url = $req->url;
        $details->visibility = $req->visibility;
        if ($details->save()) {
            return redirect('/Header');
        } else {
            return "Failed to update";
        }
    }

    //Admin adding new header
    function NewHeader(Request $req)
    {
        $add = HeaderNavigation::create([
            'name' => $req->name,
            'url' => $req->url,
        ]);
        if ($add) {
            return redirect('/Header');
        }
    }
    //Admin getting all registrers users in Users section
    function GetAllusers()
    {
        $users = RegisteredUsers::all();
        return view('admin.users.users', ['users' => $users]);
    }

    //   Admin getting all unverified users in Users Section
    function PendingUsers()
    {
        $users = RegisteredUsers::where('verified', '0')->orderBy('created_at', 'desc')->get();
        return view('admin.users.unverified', ['users' => $users]);
    }
    //Verification page
    function UserDetails($id){
        $user=RegisteredUsers::where('id',$id)->first();
        return view('admin.users.verification',['details'=>$user]);
    }

    function VerifyingUser(Request $req,$id){
        $user=RegisteredUsers::where('id',$id)->first();
        $user->verified=$req->visibility;
        if($user->save()){
            return redirect('/Users');
        }else{
            return "Not Saved";
        }
    }

    //LinksFooter
    function LinksInfo(){
        $social=Footer::where('section','SocialLinks')->get();
        $support=Footer::where('section','SupportLinks')->get();
        return view('admin.footer.links',['socials'=>$social,'supports'=>$support]);
    }
    //LinksUpdate
    function UpdatingLinks($id){
        $details=Footer::where('id',$id)->first();
        return view('admin.footer.linksupdate',['details'=>$details]);
    }
    //LinksUpdated
    function UpdateDone(Request $req ){
        $details=Footer::where('id',$req->id)->first();
        $details->visibility=$req->visibility;
        $details->url=$req->url;
        $details->name=$req->name;
        if($details->save()){
            return redirect('/Footer');
        }else{
            return "Not Saved";
        }
    }
    function Deleted($id){
        $reply=Footer::destroy('id',$id);
        if($reply){
            return redirect('/Footer');
        }else{
            return "Not Deleted";
        }
    }

    //BackgroundImage
    function UpdatingImage(Request $request){
        $uploadedImage = $request->file('user_image');

        // Generate a unique filename to avoid conflicts
        // Example: 1678888888_randomstring.jpg
        $fileName = time() . '_' . Str::random(10) . '.' . $uploadedImage->getClientOriginalExtension();

        // Define the folder within storage/app/public where you want to store the images
        $destinationFolder = 'backgrounds'; // You can change this to 'images' or 'uploads'

        // Store the file in storage/app/public/backgrounds
        // This method returns the path relative to the 'public' disk (e.g., 'backgrounds/unique_name.jpg')
        $storedRelativePath = Storage::disk('public')->putFileAs($destinationFolder, $uploadedImage, $fileName);

        // Generate the full public URL for the stored image
        // This is the link you can use in your HTML <img> tags or CSS background-image
        $link = asset('storage/' . $storedRelativePath);

        // For a prototype, you can simply return the link directly or redirect
        // In a real app, you'd likely save this link to a database
        $image=Footer::where('Section','BackGround')->first();
        $image->url=$link;
        if($image->save()){
            return redirect('/Background');
        }else{
            return "Not Saved";
        }

    }

    //Loading images from DB
    function ImageFetching(){
        $background=Footer::where('section','BackGround')->first();
        return view('admin.background.background',['background'=>$background]);
    }
}
