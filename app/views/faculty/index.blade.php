<div class="row">
	@foreach($faculty as $f)
	    <div class="col-lg-12">
	        <h1>{{{ $f->full }}}</h1>
        	{{ link_to_route('faculty.show', 'View', $f->id, array('class'=>'btn btn-primary')) }}
        	{{ link_to_route('faculty.edit', 'Edit', $f->id, array('class'=>'btn btn-primary')) }}
            {{ Form::open(array('route' => array('faculty.destroy', $f->id), 'method' => 'delete', 'style'=>"display:inline")) }}
                <button type="submit" href="{{ URL::route('faculty.destroy', $f->id) }}" class="btn btn-danger btn-mini">Delete</button>
            {{ Form::close() }}
	    </div>
	@endforeach

	{{$faculty->links()}}
</div>
