<?php

class FieldController extends \BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $fields = Field::get();
        $this->layout->content = View::make('fields.index', ['fields' => $fields]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->layout->content = View::make('fields.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $field = new Field();
        $field->title = Input::get('title');
        $field->save();

        return Redirect::to('fields/' . $field->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function show($id)
    {
        $field = Field::find($id);
        $this->layout->content = View::make('fields.show', ['field' => $field]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function edit($id)
    {
        $field = Field::findOrFail($id);
        $this->layout->content = View::make('fields/edit', ['field' => $field]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function update($id)
    {
        $field = Field::findOrFail($id);
        $field->title = Input::get('title');
        $field->save();

        return Redirect::to('fields/' . $field->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function destroy($id)
    {
        $field = Field::findOrFail($id);
        $field->delete();

        return Redirect::to('fields');
    }

}
