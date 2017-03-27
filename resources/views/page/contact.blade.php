@extends('layouts.app')

@section('title')
    {{ $page->title }}
@endsection

@section('content')

    <section class="section-md-50"></section>


    <section class="product-bg section-60 section-sm-top-90 section-sm-bottom-100 contact-top position-relative">
        <div class="contact-bg"></div>
        <div class="shell position-relative">
            <div class="row">
                <div class="col-md-6">
                    <figure>
                        <img src="/jcb/imgs/contact.png" alt="" />
                    </figure>
                </div>
                <div class="col-md-6 contact-desc position-relative">
                    <div class="contact-desc-top">
                        <h2>CONTACTS</h2>
                        <div>
                            &nbsp;————————
                        @include('layouts.mail')
                        </div>
                    </div>
                    <div class="contact-desc-bottom">
                        <div class="th-box">
                            <i class="fa fa-phone"></i>
                            <span>
                                PHONE
                            </span>
                            <div>
                                021 6219 0609
                            </div>
                        </div>
                        <div class="th-box fa-fax">
                            <i class="fa"></i>
                            <span>
                                FAX
                            </span>
                            <div>
                                021 6219 0609
                            </div>
                        </div>
                        <div class="th-box">
                            <i class="fa fa-envelope-o fa-fw"></i>
                            <span>
                                EMAIL
                            </span>
                            <div>
                                021 6219 0609
                            </div>
                        </div>
                        <div class="th-box">
                            <i class="fa fa-map"></i>
                            <span>
                                ADRESS
                            </span>
                            <div>
                                CHINA, Shanghai <br/>
                                317 XianXia Rd. Rm 2007
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product-bg section-30" id="get-in-touch">
        <div class="shell">
            <h3>GET IN TOUCH</h3>
            <div class="row">
                @foreach($teams as $team)
                <div class="col-md-6 section-30 contact-pep">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/'.$team->avatar) }}" alt="" width="113" height="113">
                    </div>
                    <div class="col-md-8">
                        <div class="name">{{ $team->name }}</div>
                        <div class="desc">{{ $team->description }}</div>
                        <div>
                            <i class="fa fa-phone"></i> {{ $team->phone }} <br />
                            <i class="fa fa-envelope-o fa-fw"></i> {{ $team->email }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection