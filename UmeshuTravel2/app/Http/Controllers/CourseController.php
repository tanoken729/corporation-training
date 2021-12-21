<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $items = Course::all();
        return view('course.index', ['items' => $items]);
    }

    public function find(Request $request)
    {

        return view('course.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $item = Course::find($request->input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('course.find', $param);
    }

    public function add(Request $request)
    {
        return view('course.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Course::$rules);
        $course = new Course;
        $course->title = $request->title;
        $course->price = $request->price;
        $course->save();
        return redirect('/course');
    }

    public function edit(Request $request)
    {
        $course = Course::find($request->id);
        return view('course.edit', ['form' => $course]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Course::$rules);
        $course = Course::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $course->fill($form)->save();
        return redirect('/course');
    }

    public function delete(Request $request)
    {
        $course = Course::find($request->id);
        return view('course.del', ['form' => $course]);
    }

    public function remove(Request $request)
    {
        Course::find($request->id)->delete();
        return redirect('/course');
    }
}
