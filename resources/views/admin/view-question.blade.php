@extends('admin/header')
@section('content')
@php $page_name="View Question";
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
                <table class="table table-striped text-nowrap">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Subject Name</th>
                            <th scope="col">Question </th>
                            <th scope="col">Option 1</th>
                            <th scope="col">Option 2</th>
                            <th scope="col">Option 3</th>
                            <th scope="col">Option 4</th>
                            <th scope="col">Correct Answer</th>
                            <th scope="col">Created_at</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($question_data as $qdata)
                        <tr>
                            <th scope="row">{{$count++}}</th>
                            <td>{{$qdata->course_name}}</td>
                            <td>{{$qdata->subject_name}}</td>
                            <td>{{$qdata->question}}</td>
                            <td>{{$qdata->option_1}}</td>
                            <td>{{$qdata->option_2}}</td>
                            <td>{{$qdata->option_3}}</td>
                            <td>{{$qdata->option_4}}</td>
                            <td>{{$qdata->correct_answer}}</td>
                            <td>{{$qdata->created_at}}</td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-warning"><a href="{{route('question.edit', $qdata->qid)}}" class="text-white">Edit</a></button>
                            </td>
                            <td>
                                <form action="{{route('question.destroy',$qdata->qid)}}" method="post">
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