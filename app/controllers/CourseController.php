<?php

class CourseController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        # Basic sorting
        $allowed = array('id', 'title');
        $sort = in_array(Input::get('sort'), $allowed) ? Input::get('sort') : 'id';
        $order = Input::get('order') === 'desc' ? 'desc' : 'asc'; // default asc

        $courses = Course::orderBy($sort, $order)->paginate(30);
        $this->layout->content = View::make('courses.index', [
            'courses' => $courses, 
            'sort' => $sort, 
            'order' => $order
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->layout->content = View::make('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $course = new Course();
        $course->title = Input::get('title');
        $course->cat_num = Input::get('cat_num');
        $course->term = Input::get('term');
        $course->bracketed = Input::get('bracketed', false);
        $course->field = Input::get('field');
        $course->number = Input::get('number');
        $course->faculty = Input::get('faculty');
        $course->description = Input::get('description');
        $course->prerequisites = Input::get('prerequisites');
        $course->notes = Input::get('notes');
        $course->meetings = Input::get('meetings');
        $course->building = Input::get('building');
        $course->room = Input::get('room');

        $course->save();
        Session::flash('success', "Successfully created the course {$course->title}");

        return Redirect::to('courses/' . $course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $this->layout->content = View::make('courses.show', ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $this->layout->content = View::make('courses/edit', ["course" => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $course = Course::findOrFail($id);
        $course->title = Input::get('title');
        $course->cat_num = Input::get('cat_num');
        $course->term = Input::get('term');
        $course->bracketed = Input::get('bracketed');
        $course->field = Input::get('field');
        $course->number = Input::get('number');
        $course->faculty = Input::get('faculty');
        $course->description = Input::get('description');
        $course->prerequisites = Input::get('prerequisites');
        $course->notes = Input::get('notes');
        $course->meetings = Input::get('meetings');
        $course->building = Input::get('building');
        $course->room = Input::get('room');

        $course->save();
        Session::flash('success', "Successfully updated the course {$course->title}");

        return Redirect::to('courses/' . $course->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // TODO
        $course = Course::findOrFail($id);
        $title = $course->title;
        $course->delete();

        // Redirect
        Session::flash('warning', "Successfully deleted the course {$title}");
        return Redirect::to('courses');
    }

}
