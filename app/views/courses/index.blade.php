<div class="row">
	@foreach($courses as $course)

	    <div class="col-lg-12">
	        <h1>{{{ $course->title }}}</h1>
	            <a class="btn btn-primary" href="/courses/{{ $course->id }}" role="button">View</a>
	            <a class="btn btn-primary" href="/courses/{{ $course->id }}/edit" role="button">Edit</a>
	            {{ Form::open(array('route' => array('courses.destroy', $course->id), 'method' => 'delete', 'style'=>"display:inline")) }}
                    <button type="submit" href="{{ URL::route('courses.destroy', $course->id) }}" class="btn btn-danger btn-mini">Delete</button>
                {{ Form::close() }}
	    </div>

	@endforeach

	{{$courses->links()}}
</div>
