@extends('admin/header')
@section('content')
@php $page_name="View Course";
$count=1;
@endphp
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>{{$page_name}}</h4>
            @if(session('message'))<div class="alert alert-success">{{session('message')}}</div>@endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Created_at</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($course_data as $cdata)
                        <tr>
                            <th scope="row">{{$count++}}</th>
                            <td>{{$cdata->course_name}}</td>
                            <td>{{$cdata->created_at}}</td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-warning"><a href="{{route('course.edit', $cdata->id)}}" class="text-white">Edit</a></button>
                            </td>
                            <td>
                                <form action="{{route('course.destroy',$cdata->id)}}" method="post">
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection