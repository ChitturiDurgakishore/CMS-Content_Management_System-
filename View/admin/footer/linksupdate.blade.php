<x-layout>
    <x-slot name="Content">
       <h1>Change Links</h1>
       <div class="FormContainer">
        <form action="/Updated" method="POST">
             @csrf
                @method('put')
                <input type="hidden" name="id" value="{{$details->id}}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" ></label>
                    <input type="text" class="form-control" name="name" value="{{$details->name}}">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" ></label>
                    <input type="text" class="form-control" name="url" value="{{$details->url}}">

                </div>
                <div class="mb-3 form-check">
                    <select name="visibility" id="visibility" value="{{$details->visibility}}">
                        <option value="true">TRUE</option>
                        <option value="false">False</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       </div>
    </x-slot>
</x-layout>
