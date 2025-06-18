<x-layout>
    <x-slot name="Content">
        <style>
            table{
                border: 5px solid black;
                padding: 10px;
                margin: 10px;
            }
            tr{
                border: 5px solid black;
                padding: 10px;
            }
            td{
                border: 5px solid black;
                padding: 10px;
            }
        </style>
        <center>
        <div class="container">
            <div class="SocialLinks">
                <h3>Social Links</h3>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>URL</td>
                        <td>Visibility</td>
                        <td>Operation</td>
                    </tr>
                    @foreach ($socials as $social)
                        <tr>
                            <td>{{$social->name}}</td>
                            <td>{{$social->url}}</td>
                            <td>{{$social->visibility}}</td>
                            <td><a href="/UpdateLink/{{$social->id}}">Update</a>&nbsp &nbsp<a href="/DeleteLink/{{$social->id}}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="SupportLinks">
                <h3>Support Links</h3>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>URL</td>
                        <td>Visibility</td>
                        <td>Operation</td>
                    </tr>
                    @foreach ($supports as $support)
                        <tr>
                            <td>{{$support->name}}</td>
                            <td>{{$support->url}}</td>
                            <td>{{$support->visibility}}</td>
                             <td><a href="/UpdateLink/{{$support->id}}">Update</a> &nbsp &nbsp<a href="/DeleteLink/{{$support->id}}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        </center>
    </x-slot>
</x-layout>
