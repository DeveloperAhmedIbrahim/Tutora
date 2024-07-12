<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list()
    {
        $courses = Course::all();
        return view('admin.courses.list', compact('courses'));
    }

    public function new()
    {
        return view('admin.courses.new');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $image_name = '';
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/courses'), $image_name);
        }

        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->image = $image_name;
        $course->save();
        return redirect('admin/courses/list')->with('success','New course added successfully.');
    }

    public function edit($id)
    {
        $course = Course::find($id);
        if($course != NULL)
        {
            return view('admin.courses.edit', compact('course'));
        }
        return redirect('admin/courses/list')->with('error','Course not found.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        $course = Course::find($request->id);
        if($course != NULL)
        {
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image_path = public_path('uploads/courses');
                $uploaded = $image->move($image_path, $image_name);
                if($uploaded)
                {
                    if(file_exists(public_path("uploads/courses/{$course->image}")))
                    {
                        unlink(public_path("uploads/courses/{$course->image}"));
                    }
                    $course->image = $image_name;
                }
            }
            $course->title = $request->title;
            $course->description = $request->description;
            $course->save();
            return redirect('admin/courses/list')->with('success','Course updated successfully.');
        }
        return redirect('admin/courses/list')->with('error','Course not found.');
    }

    public function delete($id)
    {
        $course = Course::find($id);
        if($course != NULL)
        {
            $course->delete();
            return redirect('admin/courses/list')->with('success','Course delete successfully.');
        }
        return redirect('admin/courses/list')->with('error','Course not found.');
    }
}
