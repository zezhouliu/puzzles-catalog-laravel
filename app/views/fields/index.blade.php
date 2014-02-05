<div class="row">
	@foreach($fields as $field)

	    <div class="col-lg-12">
	        <h1>{{{ $field->title }}}</h1>
	        <p>
	            <a class="btn btn-primary" href="/fields/{{ $field->id }}" role="button">View</a>
	        </p>
	    </div>

	@endforeach

	{{$fields->links()}}
</div>
