<?php

class FacultyController extends \BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $faculty = Faculty::get();
        $this->layout->content = View::make('faculty.index', ['faculty' => $faculty]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->layout->content = View::make('faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $faculty = new Faculty();
        $faculty->first = Input::get('first');
        $faculty->middle = Input::get('middle');
        $faculty->last = Input::get('last');
        $faculty->suffix = Input::get('suffix');
        $faculty->id = Input::get('id');
        $faculty->save();

        return Redirect::to('faculty/' . $faculty->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function show($id)
    {
        $faculty = Faculty::find($id);
        $this->layout->content = View::make('faculty.show', ['faculty' => $faculty]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);
        $this->layout->content = View::make('faculty/edit', ["faculty" => $faculty]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function update($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->faculty_id = Input::get('faculty_id');
        $faculty->first = Input::get('first');
        $faculty->middle = Input::get('middle');
        $faculty->last = Input::get('last');
        $faculty->suffix = Input::get('suffix');
        $faculty->save();

        return Redirect::to('faculty/' . $faculty->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();

        return Redirect::to('faculty');
    }

}
