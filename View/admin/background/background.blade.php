<x-layout>
    <x-slot name="title">Background</x-slot>
    <x-slot name="Content">
        <style>
            .BackgroundImage{
                width: 50px;
                height: 50px;
                margin: 100px;
            }
            img{
                width: 250px;
                height: 150px;

            }
            .formcontainer{
                margin: 20px;
            }
        </style>
       <h2>Background Image</h2>
       <div class="BackgroundImage">
        <img src="{{$background->url}}" alt="" >
       </div>
       <div class="formcontainer">
         <form action="/upload-image" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h1>Upload BackGround Image</h1>
            <label for="imageUpload" class="form-label">Choose Image File</label>
            <input class="form-control" type="file" id="imageUpload" name="user_image" accept="image/*">
            <div>
                <button type="submit">Submit</button>
            </div>
          </form>
       </div>
    </x-slot>
</x-layout>
