@extends('layouts.main')
@section('title', '- Contact Us')
@section('content')

    <section class="divider">
        <div class="container pt-30 pb-60">
            <div class="row pt-30">
                <div class="col-md-5">
                    <h3 class="line-bottom mt-0 mb-30">
                        Enquiry Form
                    </h3>
                    <!-- Contact Form -->
                    <form autocomplete="off" action="{{ route('contact.store') }}" method="POST" id="create-form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name <small>*</small></label>
                                    <input name="name" class="form-control" type="text" placeholder="Enter Name"
                                        required="" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <small>*</small></label>
                                    <input name="email" class="form-control required email" type="email"
                                        placeholder="Enter Email" value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Subject <small>*</small></label>
                                    <input name="subject" class="form-control required" type="text"
                                        placeholder="Enter Subject" value="{{ old('subject') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone"
                                        value="{{ old('phone') }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message">{{ old('message') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5"
                                data-loading-text="Please wait...">Send your message</button>
                            <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-7">
                    <div class="row">
                        <h3 class="line-bottom mt-0 mb-50 ml-15">
                            Joy Myanmar Co., Ltd Office:
                        </h3>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box media border-1px bg-silver-light p-30 mb-20"> <a
                                    class="media-left pull-left flip" href="#"> <i
                                        class="pe-7s-map-2 text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Our Office Location</h5>
                                    <p>
                                        No(95 /I) , Thamine Station Street , ( 2) Ward , Mayangone Township,
                                        Yangon , Myanmar.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box media border-1px bg-silver-light p-30 mb-20"> <a
                                    class="media-left pull-left flip" href="#"> <i
                                        class="pe-7s-mail text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Email Address</h5>
                                    <p>
                                        <a href="mailto:aung54321@gmail.com">
                                            aung54321@gmail.com,
                                        </a>
                                        <br>
                                        <a href="mailto:info@joymyanmar.com">
                                            info@joymyanmar.com
                                        </a>
                                        <a href="mailto:admin@joymyanmar.com">
                                            admin@joymyanmar.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box media border-1px bg-silver-light p-30 mb-20"> <a
                                    class="media-left pull-left flip" href="#"> <i
                                        class="pe-7s-call text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Contact Number</h5>
                                    <p>
                                        <a href="(+95) 9450054296">
                                            (+95) 9450054296,
                                        </a>
                                        <br>
                                        <a href="(+95) 9457800476">
                                            (+95) 9457800476
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="icon-box media border-1px bg-silver-light p-30 mb-20"> <a
                                    class="media-left pull-left flip" href="#"> <i
                                        class="pe-7s-chat text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">
                                        Viber, Line
                                    </h5>
                                    <p>
                                        <a href="tel:(+95) 943158259 ">
                                            (+95) 943158259
                                        </a>
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 py-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.602726982634!2d96.12333651498419!3d16.846053322625032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1959b78df0b27%3A0xa92bc998b010b874!2sJoy%20Myanmar%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1679506963383!5m2!1sen!2smm"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
