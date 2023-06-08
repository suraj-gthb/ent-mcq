@extends('admin/header')
@section('content')
@php $page_name="Update Course";
@endphp
<div class="row">

                <div class="col-12 col-md-6 col-lg-6 m-auto">
                  <div class="card">
                    <form action="{{route('course.update',$course_data->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                      <div class="card-header">
                        <h4>{{$page_name}}</h4>
                        @if(session('message'))<div class="alert alert-success">{{session('message')}}</div>@endif
                      </div>
                      <div class="card-body">
                        <div class="mb-3">
                          <label>Course Name</label>
                          <input type="text" class="form-control" name="course_name" id="course_name" value="{{$course_data->course_name}}">
                          <small class="text-danger">@error('course_name'){{$message}} @enderror</small>
                        </div>

                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </form>
                </div>
            </div>
</div>
@endsection