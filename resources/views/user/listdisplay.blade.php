<html>
    <body>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            
                            @foreach($data as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td><a href="">Delete</a></td>
                                </tr>
                            @endforeach
                        </table>
    </body>
</html>