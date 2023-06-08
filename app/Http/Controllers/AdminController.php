<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tbl_course;
use App\Models\tbl_subject;
use App\Models\tbl_question;
use App\Models\tbl_student;

class AdminController extends Controller
{
    public function login(Request $request)
    {

        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'Username is required',
                'password.required' => 'Password is required',
            ]
        );

        $username = $request->get('username');
        $password = $request->get('password');

        $check = DB::table('tbl_admins')
            ->where('username', '=', $username)
            ->select('*')
            ->first();
        //return response()->json($check);
        if ($check == '') {
            return back()->with('message', 'Account Not Found!');
        }
        if ($check->password == $password) {
            $request->session()->put('admin_id', $check->id);
            $request->session()->put('admin_username', $check->username);
            return redirect('admin/dashboard');
        } else {
            return back()->with('message', 'Username or Password is incorrect!');
        }
    }

    public function logout()
    {
        // echo session()->get('admin_username');
        // exit();
        session()->flush();
        return redirect('admin/login');
    }
    public function dashboard()
    {
        $courses=tbl_course::count();
        $subjects=tbl_subject::count();
        $questions=tbl_question::count();
        $students=tbl_student::count();

        return view('admin/index', compact('courses', 'subjects', 'questions','students'));
    }
}
