<div class="row">
	@foreach($courses as $course)
	    <div class="col-lg-12">
	        <h1>{{{ $course->title }}}</h1>
        	{{ link_to_route('courses.show', 'View', $course->id, array('class'=>'btn btn-primary')) }}
        	{{ link_to_route('courses.edit', 'Edit', $course->id, array('class'=>'btn btn-primary')) }}
            {{ Form::open(array('route' => array('courses.destroy', $course->id), 'method' => 'delete', 'style'=>"display:inline")) }}
                <button type="submit" href="{{ URL::route('courses.destroy', $course->id) }}" class="btn btn-danger btn-mini">Delete</button>
            {{ Form::close() }}
	    </div>
	@endforeach

	{{$courses->links()}}
</div>
