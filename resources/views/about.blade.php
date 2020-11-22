@extends('master')
@section('body_class')
    about
@endsection
@section('content')

<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>ABOUT <span>ME</span></h1>
    <span class="title-bg">Resume</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Personal Info Starts -->
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                    </div>
                    <div class="col-12 d-block d-sm-none">
                        <img src="img/2.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">first name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $aboutMe->firstName}}</span> </li>
                            <li> <span class="title">last name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $aboutMe->lastName}}</span> </li>
                            <li> <span class="title">Age :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $aboutMe->age}} Years</span> </li>
                            <li> <span class="title">Nationality :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $aboutMe->nationality}}</span> </li>
                            <li> <span class="title">Freelance :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $aboutMe->freelance}}</span> </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Address :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $aboutMe->address}}</span> </li>
                            <li> <span class="title">phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $aboutMe->phone}}</span> </li>
                            <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $aboutMe->email}}</span> </li>
                            @php
                                $languages= json_decode($aboutMe->languages)
                            @endphp
                            <li> <span class="title">language :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">
                                @foreach ($languages as $language)
                                    {{ $language }}
                                    @if($loop->last)
                                    @else
                                    ,
                                    @endif
                                @endforeach
                            </span> </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="{{setting('site.cv')}}" class="btn btn-download">Download CV</a>
                    </div>
                </div>
            </div>
            <!-- Personal Info Ends -->
            <!-- Boxes Starts -->
            <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">3</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">years of <span class="d-block">experience</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">4</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">projects</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">4</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span class="d-block">customers</span></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Boxes Ends -->
        </div>
        <hr class="separator">
        <!-- Skills Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
            </div>
            @foreach ($skills as $skill)
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p85">
                    <span>{{$skill->percentage}}</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>

                </div>
            <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">{{$skill->name}}</h6>
            </div>
            @endforeach
        </div>
        <!-- Skills Ends -->
        <hr class="separator mt-1">
        <!-- Experience & Education Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education</h3>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        @foreach ($exeperiences as $data)

                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">{{$data->date_from}} - {{$data->date_to}}</span>
                            <h5 class="poppins-font text-uppercase">{{$data->name}} <span class="place open-sans-font">{{$data->company}}</span></h5>
                            <p class="open-sans-font">{!! $data->content !!} </p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        @foreach ($educations as $data)
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">{{$data->date}}</span>
                            <h5 class="poppins-font text-uppercase">{{$data->name}} <span class="place open-sans-font">{{$data->collage}}</span></h5>
                            <p class="open-sans-font">{{$data->content}}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>


        </div>
        <!-- Experience & Education Ends -->
    </div>
</section>
<!-- Main Content Ends -->
@endsection
