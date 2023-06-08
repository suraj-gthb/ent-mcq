@extends('admin/header')
@section('content')
@php $page_name="Dashboard"; @endphp
<div class="container-fluid dashboard">
			<div class="content-header">
				<h1>Dashboard</h1>
				<p></p>
			</div>

			<div class="row">

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-sitemap icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<p>Courses</p>
									<h5>{{$courses}}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-book icon-home bg-success text-light"></i>
								</div>
								<div class="col-8">
									<p>Subjects</p>
									<h5>{{$subjects}}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-list-check  icon-home bg-info text-light"></i>
								</div>
								<div class="col-8">
									<p>Questions</p>
									<h5>{{$questions}}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="fas fa-users  icon-home bg-warning text-light"></i>
								</div>
								<div class="col-8">
									<p>Students</p>
									<h5>{{$students}}</h5>
								</div>
							</div>
						</div>
					</div>

				</div>
@endsection