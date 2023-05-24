@extends("layout.master")
@section('content')
<div class="container pt-5">
    <h1>Edit Course</h1>

    {!! Form::open(['url' => ['courses', $course->id], 'method' => 'POST']) !!}

        <div class="form-group mb-5">
            {{Form::label('title', 'Title')}}
            {{Form::Text('title', $course->title ,['class' =>'form-control'])}}

        </div>

        <div class="form-group mb-5">
            {{Form::label('body', 'Body')}}
            {{Form::Text('body', $course->body ,['class' =>'form-control'])}}

        </div>

        <div class="form-group mb-5">
            {{Form::label('dept', 'Department Name:')}}
            {{Form::Text('dept', $course->dept,['class' =>'form-control'])}}

        </div>

        <div class="form-group mb-5">
            {{Form::label('precourse', 'Dependent Course Name:')}}
            {{Form::Text('precourse', $course->precourse,['class' =>'form-control'])}}

        </div>


        <div class="form-group mb-5">
            {{Form::label('mid', 'Mid:')}}
            {{Form::Text('mid', $course->mid,['class' =>'form-control'])}}

        </div>

        <div class="form-group mb-5">
            {{Form::label('project', 'Project:')}}
            {{Form::Text('project', $course->project,['class' =>'form-control'])}}

        </div>

        <div class="form-group mb-5">
            {{Form::label('final', 'Final:')}}
            {{Form::Text('final', $course->final,['class' =>'form-control'])}}

        </div>


        {{Form::hidden('_method', 'PUT')}}

        <div class="form-group mb-5">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

        </div>

    {!! Form::close() !!}


</div>

@endsection
