@extends('layouts.main')
@section('title', '- Home')
@section('content')

    <section id="mission">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-4">
                    <h3 class="line-bottom border-bottom mt-0">
                        @if (session('key') == 'jp')
                            実習生派遣の流れ
                        @else
                            Job Categories
                        @endif
                    </h3>
                    <p class="mt-15" style="text-align: justify; font-size: 16px;">
                        @if (session('key') == 'jp')
                            当社に登録した研修生は、求人票をもとに求人に応募し、面接に応じることができます。日本の技能実習制度には、74種類の職種、133の職種があります。技能実習の主な職種は、農業、漁業、建設、食品加工、繊維、機械・金属、その他の産業の仕事です。
                        @else
                            The trainees who registered at our agency may apply the jobs based on demand letter and will be
                            able to answer interview. There are 133 jobs under 74 kinds of works in Technical Intern
                            Training in Japan. Main Categories of works in Technical Intern Training are Agriculture,
                            Fisheries, Construction, Food Processing, Textile, Machine Work & Metal and other Industrial
                            works.
                        @endif
                    </p>
                </div>

                <div class="col-xs-12 col-md-8">
                    <h3 class="line-bottom border-bottom mt-0 mt-sm-40">
                        @if (session('key') == 'jp')
                            レイバー リストの送信
                        @else
                            Sending Labour Lists
                        @endif
                    </h3>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <table class="table table-striped table-bordered" style="width:100%;">
                                <thead>
                                    <tr style="background-color: #403D9A;">
                                        <th style="text-align: center; color: white;">No.</th>
                                        <th style="text-align: left; color: white;">Main Categories of Works</th>
                                        <th style="text-align: center; color: white;">Kinds of Works</th>
                                        <th style="text-align: center; color: white;">Number of Jobs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sending_lists as $key => $sending_list)
                                        <tr>
                                            <td
                                                style="text-align:center; font-weight: bold; color: black; font-size: 16px;">
                                                {{ $key + 1 }}
                                            </td>
                                            <td style="text-align: left; color: black; font-size: 16px;">
                                                {{ $sending_list->job_category ?? '' }}
                                            </td>
                                            <td style="text-align: center; color: black; font-size: 16px;">
                                                {{ $sending_list->kinds_of_works ?? '' }}
                                            </td>
                                            <td style="text-align: center; color: black; font-size: 16px;">
                                                {{ $sending_list->number_of_jobs ?? '' }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td style="text-align:center; font-weight: bold; color: black; font-size: 16px;">
                                            Total
                                        </td>
                                        <td style="text-align:center; font-weight: bold; color: black; font-size: 16px;">
                                            {{ $sending_lists->sum('kinds_of_works') }}
                                        </td>
                                        <td style="text-align:center; font-weight: bold; color: black; font-size: 16px;">
                                            {{ $sending_lists->sum('number_of_jobs') }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row multi-row-clearfix">
                <div class="blog-posts">
                    @foreach ($job_categories as $job_categorie)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <article class="post clearfix mb-30 bg-silver-light border-1px">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <img src="{{ $job_categorie->job_photo ?? '' }}" alt=""
                                            class="img-responsive img-fullwidth"
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #458cd2; padding: 4px;">
                                    </div>
                                    <div class="entry-meta media">
                                        <div class="media-body pl-20">
                                            <div class="event-content">
                                                <h4 class="entry-title" style="font-size: 16px;">
                                                    @if (session('key') == 'jp')
                                                        {{ $job_categorie->job_title_jp ?? '' }}
                                                    @else
                                                        {{ $job_categorie->job_title_en ?? '' }}
                                                    @endif
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
