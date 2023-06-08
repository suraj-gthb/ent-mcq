@extends('admin/header')
@section('content')
@php
$page_name="Update Subject";
@endphp
<div class="row">

                <div class="col-12 col-md-6 col-lg-6 m-auto">
                  <div class="card">
                    <form action="{{route('subject.update',$subject_data->sid)}}" method="post">
                        @csrf
                        @method('PATCH')
                      <div class="card-header">
                        <h4>{{$page_name}}</h4>
                        @if(session('message'))<div class="alert alert-success">{{session('message')}}</div>@endif
                      </div>
                      <div class="card-body">
                      <div class="mb-3">
                          <label>Course Name</label>
                          <select class="form-select form-control" name="course_name" id="course_name" >
                            <option value="">-------Select Course-----</option>
                            @foreach($course_data as $cdata)
                            <option value="{{$cdata->id}}" {{($subject_data->course_id==$cdata->id)?'selected':''}}>{{$cdata->course_name}}</option>
                            @endforeach
                          </select>
                          <small class="text-danger">@error('course_name'){{$message}} @enderror</small>
                       </div>
                        <div class="mb-3">
                          <label>Subject Name</label>
                          <input type="text" class="form-control" name="subject_name" id="subject_name" value="{{$subject_data->subject_name}}">
                          <small class="text-danger">@error('subject_name'){{$message}} @enderror</small>
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