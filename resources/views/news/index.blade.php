@extends('layouts.main')
@section('title', '- News')
@section('content')
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row ">
                <div class="col-md-12">
                    <div class="blog-posts">
                        <div class="col-md-12">
                            <div class="row list-dashed">
                                @foreach ($news as $new)
                                    <article class="post clearfix mb-30 bg-lighter">
                                        <div class="entry-content p-20 pr-10">
                                            <div class="entry-meta media mt-0 no-bg no-border">
                                                <div class="media-body pl-15">
                                                    <div class="event-content pull-left flip">
                                                        <h4 class="entry-title text-black m-0 mt-5">
                                                            @if (session('key') == 'jp')
                                                                {{ $new->title_jp ?? '' }}
                                                            @else
                                                                {{ $new->title_eng ?? '' }}
                                                            @endif
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-10">
                                                @if (session('key') == 'jp')
                                                    {!! $new->description_jp ?? '' !!}
                                                @else
                                                    {!! $new->description_eng ?? '' !!}
                                                @endif
                                            </p>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
