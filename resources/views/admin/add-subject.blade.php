@extends('admin/header')
@section('content')
@php
$page_name="Add Subject";
@endphp
<div class="row">

  <div class="col-12 col-md-6 col-lg-6 m-auto">
    <div class="card">
      <form action="{{route('subject.store')}}" method="post" id="subject_form">
        @csrf
        <div class="card-header">
          <h4>{{$page_name}}</h4>
          @if(session('message'))<div class="alert alert-success">{{session('message')}}</div>@endif
        </div>
        <div class="card-body">
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
          <div class="mb-3">
            <label>Subject Name</label>
            <input type="text" class="form-control" name="subject_name" id="subject_name">
            <small class="text-danger">@error('subject_name'){{$message}} @enderror</small>
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
  jQuery('#subject_form').validate({
    rules:{
      course_name: "required",
      subject_name: "required",
    },
    messages:{
      course_name: "Please select course",
      subject_name: "Please enter subject name"
    },
    submitHander:function(form){
      form.submit();
    }
  });
</script>
@endsection