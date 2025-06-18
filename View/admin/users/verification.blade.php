<x-layout>
    <x-slot name="title">Users</x-slot>
    <x-slot name="Content">
        <style>
            .forms{
                background-color: antiquewhite;
                border-radius: 20px;
                padding: 20px;
                margin: 15px;
            }
        </style>
      <div name="forms">
        <center>
        <h3>Verifying User</h3>
           <form method="post" action="/VerificationComplete/{{$details->id}}">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" ></label>
                    <input type="text" class="form-control" name="name" value="{{$details->name}}">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" ></label>
                    <input type="text" class="form-control" name="name" value="{{$details->email}}">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" ></label>
                    <input type="text" class="form-control" name="name" value="{{$details->phone}}">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" ></label>
                    <input type="text" class="form-control" name="name" value="{{$details->password}}">

                </div>
                <div class="mb-3 form-check">
                    <select name="visibility" id="visibility" value="{{$details->visibility}}">
                        <option value="1">TRUE</option>
                        <option value="0">False</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </center>
        </div>
    </x-slot>
</x-layout>
