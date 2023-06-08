@extends('admin/header')
@section('content')
@php
$page_name="Add Course";
@endphp
<div class="row">

  <div class="col-12 col-md-6 col-lg-6 m-auto">
    <div class="card">
      <form action="{{route('course.store')}}" method="post" id="course_form">
        @csrf
        <div class="card-header">
          <h4>{{$page_name}}</h4>
          @if(session('message'))<div class="alert alert-success">{{session('message')}}</div>@endif
        </div>
        <div class="card-body">
          <div class="mb-3">
            <label>Course Name</label>
            <input type="text" class="form-control" name="course_name" id="course_name">
            <small class="text-danger">@error('course_name'){{$message}} @enderror</small>
          </div>

        </div>
        <div class="card-footer text-right">
          <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  jQuery('#course_form').validate({
    rules:{
      course_name: "required"
    },
    messages:{
      course_name: 'Please enter course name!'
    },
    submitHander:function(form){
      form.submit();
    }
  });
</script>
@endsection