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
                <th colspan="2" style="padding: 10px; background-color: #f2f2ef;"> Admin Privileges</th>
                <tr >
                    <td style="padding: 10px;"> <a href="{{ route('users') }}"> View all users </a> </td>
                    <td style="padding: 10px;"> <a href="{{ route('users') }}"> Add user </a> </td>
                </tr>
            </table>
        </div>


    </div><!--/span-->
@endsection
