@extends('layouts.app')

@section('title')Canal & Strait Transit @endsection

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
                            Every year, thousands of vessels of all kinds pass through major marine short-cuts such as the Suez and Panama Canals, as well as smaller strategic waterways. As one of the leading shipping agents, Middle East Line (MSL) provides full service for vessels transiting major waterways to ensure smooth and safe transits.
                        </p>
                        <p>
                            With MSL, you can combine our transit service with a range of integrated services including ship agency, husbandry, bunker fuel supplies, ship spares logistics, and more. We are there for you to ensure smooth passage through:
                        </p>
                        <ul>
                            <li><strong>Suez Canal:</strong> MSL maintains close relations with the Suez Canal Authority and provides vital canal transit services to assist vessels of all kinds transiting the key waterway that links the Mediterranean with the Red Sea.</li>
                            <li><strong>Panama Canal:</strong> MSL coordinates with the Panama Canal Authority to handle vessels passing between the Atlantic and Pacific Oceans.</li>
                            <li><strong>Magellan Straits & Patagonian Channel:</strong> MSL offers reliable services to aid safe transit through the Strait of Magellan and the Patagonian Channel at the southern tip of America.</li>
                            <li><strong>Danish Straits:</strong> MSL provides a comprehensive package of strait transit services for vessels passing through the Danish Straits.</li>
                            <li><strong>Kiel Canal:</strong> Through our local partners in Germany, MSL arranges everything needed for a smooth transit through the Kiel Canal linking the North and Baltic Seas.</li>
                        </ul> 
                    </div>
                </div>
            </section>
        </section>

    </main>

@endsection

@section('page-name-in-footer')
    <span property="name">Canal & Strait Transit</span>
@endsection
