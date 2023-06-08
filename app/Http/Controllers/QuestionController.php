<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\tbl_course;
use App\Models\tbl_question;
use App\Models\tbl_subject;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $question_data=DB::table('tbl_questions')
        ->join('tbl_courses','tbl_courses.id','=','tbl_questions.course_id')
        ->join('tbl_subjects','tbl_subjects.id','=','tbl_questions.subject_id')
        ->select('*','tbl_questions.id as qid')
        ->get();
        // echo"<pre>";
        // print_r($question_data);
        // exit();
        // return response()->json($question_data);
        return view('admin/view-question',compact('question_data'));
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
        $subject_data = tbl_subject::get();
        return view('admin/add-question', compact('course_data', 'subject_data'));
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
                'subject_name' => 'required',
                'question_name' => 'required',
                'option_one' => 'required',
                'option_two' => 'required',
                'option_three' => 'required',
                'option_four' => 'required',
                'answer' => 'required'
            ],
            [
                'course_name.required' => 'Select Course',
                'subject_name.required' => 'Select Subject',
                'question_name.required' => 'Enter Question',
                'option_one.required' => 'Enter Option1',
                'option_two.required' => 'Enter Option 2',
                'option_three.required' => 'Enter Option 3',
                'option_four.required' => 'Enter Option 4',
                'answer.required' => 'Choose Correct Answer'
            ]
        );
        $cid = $request->get('course_name');
        $sid = $request->get('subject_name');
        $question_name = $request->get('question_name');
        $option1 = $request->get('option_one');
        $option2 = $request->get('option_two');
        $option3 = $request->get('option_three');
        $option4 = $request->get('option_four');
        $answer = $request->get('answer');
        $question_data = new tbl_question([
            'course_id' => $cid,
            'subject_id' => $sid,
            'question' => $question_name,
            'option_1' => $option1,
            'option_2' => $option2,
            'option_3' => $option3,
            'option_4' => $option4,
            'correct_answer' => $answer
        ]);
        $question_data->save();
        return redirect()->back()->with('message', 'Question Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject_data = DB::table('tbl_subjects')
        ->where('course_id', '=', $id)
        ->select('*')
        ->get();
        return response()->json($subject_data);
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
        $question_data=DB::table('tbl_questions')
        ->join('tbl_courses','tbl_courses.id','=','tbl_questions.course_id')
        ->join('tbl_subjects','tbl_subjects.id','=','tbl_questions.subject_id')
        ->where('tbl_questions.id','=',$id)
        ->select('*','tbl_questions.id as qid')
        ->first();

        $course_data=tbl_course::get();
        $subject_data=tbl_subject::get();
        return view('admin/edit-question',compact('question_data','subject_data','course_data'));
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
        echo $id;

        $request->validate(
            [
                'course_name' => 'required',
                'subject_name' => 'required',
                'question_name' => 'required',
                'option_one' => 'required',
                'option_two' => 'required',
                'option_three' => 'required',
                'option_four' => 'required',
                'answer' => 'required'
            ],
            [
                'course_name.required' => 'Select Course',
                'subject_name.required' => 'Select Subject',
                'question_name.required' => 'Enter Question',
                'option_one.required' => 'Enter Option1',
                'option_two.required' => 'Enter Option 2',
                'option_three.required' => 'Enter Option 3',
                'option_four.required' => 'Enter Option 4',
                'answer.required' => 'Choose Correct Answer'
            ]
        );
        $cid = $request->get('course_name');
        $sid = $request->get('subject_name');
        $question_name = $request->get('question_name');
        $option1 = $request->get('option_one');
        $option2 = $request->get('option_two');
        $option3 = $request->get('option_three');
        $option4 = $request->get('option_four');
        $answer = $request->get('answer');
        $question_data=tbl_question::find($id);
        $question_data->course_id=$cid;
        $question_data->subject_id=$sid;
        $question_data->question=$question_name;
        $question_data->option_1=$option1;
        $question_data->option_2=$option2;
        $question_data->option_3=$option3;
        $question_data->option_4=$option4;
        $question_data->correct_answer=$answer;
        $question_data->update();
        return redirect('admin/question')->with('message', 'Question Updated Successfully');

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
        $question_data=tbl_question::find($id);
        $question_data->delete();
        return redirect()->back()->with('message', 'Question Delete Successfully');
    }

    public function getSubject(Request $request){
        echo $request->cid;
        die();
        $subject_data = DB::table('tbl_subject')
        ->where('course_id', '=', $request->cid)
        ->select('*')
        ->get();
        return response()->json($subject_data);
    }
}
