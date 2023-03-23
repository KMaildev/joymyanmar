<header class="header">
    <div class="header-top bg-theme-colored sm-text-center p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="widget no-border m-0 mt-10">
                        <ul class="list-inline sm-text-center">
                            <li>
                                <a href="{{ route('en') }}" class="text-white">
                                    Eng
                                </a>
                            </li>
                            <li class="text-white">|</li>
                            <li>
                                <a href="{{ route('jp') }}" class="text-white">
                                    Jp
                                </a>
                            </li>
                            <li class="text-white">|</li>
                            <li>
                                <a href="#" class="text-white">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget no-border m-0">
                        <ul
                            class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm pull-right sm-pull-none sm-text-center mt-5 mt-sm-15">
                            <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
        <div class="container pt-0 pb-0">
            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-8">
                    <div class="widget no-border m-0">
                        <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="index-mp-layout1.html"><img
                                src="{{ asset('data/logo.jpg') }}" alt=""></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="widget no-border m-0">
                        <div class="mt-10 mb-10 text-right flip sm-text-center">
                            <div class="font-15 text-black-333 mb-5 font-weight-600"><i
                                    class="fa fa-phone-square text-theme-colored font-18"></i> +(012) 345 6789</div>
                            <a class="font-12 text-gray" href="#">Call us for more details!</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="widget no-border m-0">
                        <div class="mt-10 mb-10 text-right flip sm-text-center">
                            <div class="font-15 text-black-333 mb-5 font-weight-600"><i
                                    class="fa fa-building-o text-theme-colored font-18"></i> Location</div>
                            <a class="font-12 text-gray" href="#"> 121 King Street, Sydney</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
            <div class="container">
                <nav id="menuzord" class="menuzord default bg-light">
                    <ul class="menuzord-menu">

                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('home') }}">
                                Company Profile
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('job_category.index') }}">
                                @if (session('key') == 'jp')
                                    実習生派遣の流れ
                                @else
                                    Job Categories
                                @endif
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('education_center.index') }}">
                                @if (session('key') == 'jp')
                                    日本語教育センター
                                @else
                                    Japanese Language Center
                                @endif
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('sending_process.index') }}">
                                @if (session('key') == 'jp')
                                    技能実習生送出しの流れ
                                @else
                                    Training workers sending process
                                @endif
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('news.index') }}">
                                @if (session('key') == 'jp')
                                    ニュース
                                @else
                                    News
                                @endif
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('gallery.index') }}">
                                @if (session('key') == 'jp')
                                    ギャラリー
                                @else
                                    Gallery
                                @endif
                            </a>
                        </li>

                        {{-- <li hidden>
                            <a href="{{ route('terms.index') }}" hidden>
                                Terms & Conditions
                            </a>
                        </li> --}}

                    </ul>
                    <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5">
                        <a class="btn btn-colored btn-flat btn-theme-colored" href="{{ route('contact.index') }}">
                            @if (session('key') == 'jp')
                                お問い合わせ
                            @else
                                Contact Us
                            @endif
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
