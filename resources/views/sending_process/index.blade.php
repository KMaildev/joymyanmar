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
                                <span class="text-theme-colored">
                                    技能実習生送出しの流れ
                                </span>
                            @else
                                <span class="text-theme-colored">
                                    Training workers sending process
                                </span>
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
                                                1. ミャンマー人技能実習生の受入れを希望される日本の企業様は　実習生の受け入
                                                れ事業を行っている監理団体に加入する必要があります。

                                                <br><br>

                                                2. 弊社と監理団体で契約を結びます。その後、監理団体が企業様の要望を基に作成
                                                した技能実習生の求人内容を弊社へ送っていただきます。
                                                <br><br>
                                                3. 弊社は求人内容に適した候補者のリストと履歴書を作成し監理団体へ送ります。
                                                企業様に日程を調整していただき、面接を行います。合格者は医療機関で健康診
                                                断を受けます。健康診断に問題なければ採用決定になり、日本入国のための手続
                                                きに入ります。採用確定してから入国するまでは　４カ月～６カ月かかります。

                                                <br><br>

                                                4. 特定技能受け入れの場合は日本側受入れ手続きを監理団体の変わりに登録支援機
                                                関が担当します。

                                                <br><br>
                                                5. 高度人材の場合は　監理団体と登録支援機関が　間に入る必要なく　企業様と弊
                                                社との直接契約になります。
                                            @else
                                                1. Japanese companies wishing to accept Myanmar technical intern trainees
                                                accept trainees
                                                It is necessary to join a supervising organization that conducts such
                                                business.
                                                <br><br>

                                                2. We will conclude a contract with the supervising organization. After
                                                that, the supervising organization prepares based on the request of the
                                                company
                                                Please send us the job details of the technical intern trainees.
                                                <br><br>

                                                3. We will create a list of candidates and resumes suitable for the job
                                                description and send it to the supervising organization.
                                                We will arrange a schedule with the company and conduct an interview.
                                                Successful applicants undergo a medical checkup at a medical institution
                                                receive a decision. If there is no problem with the medical examination, it
                                                will be decided to be hired, and the procedure for entering Japan
                                                I will enter. It takes 4 to 6 months from the time you are hired until you
                                                enter the country.

                                                <br><br>

                                                4. In the case of accepting specific skills, the registration support
                                                machine instead of the supervising organization for the acceptance procedure
                                                on the Japanese side
                                                Seki will be in charge.

                                                <br><br>
                                                5. In the case of highly skilled human resources, there is no need for the
                                                supervising organization and registration support organization to intervene
                                                between the company and our company.
                                                You will have a direct contract with the company.
                                            @endif
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
