@extends('header')

@section('content')
@php $page_name='Home'; @endphp
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-5 order-md-last">
                <div class="login-wrap p-4 p-md-4">
                    <h3 class="mb-4">Register Now</h3>
                    <form action="register-process" method="post" class="signup-form" id="register_form">
                        @csrf
                        <div class="form-group">
                            <label class="label" for="name">Full Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" name="full_name" id="full_name" value="{{old('full_name')}}">
                            @error('full_name')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="form-group">
                            <label class="label" for="email">Email Address</label>
                            <input type="text" class="form-control" placeholder="Email Address" name="email_id" id="email_id" value="{{old('email_id')}}">
                            @error('email_id')<small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label class="label" for="password">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Mobile No" name="mobile_no" id="mobile_no" value="{{old('mobile_no')}}">
                            @error('mobile_no')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="form-group">
                            <label class="label" for="email">Email Address</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            @error('password')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="form-group">
                            <label class="label" for="password">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password">
                            @error('confirm_password')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="form-group d-flex justify-content-end mt-4 mb-3">
                            <button type="submit" class="btn btn-primary submit"><span class="fa fa-paper-plane"></span></button>
                        </div>
                    </form>
                    <p class="text-center ">Already have an account? <a href="#signin">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Course Category</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 col-lg-2">
                <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg)">
                    <div class="text w-100 text-center">
                        <h3>IT &amp; Software</h3>
                        <span>100 course</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-2">
                <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-9.jpg)">
                    <div class="text w-100 text-center">
                        <h3>Music</h3>
                        <span>100 course</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-2">
                <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-3.jpg)">
                    <div class="text w-100 text-center">
                        <h3>Photography</h3>
                        <span>100 course</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-2">
                <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-5.jpg)">
                    <div class="text w-100 text-center">
                        <h3>Marketing</h3>
                        <span>100 course</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-2">
                <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-8.jpg)">
                    <div class="text w-100 text-center">
                        <h3>Health</h3>
                        <span>100 course</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-2">
                <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-6.jpg)">
                    <span class="text w-100 text-center">
                        <h3>Audio Video</h3>
                        <span>100 course</span>
                    </span>
                </a>
            </div>
            <!-- <div class="col-md-12 text-center mt-5">
                <a href="#" class="btn btn-secondary">See All Courses</a>
            </div> -->
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Pick Your Course</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-1.jpg)">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-2.jpg)">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-3.jpg)">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-4.jpg)">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-5.jpg)">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-6.jpg)">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span class="flaticon-online"></span></div>
                    <div class="text">
                        <strong class="number" data-number="400">0</strong>
                        <span>Online Courses</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span class="flaticon-graduated"></span></div>
                    <div class="text">
                        <strong class="number" data-number="4500">0</strong>
                        <span>Students Enrolled</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span class="flaticon-instructor"></span></div>
                    <div class="text">
                        <strong class="number" data-number="1200">0</strong>
                        <span>Experts Instructors</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span class="flaticon-tools"></span></div>
                    <div class="text">
                        <strong class="number" data-number="300">0</strong>
                        <span>Hours Content</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">
    <div class="overlay" style="background-image: url(images/bg_2.jpg);"></div>
    <div class="container">
        <div class="row pb-4">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">What Are Students Says</h2>
            </div>
        </div>
    </div>
    <div class="container container-2">
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    jQuery('#register_form').validate({
        rules:{
            full_name: "required"
        },
        messages:{
            full_name: "Full Name is Required"
        }
    });
</script>

@endsection