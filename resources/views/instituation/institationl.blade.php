@extends('layout.app')
@section('content')



<div class="container">
      <div class="row">
          <div class="col-md-4 offset-4">
            <form action="{{Route('instituation.store')}}" method="POST">
                 @csrf
                <input type="text"name="name" class="form-control" placeholder="name">
                <input type="text"name="phone" class="form-control"placeholder="phone">
                <input type="text"name="address" class="form-control"placeholder="address">

                <button class="btn btn-primary"type="submit">save</button>
                <button class="btn btn-danger"type="reset">Reset</button>

            </form>


          </div>
      </div>
</div>


<table class="table table-hover">
    <tr>
        <th>S-No</th>
        <th>Name</th>
        <th>Phone</th>
        <th>address</th>
        <th>action</th>


    </tr>
    <tbody>
    @forelse($instituations as $institute)
         <tr>
             <td>{{$loop->iteration}}</td>
             <td>{{$institute->name}}</td>
             <td>{{$institute->phone}}</td>
             <td>{{$institute->address}}</td>
             <td><a href="/instituatition/details" class="btn btn-primary">details</a></td>



        </tr>
    @empty
        <td colspan="3">NO Data found</td>
    @endforelse
    </tbody>
</table>


@endsection
