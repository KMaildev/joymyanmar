@extends('layouts.main')
@section('title', 'Home')
@section('content')

    <section>
        <div class="container" style="padding-bottom: 0px;">
            <div class="section-content">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-4  text-center">
                        <div class="icon-box iconbox-theme-colored bg-silver-light p-15 pb-20 border-1px">
                            <a href="#" class="icon icon-rounded mb-0">
                                <i class="flaticon-charity-shaking-hands-inside-a-heart font-48"></i>
                            </a>
                            <h3 class="text-uppercase mt-15 mb-15">
                                @if (session('key') == 'jp')
                                    私たちのビジョン
                                @else
                                    Our Vision
                                @endif
                            </h3>
                            <p class="text-gray">
                                @if (session('key') == 'jp')
                                    維持することにより、雇用および人材サービスの優先ソースになる
                                    私たちの 信頼できるパートナーおよび専門機関としての評判。
                                @else
                                    To become the preferred source for employment and human resource services by maintaining
                                    our
                                    reputation as a trusted partner and a professional agency.
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4  text-center">
                        <div class="icon-box iconbox-theme-colored bg-silver-light p-15 pb-20 border-1px">
                            <a href="#" class="icon icon-rounded mb-0">
                                <i class="flaticon-charity-home-insurance font-48"></i>
                            </a>
                            <h3 class="text-uppercase mt-15 mb-15">
                                @if (session('key') == 'jp')
                                    我々の使命
                                @else
                                    Our Mission
                                @endif
                            </h3>
                            <p class="text-gray">
                                @if (session('key') == 'jp')
                                    優れた企業と優れた従業員を結び付け、クライアントと提携することで両方の機会を開拓する
                                @else
                                    To connect great companies with great employees and opening up opportunities for both by
                                    partnering up with our clients.
                                @endif
                            </p>
                            <br>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4  text-center">
                        <div class="icon-box iconbox-theme-colored bg-silver-light p-15 pb-20 border-1px">
                            <a href="#" class="icon icon-rounded mb-0">
                                <i class="fa fa-photo font-48"></i>
                            </a>
                            <h3 class="text-uppercase mt-15 mb-15">
                                @if (session('key') == 'jp')
                                    私たちの価値
                                @else
                                    Our Value
                                @endif
                            </h3>
                            <p class="text-gray">
                                @if (session('key') == 'jp')
                                    信頼 - 私たちは、顧客とコミュニティにとって信頼できるパートナーおよびリソースであることにより、雇用および人材サービスに専念する高性能組織です。
                                @else
                                    Trust - We are a high performing organization dedicated to employment and human resource
                                    services by being a trusted partner and resource for our customers and our community.
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="padding-bottom: 0px; padding-top: 0px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="row list-dashed">
                            <article class="post clearfix mb-30">
                                <div class="entry-content p-20 pr-10">
                                    <p style="font-size: 16px; color: black; font-weight: bold;">
                                        Welcome to Joy Myanmar Co., Ltd
                                    </p>
                                    <p class="mt-10"
                                        style="text-align: justify; font-size: 16px; line-height: 22px; color: black">
                                        @if (session('key') == 'jp')
                                            Joy Myanmar社　はミャンマーのヤンゴン市に拠点をおき、主に日本語教育と優秀なミ
                                            ャンマー人の送出しの事業を行っております。２０１７年に日本語教育事業を開始し
                                            、２０１８年にはミャンマー労働.入国管理.人口省の認定送出し機関のライセンスを取
                                            得し、ミャンマーの若者が日本で働きながら日本のさまざまの技術を学べるように送出
                                            し事業を開始しました。日本企業の方々には人材不足の解消を、ミャンマーの若者には
                                            明るい豊かな未来をと　日本とミャンマーの架け橋となれるよう奮闘しております。
                                        @else
                                            Joy Myanmar is based in Yangon, Myanmar, and mainly focuses on Japanese
                                            language education and excellent
                                            We are in the business of sending out Yanmar people. Started Japanese
                                            language education business in 2017, in 2018, obtained a license from the
                                            Ministry of Labor, Immigration and
                                            Population of Myanmar as an authorized sending organization. <br>
                                            In this way, young people from Myanmar are sent to work in Japan and learn
                                            various Japanese technologies. <br>
                                            and started business. For Japanese companies, solve the shortage of human
                                            resources, for young people in Myanmar
                                            We are striving to become a bridge between Japan and Myanmar for a bright
                                            and prosperous future.
                                        @endif
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td style="color: black; font-weight: bold; width: 20%;">
                                        @if (session('key') == 'jp')
                                            会社名
                                        @else
                                            Company Name
                                        @endif
                                    </td>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            Joy Myanmar Co.,Ltd . ( ジョイミャンマー株式会社)
                                        @else
                                            Joy Myanmar Co.,Ltd
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            所在地
                                        @else
                                            Location
                                        @endif
                                    </td>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            No(95 /I) , Thamine Station Street , ( 2) Ward , Mayangone Township,
                                            Yangon , Myanmar.
                                            <a href="https://www.google.com/maps?ll=16.846048,96.125525&z=16&t=m&hl=en&gl=MM&mapclient=embed&cid=12190058474034477172"
                                                target="_blank" style="color: blue">
                                                (Map)
                                            </a>
                                        @else
                                            No(95 /I) , Thamine Station Street , ( 2) Ward , Mayangone Township,
                                            Yangon , Myanmar.
                                            <a href="https://www.google.com/maps?ll=16.846048,96.125525&z=16&t=m&hl=en&gl=MM&mapclient=embed&cid=12190058474034477172"
                                                target="_blank" style="color: blue">
                                                (Map)
                                            </a>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            設立
                                        @else
                                            Established
                                        @endif
                                    </td>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            -
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            ライセンス番号
                                        @else
                                            License
                                        @endif
                                    </td>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            License No. ***/****
                                        @else
                                            License No. ***/****
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            資本金
                                        @else
                                            Capital
                                        @endif
                                    </td>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            5000万チャット
                                        @else
                                            50 million Kyat
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            従業員
                                        @else
                                            Employees
                                        @endif
                                    </td>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            12名　（２０２３年０３月現在）
                                            事業内容　（日本語教育、日本への送出し、コンサルティング）
                                        @else
                                            12 people (as of March 2023)
                                            Business contents (Japanese language education, sending to Japan,
                                            consulting)
                                        @endif
                                    </td>
                                </tr>


                                <tr>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            関連学校
                                        @else
                                            Related school
                                        @endif
                                    </td>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            J.ISM　Language Center.
                                        @else
                                            J.ISM　Language Center.
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            代表取締役
                                        @else
                                            Representative Director
                                        @endif
                                    </td>
                                    <td style="color: black; font-weight: bold">
                                        @if (session('key') == 'jp')
                                            Aung Lwin
                                        @else
                                            Aung Lwin
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container pb-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase line-bottom-center mt-0">
                            @if (session('key') == 'jp')
                                活動とギャラリー
                            @else
                                Out Activities & <span class="text-theme-colored">Gallery</span>
                            @endif
                        </h2>
                        <div class="title-flaticon">
                            <i class="fa fa-image"></i>
                        </div>
                        <p>
                            @if (session('key') == 'jp')
                                イベント / トレーニング / アクティビティ / 学生インタビュー
                            @else
                                EVENTS / TRAINING / ACTIVITIES / STUDENT INTERVIEW
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mtli-row-clearfix">
                <div class="col-md-12">
                    <div class="owl-carousel-4col">
                        @foreach ($galleries as $activitie)
                            @php
                                $values = explode(',', $activitie->gallery);
                            @endphp
                            @foreach ($values as $gallery)
                                <div class="item">
                                    <div class="team-members maxwidth400">
                                        <div class="team-thumb">
                                            <img src="{{ $gallery }}" alt="" class="img-fullwidth">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
@endsection
