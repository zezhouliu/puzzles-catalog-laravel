<div class="row">
    <div class="col-xs-8">
        <h3>Edit Course</h3>
        <hr>
        {{ Form::model($course, array(
            'route' => array('courses.update', $course->id), 
            'method' => 'PUT'))
        }}
            @include('courses/partials/_form')
        {{ Form::close() }}
    </div>
</div>