<x-layout>

    <x-slot name="title">Header</x-slot>
    <x-slot name="Content">
         <style>
        table{
            margin: 20px;
            padding: 10px;
        }
        th{
            border:3px solid black;
            padding: 10px;
        }
        tr{
            padding: 10px;
            border: 3px solid black;
        }
        td{
            border:3px solid black;
            padding: 10px;
        }
    </style>
        <center>
        <table border="3">
        <h1>Header Options</h1>
        <tr>
            <th>HEADER NAME</th>
           <th>URL</th>
           <th>VISIBILITY</th>
           <th>OPERATION</th>
        </tr>
       @foreach ($items as $item)
           <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->url}}</td>
            <td>{{$item->visibility}}</td>
            <td>
                <a href="/Delete/{{$item->id}}">DELETE</a>
                <a href="/Change/{{$item->id}}">CHANGE</a>
            </td>
           </tr>
       @endforeach
    </table>
  <a href="/AddNewHeader">Add New Header</a>
  </center>
    </x-slot>
</x-layout>
