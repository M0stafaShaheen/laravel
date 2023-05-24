@extends("layout.master")
@section('content')
<div class="container pt-5">
    <h1>Create Course</h1>

    {!! Form::open(['url' => 'courses', 'method' => 'POST ']) !!}

        <div class="form-group mb-5">
            {{Form::label('title', 'Name Of The Course')}}
            {{Form::Text('title', '',['class' =>'form-control'])}}

        </div>

        <div class="form-group mb-5">
            {{Form::label('body', 'Dr Name:')}}
            {{Form::Text('body', '',['class' =>'form-control'])}}

        </div>

        <div class="form-group mb-5">
            {{Form::label('dept', 'Department Name:')}}
            {{Form::Text('dept', '',['class' =>'form-control'])}}

        </div>

        <div class="form-group mb-5">
            {{Form::label('precourse', 'Dependent Course Name:')}}
            {{Form::Text('precourse', '',['class' =>'form-control'])}}

        </div>


        <div class="form-group mb-5">
            {{Form::label('mid', 'Mid:')}}
            {{Form::Text('mid', '',['class' =>'form-control'])}}

        </div>

        <div class="form-group mb-5">
            {{Form::label('project', 'Project:')}}
            {{Form::Text('project', '',['class' =>'form-control'])}}

        </div>

        <div class="form-group mb-5">
            {{Form::label('final', 'Final:')}}
            {{Form::Text('final', '',['class' =>'form-control'])}}

        </div>



        <div class="form-group mb-5">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

        </div>


    {!! Form::close() !!}


</div>

@endsection
