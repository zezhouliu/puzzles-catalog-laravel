{{ Form::bText('title', 'Title') }}

{{ Form::bText('cat_num', 'Category number') }}

{{ Form::bText('term', 'Term') }}

{{ Form::bCheckbox('bracketed', 'Bracketed') }}

{{ Form::bText('field', 'Field') }}

<div class="form-group">
    {{ Form::label('number', 'Number:') }}
    {{ Form::text('number', null, array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('faculty', 'Faculty:') }}
    {{ Form::text('faculty', null, array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description:') }}
    {{ Form::textarea('description', null, array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('prerequisites', 'Prerequisites:') }}
    {{ Form::textarea('prerequisites', null, array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('notes', 'Notes:') }}
    {{ Form::textarea('notes', null, array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('meetings', 'Meetings:') }}
    {{ Form::textarea('meetings', null, array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('building', 'Building:') }}
    {{ Form::text('building', null, array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('room', 'Room:') }}
    {{ Form::text('room', null, array('class'=>'form-control')) }}
</div>

{{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
