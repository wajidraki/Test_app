@extends('layout.app')
@section('content')



    <h1>has instituate</h1>
<table class="table table-hover">
    <tr>
        <th>S-No</th>
        <th>Name</th>
        <th>Phone</th>
        <th>address</th>


    </tr>
    <tbody>
    @forelse($instituations as $institee)

         <tr>
             <td>{{$institee->id}}</td>
             <td>{{$institee->name}}</td>
             <td>{{$institee->phone}}</td>
             <td>{{$institee->address}}</td>



        </tr>
    @empty
        <td colspan="3">No date</td>
    @endforelse

    </tbody>
</table>



<h1>has no instituate</h1>
<table class="table table-hover">
    <tr>
        <th>S-No</th>
        <th>Name</th>
        <th>Phone</th>
        <th>address</th>


    </tr>
    <tbody>
    @forelse($instit as $institeee)

        <tr>
            <td>{{$institeee->id}}</td>
            <td>{{$institeee->name}}</td>
            <td>{{$institeee->phone}}</td>
            <td>{{$institeee->address}}</td>



        </tr>
    @empty
        <td colspan="3">No date</td>
    @endforelse

    </tbody>
</table>


@endsection
