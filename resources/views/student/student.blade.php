@extends('layout.app')
@section('content')



<div class="container">
      <div class="row">
          <div class="col-md-4 offset-4">
              <form action="{{route('student.store')}}" method="post">
                  @csrf
                  <input type="text"name="stu_name" class="form-control" placeholder="student Name">
                  <input type="text"name="father_name" class="form-control" placeholder="Father Name">
                  <input type="text"name="contact" class="form-control" placeholder="Contact">

                  <select  class="form-select" name="level">
                @foreach($levels as $level)
                          <option value="{{$level->id}}">{{$level->name}}</option>
                      @endforeach
                  </select>

                  <select class="form-select" name="Instituation">
                      @foreach($instituaions as $instituate)
                          <option value="{{$instituate->id}}">{{$instituate->name}}</option>
                      @endforeach
                  </select>

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
        <th>Father Name</th>
        <th>contact</th>
        <th>level</th>
        <th>Instituation</th>
        <th>details</th>
        <th>action</th>
        <th>action</th>
    </tr>
    <tbody>
    @forelse($students as $student)
         <tr>
             <td>{{$loop->iteration}}</td>
             <td>{{$student->name?? 'N/A'}}</td>
             <td>{{$student->father_name ?? 'N/A'}}</td>
             <td>{{$student->contact?? 'N/A'}}</td>
             <td>{{$student->Level->name?? 'N/A'}}</td>
             <td>{{$student->Instituation->name?? 'N/A'}}</td>
             <td><a href="{{Route('student.show',$student->id)}}--}}" class="btn btn-primary">details</a></td>
             <td><a href="{{Route('student.delete',$student->id)}}--}}" class="btn btn-primary">delete</a></td>
             <td><a href="{{Route('student.edit',$student->id)}}--}}" class="btn btn-primary">edit</a></td>

        </tr>
    @empty
        <td colspan="3">NO Data found</td>
    @endforelse
    </tbody>
</table>


@endsection
