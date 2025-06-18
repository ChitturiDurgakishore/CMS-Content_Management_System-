<x-layout>
    <x-slot name="title">Users</x-slot>
    <x-slot name="Content">
        <style>
            table{
                margin: 20px;
            }
            tr{
                border: 3px solid black;
                padding: 5px;
            }
            th{
                border: 3px solid black;
                padding: 5px;
            }
            td{
                border: 3px solid black;
                padding: 5px;
            }
        </style>
        <center>
            <h1>Unverified Users</h1>
            <table border="5">
                 <tr>
                <th>UserName</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Verified</th>
                <th>Registration Date</th>
                <th>Operation</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->verified}}</td>
                <td>{{$user->created_at}}</td>
                <td><a href="/Verify/{{$user->id}}">Verify</a></td>
            </tr>
            @endforeach

            </table>
        </center>
    </x-slot>
</x-layout>
