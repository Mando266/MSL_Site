@extends('layouts.app')

@section('title')Sea Freight Services @endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/about/innerview.css') }}">
@endsection

@section('container')
    <div class="page-overview">
@endsection

@section('content')

    <main id="main" class="main" role="main" data-page-type="overview">
        @include('partials.service-banner')

        <section class="section with-3-column section-corporate-offices bg-gray-1 lazy-item" id="section-sea-freight" data-analytics-section-engagement="name:sea-freight-services">

            <section class="section-content">
                <div class="section-block row">
                    <div class="column large-9 medium-10 large-centered small-10">
                        <h1 class="section-title">Sea Freight Services</h1>
                        <p>
                            At Middle East Line (MSL), we offer a comprehensive range of sea freight services to cater to your shipping needs. Whether it's full container loads, smaller shipments, or complex project cargo, we ensure safe, timely, and efficient deliveries. Explore our services below:
                        </p>

                        <div class="service-block">
                            <h2 class="service-title">Full Container Load (FCL)</h2>
                            <p>
                                MSL provides door-to-door FCL services from/to all worldwide destinations for both import and export shipments. We offer fast transit times and flexible sailing schedules. With access to all types and sizes of equipment, we can match the unique needs of your cargo and ensure a seamless shipping experience.
                            </p>
                        </div>

                        <div class="service-block">
                            <h2 class="service-title">Less than Container Load (LCL)</h2>
                            <p>
                                MSL offers export and import less than container load (LCL) / groupage / consolidation services to/from all worldwide destinations. Our LCL service is cost-effective for small shipments, ensuring you no longer need to wait for a full container to send your goods. We make it easy to ship your smaller consignments quickly and efficiently.
                            </p>
                        </div>

                        <div class="service-block">
                            <h2 class="service-title">Project Cargo</h2>
                            <p>
                                MSL’s extensive local connections, wide geographical knowledge, and trusted partners allow us to professionally handle heavy, oversized, and over-dimensional project cargo from origin to destination. Our expertise in project cargo logistics and heavy lift shipments is unparalleled, ensuring your cargo is delivered safely, on time, and in full compliance with regulations.
                            </p>
                            <h3>Our comprehensive range of services includes:</h3>
                            <ul>
                                <li>Determining the best routes and means of transportation with the help of our experienced transportation engineers to overcome any obstacles.</li>
                                <li>Disassembling and re-assembling of complex components and oversized cargoes.</li>
                                <li>Conducting site surveys and feasibility studies to provide tailor-made logistics solutions.</li>
                                <li>Specialized chartering department to arrange full or part charter parties.</li>
                                <li>Multimodal transport services for special equipment, ensuring the best mode of transport is selected for your cargo.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
        </section>

    </main>

@endsection

@section('page-name-in-footer')
    <span property="name">Sea Freight Services</span>
@endsection
