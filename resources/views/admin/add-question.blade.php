@extends('admin/header')
@section('content')
@php
$page_name="Add Question";
@endphp
<div class="row">
    <div class="col-12 col-md-11 col-lg-11 m-auto">
        <div class="card">
            <form action="{{route('question.store')}}" method="post" id="question_form">
                @csrf
                <div class="card-header">
                    <h4>{{$page_name}}</h4>
                    @if(session('message'))<div class="alert alert-success">{{session('message')}}</div>@endif
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label>Course Name</label>
                                <select class="form-select form-control" name="course_name" id="course_name">
                                    <option value="">-------Select Course-----</option>
                                    @foreach($course_data as $cdata)
                                    <option value="{{$cdata->id}}">{{$cdata->course_name}}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger">@error('course_name'){{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label>Subject Name</label>
                                <select class="form-select form-control" name="subject_name" id="subject_name">
                                    <option value="">-------Select Subject-----</option>
                                </select>
                                <small class="text-danger">@error('subject_name'){{$message}} @enderror</small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Question </label>
                        <textarea class="form-control" name="question_name" id="question_name"></textarea>
                        <small class="text-danger">@error('question_name'){{$message}} @enderror</small>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label>Option 1</label>
                                <textarea class="form-control" name="option_one" id="option_one"></textarea>
                                <small class="text-danger">@error('option_one'){{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label>Option 2</label>
                                <textarea class="form-control" name="option_two" id="option_two"></textarea>
                                <small class="text-danger">@error('option_two'){{$message}} @enderror</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label>Option 3</label>
                                <textarea class="form-control" name="option_three" id="option_three"></textarea>
                                <small class="text-danger">@error('option_three'){{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label>Option 4</label>
                                <textarea class="form-control" name="option_four" id="option_four"></textarea>
                                <small class="text-danger">@error('option_four'){{$message}} @enderror</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Option 1</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" id="option_1" name="answer" value="option_1">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Option 2</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" id="option_2" name="answer" value="option_2">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Option 3</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" id="option_3" name="answer" value="option_3">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>Option 4</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" id="option_3" name="answer" value="option_4">
                                </div>
                            </div>

                        </div>
                        <small class="text-danger">@error('answer'){{$message}} @enderror</small>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#course_name').on('change', function() {
            var c_id = $(this).val();
            $.ajax({
                type: 'get',
                url: '' + c_id,
                dataType: 'json',
                success: function(data) {
                    //alert(JSON.stringify(data));
                    $('#subject_name').html('<option value="">-------Select Subject-----</option>');
                    $.each(data, function(key, value) {
                        $('#subject_name').append('<option value="' + value.id + '">' + value.subject_name + '</option>');
                    });
                }
            });
        });
    });

    //form validation
    jQuery('#question_form').validate({
        rules:{
            course_name: "required",
            subject_name: "required",
            question_name: "required",
            option_one: "required",
            option_two: "required",
            option_three: "required",
            option_four: "required",
            answer: "required"
        },
        messages:{
            course_name: "Please select course",
            subject_name: "Please select subject",
            question_name: "Enter question",
            option_one: "Enter option one",
            option_two: "Enter option two",
            option_three: "Enter option three",
            option_four: "Enter option four",
            answer: "Select currect answer"
        },
        submitHandler:function(form){
            form.submit();
        }
    });

</script>
@endsection