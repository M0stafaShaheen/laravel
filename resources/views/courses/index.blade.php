@extends("layout.master")
@section('content')
<div class="container pt-5">
    <h1>Courses</h1>
    @if(count($courses)> 0)
        @foreach($courses as $course)
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <a href="/courses/{{$course->id}}"><h3>{{$course->title}}</h3></a>
                        <p>Created at : {{$course->created_at}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>There Is No Courses Yet</p>
    @endif
</div>

@endsection
