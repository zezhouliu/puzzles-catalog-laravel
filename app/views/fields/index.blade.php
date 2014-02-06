<h1>List of concentrations</h1>
<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Code</th>
		</tr>
	</thead>
	<tbody>
		@foreach($fields as $field)
			<tr>
			<td>{{{ $field->name }}}</td>
			<td>{{{ $field->code }}}</td>
			<th>
				{{ link_to_route('fields.show', 'View', $field->id, array('class'=>'btn btn-primary')) }}
    			{{ link_to_route('fields.edit', 'Edit', $field->id, array('class'=>'btn btn-primary')) }}
				{{ Form::open(array('route' => array('fields.destroy', $field->id), 'method' => 'delete', 'style'=>"display:inline")) }}
            		<button type="submit" href="{{ URL::route('fields.destroy', $field->id) }}" class="btn btn-danger btn-mini">Delete</button>
        		{{ Form::close() }}
			</th>
			</tr>
		@endforeach
	</tbody>

</table>

