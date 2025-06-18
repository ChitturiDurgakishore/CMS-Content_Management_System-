<x-layout>
    <x-slot name="title">Update Header</x-slot>
    <x-slot name="Content">
        <center>
            <form method="post" action="/UpdatingHeader/{{$details->id}}">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >HEADER NAME</label>
                    <input type="text" class="form-control" name="name" value="{{$details->name}}">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">URL</label>
                    <input type="text" class="form-control" name="url"  value="{{$details->url}}">
                </div>
                <div class="mb-3 form-check">
                    <select name="visibility" id="visibility" value="{{$details->visibility}}">
                        <option value="true">TRUE</option>
                        <option value="false">False</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </center>
    </x-slot>
</x-layout>
