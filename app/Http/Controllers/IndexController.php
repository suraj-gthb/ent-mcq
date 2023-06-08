<?php

namespace App\Http\Controllers;

use App\Models\tbl_student;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate(
            [
                'full_name' => 'required',
                'email_id' => 'required|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
                'mobile_no' => 'required|regex:/^[789]\d{9}$/',
                'password' => 'required',
                'confirm_password' => 'required_with:password|same:password'
            ],
            [
                'full_name.required' => 'Full Name is required',
                'email_id.required' => 'Email ID is required',
                'email_id.regex' => 'Invalid Email ID',
                'mobile_no.required' => ' Mobile No is required',
                'mobile_no.regex' => 'Invalid Mobile No',
                'password.required' => ' Password is required',
                'confirm_password.required' => ' Confirm Password is required'
            ]
        );
        $fullname = $request->get('full_name');
        $email = $request->get('email_id');
        $mobile = $request->get('mobile_no');
        $password = $request->get('password');
        $student_data = new tbl_student([
            'full_name' => $fullname,
            'email_id' => $email,
            'mobile_no' => $mobile,
            'password' => $password
        ]);
        if ($student_data->save()) {
            $data = ['msg' => 'Success'];
            $user['to'] = $email;
            Mail::send('send-mail', $data, function ($message) use ($user) {
                $message->to($user['to']);
                $message->subject('Registration Successfully!');
            });
            echo "<script>alert('You are Register Successfully');window.location.href='../';</script>";
        }
    }
}
