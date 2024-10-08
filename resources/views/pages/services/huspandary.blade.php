@extends('layouts.app')

@section('title')Huspandary Services @endsection

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
                            As your global husbandry agent, Middle East Line (MSL) delivers exceptional care for all your vessel’s husbandry matters in port, wherever your operations take you. You can rely on us to look after your interests, leveraging our local knowledge and connections to take care of your crew, and deliver fuel, spares, provisions, and more – on time and on budget.
                        </p>
                        <p>
                            <strong>Crew change support:</strong><br>
                            Since the onset of the Covid-19 pandemic, MSL's expertise in crew change services has come to the forefront. We offer round-the-clock support for ship owners, managers, and operators to ensure the smoothest and safest transfers for crew signing off or on. We assist with visas, travel arrangements, and other procedures, all while adhering to relevant Covid-19 guidelines. At many locations, we can arrange swab tests, handle transportation, related documentation, and liaise with local authorities. This same level of attention applies to lay-up support and dry-docking services.
                        </p>
                        <p>
                            <strong>Optimum efficiency guaranteed:</strong><br>
                            Our well-coordinated husbandry services ensure fast vessel turnarounds, optimizing operational efficiency by minimizing time spent alongside or at anchor.
                        </p>
                        <p>
                            Our husbandry services include:
                        </p>
                        <ul>
                            <li>Meet & greet, assistance with baggage claims, hotel bookings, shore passes, transportation and offshore transfers, visas, permits, medical assistance, etc.</li>
                            <li>Cash to Master</li>
                            <li>Spares clearance and delivery, storage, and logistics</li>
                            <li>Supplies of bunker fuels, lubricants, and chemicals</li>
                            <li>Fresh water, stores, provisions, and chandlery</li>
                            <li>Liaison with local authorities and communications assistance</li>
                            <li>Guidance and coordination with local workshops and contractors</li>
                        </ul>
                        <p>
                            MSL’s Global Husbandry Centre (GHC), operating 24/7, provides your vessel easy access to suppliers and assistance worldwide. We are present at over 1,000 locations globally and can combine our husbandry services with ship agency and a range of shipping and logistics services to create a tailored, integrated support package that meets the specific needs of every vessel and every port call.
                        </p>
                    </div>
                </div>
            </section>
        </section>

    </main>

@endsection

@section('page-name-in-footer')
    <span property="name">Huspandary Services</span>
@endsection
