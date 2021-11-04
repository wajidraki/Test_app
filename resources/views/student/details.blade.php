@extends('layout.app')
@section('content')

    <h1 style="text-align: center;">Details</h1>

    <table class="table table-hover">
        <tr>
            <th>S-No</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>contact</th>
            <th>level</th>
            <th>Instituation</th>

        </tr>
        <tbody>
            <tr>
                <td>{{$students->id}}</td>
                <td>{{$students->name}}</td>
                <td>{{$students->father_name}}</td>
                <td>{{$students->contact}}</td>
                <td>{{$students->Level->name}}</td>
                <td>{{$students->Instituation->name}}</td>

            </tr>

        </tbody>
    </table>

@endsection
