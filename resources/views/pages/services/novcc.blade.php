@extends('layouts.app')

@section('title')NVOCC @endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/about/innerview.css')}}">
@endsection

@section('container')
    <div class="page-overview">
@endsection

@section('content')

    <main id="main" class="main" role="main" data-page-type="overview">
        @include('partials.service-banner')

        <section class="section with-3-column section-corporate-offices bg-gray-1 lazy-item" id="section-corporate-offices" data-analytics-section-engagement="name:vision-mission">

            <section class="section-content">
                <div class="section-block row">
                    <div class="column large-9 medium-10 large-centered small-10">
                        <p>
                            Middle East Line (MSL) operates as a Non-Vessel Operating Common Carrier (NVOCC), providing an economic, reliable, and fast container service. We offer a weekly direct service from Sokhna to Jeddah and Jebel Ali, covering a wide range of major ports in the Indian Subcontinent, the Arabian Gulf, the Red Sea, and the Far East.
                        </p>
                        <p>
                            Our NVOCC services ensure that your cargo is transported efficiently and safely, leveraging our strong network of ports and partners. MSL specializes in providing flexible and cost-effective solutions for container shipping, allowing you to focus on your core business while we handle the logistics.
                        </p>

                        <h3>Ports We Serve</h3>

                        <strong>India Subcontinent Ports:</strong>
                        <ul>
                            <li>Mundra</li>
                            <li>Nhava Sheva</li>
                            <li>Cochin</li>
                            <li>Chennai</li>
                            <li>Tuticorin</li>
                            <li>Karachi</li>
                            <li>Port Qasim</li>
                        </ul>

                        <strong>Arabian Gulf & Red Sea Ports:</strong>
                        <ul>
                            <li>Port Sudan</li>
                            <li>Jeddah</li>
                            <li>Jebel Ali</li>
                            <li>Hamad</li>
                            <li>Shuwaikh</li>
                            <li>Bahrain</li>
                            <li>Sohar</li>
                            <li>Salalah</li>
                            <li>Dammam</li>
                            <li>Aden</li>
                            <li>Mukalla</li>
                            <li>Hodeidah</li>
                            <li>Bandar Abbas</li>
                            <li>Umm Qasr</li>
                            <li>Djibouti</li>
                            <li>Berbera</li>
                        </ul>

                        <strong>South / Far East Ports:</strong>
                        <ul>
                            <li>Singapore</li>
                            <li>Hong Kong</li>
                            <li>Shanghai</li>
                            <li>Xiamen</li>
                            <li>Qingdao</li>
                            <li>Shenzhen</li>
                            <li>Kobe</li>
                            <li>Nagoya</li>
                            <li>Ho Chi Minh</li>
                            <li>Haiphong</li>
                            <li>Port Kelang</li>
                            <li>Pasir Gudang</li>
                            <li>Jakarta</li>
                            <li>Surabaya</li>
                            <li>Belawan</li>
                            <li>Chittagong</li>
                        </ul>

                        <p>
                            MSL provides reliable and professional NVOCC services to ensure that your cargo reaches its destination safely and on time. We combine our global expertise with local knowledge to give you comprehensive shipping solutions, including container leasing, cargo consolidation, and full logistics management.
                        </p>
                    </div>
                </div>
            </section>
        </section>

    </main>

@endsection

@section('page-name-in-footer')
    <span property="name">NVOCC</span>
@endsection
