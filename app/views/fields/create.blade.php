<div class="row">
    <div class="col-xs-8">
        <h3>Create a Course</h3>
        <hr>
        {{ Form::open(array('url' => 'courses')) }}

        <div class="form-group">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('cat_num', 'Cat num:') }}
            {{ Form::text('cat_num', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('term', 'Term:') }}
            {{ Form::text('term', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('bracketed', 'Bracketed:') }}
            {{ Form::checkbox('bracketed') }}
        </div>

        <div class="form-group">
            {{ Form::label('field', 'Field:') }}
            {{ Form::text('field', null, array('class'=>'form-control')) }}
        </div>

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
        {{ Form::close() }}
    </div>
</div>