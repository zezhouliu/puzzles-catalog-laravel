<div class="row">
    <div class="col-xs-8">
        <h3>Edit Field</h3>
        <hr>
        {{ Form::model($field, array(
            'route' => array('fields.update', $field->id), 
            'method' => 'PUT'))
        }}

        <div class="form-group">
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('code', 'Code:') }}
            {{ Form::text('code', null, array('class'=>'form-control')) }}
        </div>

        {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
</div>
