@extends('layouts.app')

@section('title')About @endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/about/about.css')}}">
@endsection

@section('container')
    <div class="page-overview">
@endsection

@section('content')
    <main id="main" class="main" role="main" data-page-type="overview">
        @include('partials.about-banner')

        <section class="section with-3-column" data-analytics-section-engagement="name:vision-mission">
            <section class="section-content">
                <div class="section-block row">
                    <div class="column large-9 medium-10 large-centered small-10">
                        <h2>Mission</h2>
                        <p>
                            At Middle East Shipping Line (M.S.L.), our mission is rooted in our extensive experience within the intra-Middle East cargo landscape. Our dedicated team, driven by energy and a commitment to customer satisfaction, strives to provide unparalleled value beyond mere transportation. Leveraging advanced technology for data management and real-time cargo tracking, we aim to optimize efficiency while ensuring the utmost safety and quality in our services. Our success hinges on fostering strong communication and understanding with our clients and partners, enabling us to uncover new opportunities for mutual growth.
                        </p>

                        <h2>Vision</h2>
                        <p>
                            To be the leading partner in intra-Middle East container shipping, recognized for our reliability and innovative solutions.
                        </p>                        
                    </div>
                </div>
            </section>
        </section>
    </main>
@endsection

@section('page-name-in-footer')
    <span property="name">About Us</span>
@endsection
