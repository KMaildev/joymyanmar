@extends('layouts.main')
@section('title', '- Japanese Language Education Center')
@section('content')
    <section>
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase line-bottom-center mt-0">
                            @if (session('key') == 'jp')
                                <span class="text-theme-colored">日本語教育センター </span>
                            @else
                                <span class="text-theme-colored">Japanese Language Education Center </span>
                            @endif
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="blog-posts">
                        <div class="col-md-12">
                            <div class="row list-dashed">
                                <article class="post clearfix mb-30">
                                    <div class="entry-content p-20 pr-10">
                                        <p class="mt-10"
                                            style="text-align: justify; font-size: 16px; line-height: 22px; color: black">
                                            @if (session('key') == 'jp')
                                                送り出しの人材となる一人一人にとって、日本語のコミュニケーションスキルが、仕事
                                                をする上でも、生活する上でも一番大きな壁であると認識しています。入国後に、職場
                                                における円滑なコミュニケーション、そして日本での生活に順応していくための、実践
                                                的なコミュニケーション教育に重きをおいた、目的を持った日本語教育を目指していま
                                                す。 <br><br>

                                                教育体制
                                                25年という長期間にわたって、日本に滞在経験のある代表が教育カリキュラムを組ん
                                                でおりますので、日本での生活の経験をもとに、日本の文化・礼儀やマナーなど、日本
                                                の生活で守るべきルール等を中心に、日本に送り出した後に企業様にとって信頼できる
                                                人材となれるよう、強いては、日本に住む本人自身が安定した生活を送ることができる
                                                ような教育を施すよう努めています。
                                                スタッフも、日本で滞在した経験のあるミャンマー人講師、ミャンマー人の教育経験の
                                                実績豊富なミャンマー人講師、一般常識と教養を備えた日本人講師が所属しており、し
                                                っかりとした教育を施せる体制で取り組んでいます。
                                                <br><br>

                                                サポート体制
                                                当社では、面接を受けるまでに最低でも7か月間の授業を通し、基礎的な日本語N4レベ
                                                ル以上の日本語能力を身に着けるようにしております。面接合格後も、入国に備えて日
                                                本語の会話レベル上達のため、日本人先生との会話を中心とした授業を設けるなどのサ
                                                ポートを行っております。

                                                <br><br>
                                                さらに、企業様がどのような人材を求めているのかをしっかりと伺い、入国前の時間に
                                                企業様が必要とする人材となれるよう必要な専門知識なども身につけれるようサポート
                                                しております。
                                            @else
                                                For each person who will be sent out, Japanese communication skills are
                                                I recognize that it is the biggest wall in both doing and living.
                                                Workplace after entering Japan
                                                Smooth communication in Japan and practice to adapt to life in Japan
                                                We aim to provide Japanese language education with a purpose, with an
                                                emphasis on effective communication education.
                                                vinegar.
                                                <br><br>

                                                Education System <br>
                                                Over a long period of 25 years, a representative who has experience staying
                                                in Japan has created an educational curriculum. <br>
                                                Therefore, based on the experience of living in Japan, I will learn about
                                                Japanese culture, etiquette, manners, etc. <br>
                                                Focusing on the rules that should be followed in daily life, it is possible
                                                for companies to trust
                                                In order to become a human resource, if forced to live in Japan, the person
                                                himself/herself can lead a stable life. <br>
                                                We strive to provide such education. <br>
                                                The staff is also a Myanmar lecturer who has experience staying in Japan,
                                                and a Myanmar education experience. <br>
                                                We have experienced Myanmar instructors and Japanese instructors with
                                                general knowledge and education. <br>
                                                We are working on a system that can provide a solid education.
                                                <br><br>

                                                Support System <br>
                                                At our company, we have taken classes for at least 7 months and have a basic
                                                Japanese N4 level before taking an interview. <br>
                                                We aim to acquire Japanese language proficiency of at least Even after
                                                passing the interview, it is
                                                In order to improve the conversational level of the native language, we
                                                provide services such as setting up classes centered on conversation with
                                                Japanese teachers. <br>
                                                We are doing a port.

                                                <br><br>
                                                In addition, we carefully ask what kind of human resources the company is
                                                looking for, and
                                                Support so that you can acquire the necessary specialized knowledge so that
                                                you can become the human resource that your company needs
                                                Doing.
                                            @endif
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                        @foreach ($training_galleries as $activitie)
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
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
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
    </section>
@endsection
