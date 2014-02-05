<h1>{{{ $course->title }}}</h1>

<hr/>
        <div class="form-group">
            <strong>Title:</strong>
            {{{$course->title}}}
        </div>

        <div class="form-group">
            <strong>Cat num:</strong>
            {{{$course->cat_num}}}
        </div>

        <div class="form-group">
            <strong>Term:</strong>
            {{{$course->term}}}
        </div>

        <div class="form-group">
            <strong>Bracketed:</strong>
            {{{$course->bracketed}}}
        </div>

        <div class="form-group">
            <strong>Field:</strong>
            {{{$course->field}}}
        </div>

        <div class="form-group">
            <strong>Number:</strong>
            {{{$course->number}}}
        </div>

        <div class="form-group">
            <strong>Faculty:</strong>
            {{{$course->faculty}}}
        </div>

        <div class="form-group">
            <strong>Description:</strong>
            {{ Form::textarea('description', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            <strong>Prerequisites:</strong>
            {{ Form::textarea('prerequisites', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            <strong>Notes:</strong>
            {{ Form::textarea('notes', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            <strong>Meetings:</strong>
            {{ Form::textarea('meetings', null, array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            <strong>Building:</strong>
            {{{$course->building}}}
        </div>

        <div class="form-group">
            <strong>Room:</strong>
            {{{$course->room}}}
        </div>
