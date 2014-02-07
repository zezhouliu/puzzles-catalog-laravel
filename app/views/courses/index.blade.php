<h1>List of courses</h1>
<table class="table">
	<thead>
		<tr>
			<th>Title</th>
			<th>Field</th>
			<th>Term</th>
			<th>Number</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($courses as $course)
			<tr>
			<td>{{{ $course->title }}}</td>
			<td>{{{ $course->field }}}</td>
			<td>{{{ $course->term }}}</td>
			<td>{{{ $course->number }}}</td>
			<th>
				{{ link_to_route('courses.show', 'View', $course->id, array('class'=>'btn btn-primary')) }}
    			{{ link_to_route('courses.edit', 'Edit', $course->id, array('class'=>'btn btn-primary')) }}
				{{ Form::open(array('route' => array('courses.destroy', $course->id), 'method' => 'delete', 'style'=>"display:inline")) }}
            		<button type="submit" href="{{ URL::route('courses.destroy', $course->id) }}" class="btn btn-danger btn-mini">Delete</button>
        		{{ Form::close() }}
			</th>
			</tr>
		@endforeach
	</tbody>

</table>

{{$courses->appends(array('sort'=>$sort, 'order'=>$order))->links()}}
