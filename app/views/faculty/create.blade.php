<div class="row">
    <div class="col-xs-8">
        <h3>Create a Faculty</h3>
        <hr>
        {{ Form::open(array('url' => 'faculty')) }}

        <div class="form-group">
            {{ Form::label('first', 'First:') }}
            {{ Form::text('first', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('middle', 'Middle:') }}
            {{ Form::text('middle', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('last', 'Last:') }}
            {{ Form::text('last', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('suffix', 'Suffix:') }}
            {{ Form::text('suffix', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('faculty_id', 'Id:') }}
            {{ Form::text('faculty_id', null, array('class'=>'form-control')) }}
        </div>


        {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
</div>