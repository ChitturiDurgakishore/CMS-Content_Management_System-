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
            <h1>All Users</h1>

        <button type="button" class="btn btn-warning"><a href="/PendingVerification">Pending</a></button>
        <table border="5">
            <tr>
                <th>UserName</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Verified</th>
                <th>Registration Date</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->verified}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </center>
    </x-slot>
</x-layout>
