@extends('master')
@section('body_class')
    portfolio
@endsection
@section('content')

<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>portfolio</span></h1>
    <span class="title-bg">works</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <!-- Portfolio Grid Starts -->
        <section class="grid-wrap">
            <ul class="row grid">
                <!-- Portfolio Item Starts -->
                @foreach ( $portfolios as  $portfolio)
                <li>
                    <figure>
                        <img src="{{ Voyager::image($portfolio->image)}}" alt="Portolio Image" />
                        <div><span>{{$portfolio->name}}</span></div>
                    </figure>
                </li>
                @endforeach
                <!-- Portfolio Item Ends -->
            </ul>
        </section>
        <!-- Portfolio Grid Ends -->
        <!-- Portfolio Details Starts -->
        <section class="slideshow">
            <ul>
                @foreach ( $portfolios as  $portfolio)
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>{{$portfolio->name}}
                            </h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">{{$portfolio->project}}
                                    </span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">{{$portfolio->cleint}}
                                    </span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">{{$portfolio->languages}}
                                    </span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="{{$portfolio->preview}}" target="_blank">{{$portfolio->preview}}
                                    </a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->

                        <img src="{{ Voyager::image($portfolio->image)}}" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                @endforeach
                <!-- Portfolio Item Detail Ends -->
            </ul>
            <!-- Portfolio Navigation Starts -->
            <nav>
                <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow.png" alt="previous"></span>
                <span class="icon nav-next"><img src="img/projects/navigation/right-arrow.png" alt="next"></span>
                <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="close"> </span>
            </nav>
            <!-- Portfolio Navigation Ends -->
        </section>
    </div>
</section>
<!-- Main Content Ends -->

@endsection
