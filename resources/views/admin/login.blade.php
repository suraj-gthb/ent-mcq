<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Login - ENTMCQ</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="{{asset('admin/modules/bootstrap-5.1.3/css/bootstrap.css')}}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
	<!-- Boostrap Icon-->
	<link rel="stylesheet" href="{{asset('admin/modules/bootstrap-icons/bootstrap-icons.css')}}">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>
<body>

	<div id="auth">

		<div class="row h-100">
			<div class="col-lg-7 d-none d-lg-block">
				<div id="auth-left">
 				</div>
			</div>
			<div class="col-lg-5 col-12">
				<div id="auth-right">
					<div class="auth-logo">
						<a href="index.html"><img src="{{asset('admin/images/logo.png')}}" alt="Logo"> Atrana</a>
					</div>
					<h1 class="auth-title mb-5">Log in.</h1>
					<!-- <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p> -->
					@if(session('message')) <div class="alert alert-danger">{{session('message')}}</div>@endif
					<form action="{{ url('admin/loginprocess') }}" method="post" id="login_form">
                        @csrf
						<div class="form-group position-relative has-icon-left mb-4">
							<input type="text" class="form-control form-control-xl" placeholder="Username" name="username" id="username">
							<div class="form-control-icon">
								<i class="bi bi-person"></i>
							</div>
						</div>
						<div class="form-group position-relative has-icon-left mb-4">
							<input type="password" class="form-control form-control-xl" placeholder="Password" name="password" id="password">
							<div class="form-control-icon">
								<i class="bi bi-shield-lock"></i>
							</div>
						</div>
						<div class="form-check form-check-lg d-flex align-items-end">
							<input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
							<label class="form-check-label text-gray-600" for="flexCheckDefault">
								Keep me logged in
							</label>
						</div>
						<button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
					</form>
					<div class="text-center mt-5 text-lg fs-4">
						<!-- <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign up</a>.</p> -->
						<p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

<script>
    jQuery('#login_form').validate({
        rules:{
            username: "required",
            password: "required"
        },
        messages:{
            username: "Please enter your username",
            password: "Please enter your password"
        },
        submitHander:function(form){
            form.submit();
        }
    })
</script>

	<!-- General JS Scripts -->
	<script src="{{asset('admin/js/atrana.js')}}"></script>

	<!-- JS Libraies -->
	<script src="{{asset('admin/modules/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('admin/modules/popper/popper.min.js')}}"></script>

    <!-- Template JS File -->
	<script src="{{asset('admin/js/script.js')}}"></script>
	<script src="{{asset('admin/js/custom.js')}}"></script>
 </body>
</html>
