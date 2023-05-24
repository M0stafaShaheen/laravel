@extends("layout.master")
@section('content')
<div class="container pt-5">
    <h1>{{$course->title}}</h1>
    <p>Dr Name: <span style = "color:red;font-weight:bold;">{{$course->body}}</span></p>
    <p>Depatrment: <span style = "color:red;font-weight:bold;">{{$course->dept}}</span></p>
    <p>Dependent Course is: <span style = "color:red;font-weight:bold;">{{$course->precourse}}</span></p>
    <hr>
    <h3>Division of Grades</h3>
    <p>Mid: <span style = "color:red;font-weight:bold;">{{$course->mid}}</span></p>
    <p>Project: <span style = "color:red;font-weight:bold;">{{$course->project}}</span></p>
    <p>Final Course is: <span style = "color:red;font-weight:bold;">{{$course->final}}</span></p>

    <hr>
    <small>Created at : <span style = "color:red;font-weight:bold;">{{$course->created_at}}</span></small>
    <hr>
    <a href="/courses/{{$course->id}}/edit" class="btn btn-primary">Edit</a>


    {!! Form::open(['url' => ['courses', $course->id], 'method' => 'POST', 'class' => 'd-inline-block']) !!}



        {{Form::hidden('_method', 'DELETE')}}

        <div class="form-group mb-5">
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

        </div>

    {!! Form::close() !!}



</div>

@endsection
