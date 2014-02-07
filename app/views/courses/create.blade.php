<div class="row">
    <div class="col-xs-8">
        <h3>Create a Course</h3>
        <hr>
        {{ Form::open(array('url' => 'courses')) }}
            @include('courses/partials/_form')
        {{ Form::close() }}
    </div>
</div>