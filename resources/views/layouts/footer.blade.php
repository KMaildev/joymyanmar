<footer id="footer" class="footer" data-bg-img="{{ asset('assets/images/footer-bg.png') }}" data-bg-color="#262E3B">
    <div class="container pt-70 pb-40">
        <div class="row mt-10">
            <div class="col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">
                        @if (session('key') == 'jp')
                            今すぐお電話ください
                        @else
                            Call Us Now
                        @endif
                    </h5>
                    <div class="text-gray">
                        <a href="tel:+95) 9450054296">
                            (+95) 9450054296,
                        </a> <br>
                        <a href="tel:(+95) 9457800476">
                            (+95) 9457800476
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">
                        @if (session('key') == 'jp')
                            私達と接続
                        @else
                            Connect With Us
                        @endif
                    </h5>
                    <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">
                        Our Office Location
                    </h5>
                    <div class="text-gray">
                        <a href="https://www.google.com/maps?ll=16.846048,96.125525&z=16&t=m&hl=en&gl=MM&mapclient=embed&cid=12190058474034477172"
                            target="_blank">
                            No(95 /I) , Thamine Station Street , ( 2) Ward , Mayangone Township, Yangon , Myanmar.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom" data-bg-color="#242730">
        <div class="container pt-15 pb-15">
            <div class="row">
                <div class="col-md-4">
                    <p class="font-12 text-black-777 m-0 sm-text-center">
                        Joy Myanmar Co., Ltd © {{ now()->year }}
                    </p>
                </div>
                <div class="col-md-8 text-right">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center font-12">
                            <li>
                                <a href="{{ route('home') }}">
                                    @if (session('key') == 'jp')
                                        ホーム
                                    @else
                                        Home
                                    @endif
                                </a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="{{ route('about.index') }}">
                                    @if (session('key') == 'jp')
                                        会社概要
                                    @else
                                        About Us
                                    @endif
                                </a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="{{ route('job_category.index') }}">
                                    @if (session('key') == 'jp')
                                        実習生派遣の流れ
                                    @else
                                        Job Categories
                                    @endif
                                </a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="{{ route('education_center.index') }}">
                                    @if (session('key') == 'jp')
                                        日本語教育センター
                                    @else
                                        Japanese Language Center
                                    @endif
                                </a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="{{ route('sending_process.index') }}">
                                    @if (session('key') == 'jp')
                                        技能実習生送出しの流れ
                                    @else
                                        Training workers sending process
                                    @endif
                                </a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="{{ route('news.index') }}">
                                    @if (session('key') == 'jp')
                                        ニュース
                                    @else
                                        News
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
