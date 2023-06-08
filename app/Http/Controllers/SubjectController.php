<?php

namespace App\Http\Controllers;

use App\Models\tbl_course;
use App\Models\tbl_subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subject_data = DB::table('tbl_subjects')
            ->join('tbl_courses', 'tbl_subjects.course_id', '=', 'tbl_courses.id')
            ->select('*', 'tbl_subjects.id as sid')
            ->get();
        // echo $subject_data;
        return view('admin/view-subject', compact('subject_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $course_data = tbl_course::get();
        return view('admin/add-subject', compact('course_data'));
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
        $request->validate(
            [
                'course_name' => 'required',
                'subject_name' => 'required'
            ],
            [
                'course_name.required' => 'Please select course',
                'subject_name.required' => 'Please enter subject name',
            ]
        );
        $cid = $request->get('course_name');
        $sname = $request->get('subject_name');
        $subject_data = new tbl_subject([
            'course_id' => $cid,
            'subject_name' => $sname
        ]);
        $subject_data->save();
        return redirect()->back()->with('message', 'Subject Added Successfully');
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
        //
        $subject_data = DB::table('tbl_subjects')
            ->join('tbl_courses', 'tbl_subjects.course_id', '=', 'tbl_courses.id')
            ->where('tbl_subjects.id', '=', $id)
            ->select('*', 'tbl_subjects.id as sid')
            ->first();
        // print_r($subject_data);
        // exit();
        $course_data = tbl_course::get();
        return view('admin/edit-subject', compact('course_data', 'subject_data'));
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
        $request->validate(
            [
                'course_name' => 'required',
                'subject_name' => 'required'
            ],
            [
                'course_name.required' => 'Please select course',
                'subject_name.required' => 'Please enter subject name',
            ]
        );
        $cid = $request->get('course_name');
        $sname = $request->get('subject_name');
        $subject_data = tbl_subject::find($id);
        $subject_data->course_id = $cid;
        $subject_data->subject_name = $sname;
        $subject_data->update();
        return redirect('admin/subject')->with('message', 'Subject Updated Successfully');
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
        $subject_data = tbl_subject::find($id);
        $subject_data->delete();
        return redirect()->back()->with('message', 'Subject Delete Successfully');
    }
}
