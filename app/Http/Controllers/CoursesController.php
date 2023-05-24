<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'dept' => 'required',
            'precourse' => 'required',
            'mid' => 'required',
            'project' => 'required',
            'final' => 'required'
        ]);

        $course = new Course;
        $course->title = $request->title;
        $course->body = $request->body;
        $course->dept = $request->dept;
        $course->precourse = $request->precourse;
        $course->mid = $request->mid;
        $course->project = $request->project;
        $course->final = $request->final;

        $course->save();

        return redirect("/courses")->with("success", "Course created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view("courses.show")->with("course", $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view("courses.edit")->with("course", $course);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->title = $request->title;
        $course->body = $request->body;
        $course->dept = $request->dept;
        $course->precourse = $request->precourse;
        $course->mid = $request->mid;
        $course->project = $request->project;
        $course->final = $request->final;


        $course->save();
        return redirect("/courses");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect("/courses");

    }
}
