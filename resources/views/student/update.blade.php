@extends('layout.app')
@section('content')



<div class="container">
      <div class="row">
          <div class="col-md-4 offset-4">
              <form action="{{route('student.update',['id'=>$student->id])}}" method="POST">
                  @csrf
                  <input type="text"name="stu_name" class="form-control" value="{{$student->name}}" placeholder="student Name">
                  <input type="text"name="father_name" class="form-control"  value="{{$student->father_name}}"placeholder="Father Name">
                  <input type="text"name="contact" class="form-control"  value="{{$student->contact}}" placeholder="Contact">

{{--                  <select  class="form-select" name="level">--}}
{{--                @foreach($levels as $level)--}}
{{--                          <option value="{{$level->id}}">{{$level->name}}</option>--}}
{{--                      @endforeach--}}
{{--                  </select>--}}

{{--                  <select class="form-select" name="Instituation">--}}
{{--                      @foreach($instituaions as $instituate)--}}
{{--                          <option value="{{$instituate->id}}">{{$instituate->name}}</option>--}}
{{--                      @endforeach--}}
{{--                  </select>--}}

                  <button class="btn btn-primary"type="submit">Update</button>
                  <button class="btn btn-danger"type="reset">Reset</button>
              </form>

          </div>
      </div>
</div>



@endsection
