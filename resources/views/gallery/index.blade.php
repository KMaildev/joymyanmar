@extends('layouts.main')
@section('title', '- Gallery')
@section('content')
    <section>
        <div class="container pb-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase line-bottom-center mt-0">
                            Out Activities & <span class="text-theme-colored">Gallery</span></h2>
                        <div class="title-flaticon">
                            <i class="fa fa-image"></i>
                        </div>
                        <p>
                            EVENTS / TRAINING / ACTIVITIES / STUDENT INTERVIEW
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">

                        <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                            <!-- Portfolio Item Start -->
                            @foreach ($galleries as $activitie)
                                @php
                                    $values = explode(',', $activitie->gallery);
                                @endphp
                                @foreach ($values as $gallery)
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <img alt="project" src="{{ $gallery }}" class="img-fullwidth">
                                            <div class="overlay-shade"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="{{ $gallery }}" data-lightbox-gallery="gallery"><i
                                                                class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                            <!-- Portfolio Item End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
