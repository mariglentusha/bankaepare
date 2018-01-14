@extends('layouts.master')

@section('content')
    <div class="col-12 col-md-12">
        <p class="float-right d-md-none">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
        </p>
        <div class="jumbotron">
            <h1>Hello, sheep master</h1><br/>

            <div>
                Ketu mund te kontrolloni fatet e sheep-eve. Ata jane nen meshiren tuaj.
            </div>
            <table border="2px solid black" style="min-width:700px; margin: 10px; background-color: #fff;">
                <th colspan="3" style="padding: 10px; background-color: #f2f2ef;"> Moderator Privileges</th>
                <tr >
                    <td style="padding: 10px;"> View Post </td>
                    <td style="padding: 10px;"> Edit Post </td>
                    <td style="padding: 10px;"> Delete Post </td>
                </tr>
            </table>
        </div>


    </div><!--/span-->
@endsection
