
<x-layout>
    <x-slot name="title">Header Operation</x-slot>
    <x-slot name="Content">
        <center>
            <h1>New Header</h1>
            <form action="/AddingNewHeader" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">URL</label>
                    <input type="text" class="form-control" name="url">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </center>
    </x-slot>

</x-layout>
