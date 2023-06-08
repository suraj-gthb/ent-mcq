<?php

namespace App\Http\Controllers;

use App\Models\tbl_course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $course_data=tbl_course::get();

        return view('admin/view-course',compact('course_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/add-course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $request->validate([
                'course_name'=>'required'
            ],
            [
                'course_name.required' =>'Please enter course name'
            ]
            );
            $cname=$request->get('course_name');
            $course=new tbl_course([
                'course_name' => $cname
            ]);
            $course->save();
            return redirect()->back()->with('message','Course Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course_data=tbl_course::find($id);
        return view('admin/edit-course', compact('course_data'));
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
        //
        $request->validate([
            'course_name'=>'required'
        ],
        [
            'course_name.required' =>'Please enter course name'
        ]
        );
        $cname=$request->get('course_name');
        $course=tbl_course::find($id);
        $course->course_name=$cname;
        $course->update();
        return redirect('admin/course')->with('message','Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $course_data=tbl_course::find($id);
        $course_data->delete();
        return redirect()->back()->with('message','Course Delete Successfully');
    }
}
