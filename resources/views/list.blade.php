@extends('layouts.master')

@section('content')
    <div class="col-12 col-md-12">
        <p class="float-right d-md-none">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
        </p>
        <div class="jumbotron">
            <h1>Hello, sheep master</h1><br/>

            <div>
               Look at all your users!
            </div>
            <table border="2px solid black" style="min-width:700px; margin: 10px; background-color: #fff;">
                <th> User ID </th>
                <th > Name </th>
                <th> Email </th>
                <th> Roli </th>
                <th> Active </th>
                <th> Edit</th>
                <th> Deactivate </th>
                @foreach($users as $key => $data)
                    <tr >
                        <td style="padding: 10px;"> {{$data->id}} </td>
                        <td style="padding: 10px;"> {{$data->name}} </td>
                        <td style="padding: 10px;"> {{$data->email}} </td>
                        <td style="padding: 10px;"> {{$data->role}} </td>
                        <td style="padding: 10px;"> {{$data->active}} </td>
                        <td style="padding: 10px;"> Edit User </td>
                        <td style="padding: 10px;"> Deactivate User </td>
                    </tr>
                @endforeach

            </table>
        </div>


    </div><!--/span-->
@endsection
