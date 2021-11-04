@extends('layout.app')
@section('content')



<div class="container">
      <div class="row">
          <div class="col-md-4 offset-4">

                  @csrf
                  <input type="text"name="stu_level" class="form-control" placeholder="Level">


                  <button class="btn btn-primary"type="submit">save</button>
                  <button class="btn btn-danger"type="reset">Reset</button>


          </div>
      </div>
</div>


{{--<table class="table table-hover">--}}
{{--    <tr>--}}
{{--        <th>S-No</th>--}}
{{--        <th>Name</th>--}}
{{--        <th>Father Name</th>--}}
{{--        <th>contact</th>--}}
{{--        <th>level</th>--}}
{{--    </tr>--}}
{{--    <tbody>--}}
{{--    @forelse($students as $student)--}}
{{--         <tr>--}}
{{--             <td>{{$loop->iteration}}</td>--}}
{{--             <td>{{$student->name}}</td>--}}
{{--             <td>{{$student->father_name}}</td>--}}
{{--             <td>{{$student->contact}}</td>--}}

{{--        </tr>--}}
{{--    @empty--}}
{{--        <td colspan="3">NO Data found</td>--}}
{{--    @endforelse--}}
{{--    </tbody>--}}
{{--</table>--}}


@endsection
