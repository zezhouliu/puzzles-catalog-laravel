<div class="row">
	@foreach($courses as $course)

	    <div class="col-lg-12">
	        <h1>{{{ $course->title }}}</h1>
	        <p>
	            <a class="btn btn-primary" href="/courses/{{ $course->id }}" role="button">View</a>
	            <a class="btn btn-primary" href="/courses/{{ $course->id }}/edit" role="button">Edit</a>
	        </p>
	    </div>

	@endforeach

	{{$courses->links()}}
</div>
