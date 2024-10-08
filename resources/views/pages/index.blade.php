@extends('layouts.app')

@section('title')Middle East Line @endsection

@section('container')
<div class="page-overview">
@endsection


@section('content')

<main class="main with-heroes with-promos" role="main">

            <section id="section-heroes" class="homepage-section" data-analytics-region="hero" data-section-content-type="heroes" data-analytics-activitymap-region-id="hero">

                <ul id="hero-positions" class="homepage-section-positions heroes-count-1" data-heroes-count="3">

                    <li class="homepage-section-item hero-position hero-position-1" id="hero-position-1">
                        <div class="hero sea-master-capt-hamamsy hero-sea-master-capt-hamamsy promo-managed-unit promo-managed-unit-sea-master-capt-hamamsy" data-promo-id="hero-sea-master-capt-hamamsy" data-content-unit="sea-master-capt-hamamsy" data-analytics-section-engagement="name:hero-sea-master-capt-hamamsy">
                            <a href="/about" tabindex="0" class="unit-wrapper">
                                <div class="unit-copy-wrapper">
                                    <h2 class="headline small-caps">Middle East Shipping Line (M.S.L.)</h2>
                                    <h3 class="typography-intro large-5 large-centered large-show medium-hide small-hide">
                                        MSL founded from Egypt with integrated efforts to maintain uniqueness of intra-middle nature of cargo flow and business. Resulted from almost 20 years of specialty and expertise of shipping services, understanding customers’ and business’ type needs, focusing on high-end level of services.                                    </h3>
                                    <h4 class="cta">Read the full story</h4>
                                </div>

                                <div class="unit-image-wrapper image-constraints-full">
                                    <figure class="unit-image unit-image-sea-master-capt-hamamsy-sea-master-capt-hamamsy image-anchored-center image-anchored-middle image-size-scaled"></figure>
                                </div>
                            </a>
                        </div>
                    </li>

                </ul>

            </section> <!-- section-heroes -->

            <section id="section-promos" class="homepage-section">
                <h2>Our Services</h2>
                <div class="promo-container">
                  <div class="promo-box">
                    <img src="{{ asset('/img/pages-banner/about-banner.jpg') }}" alt="Ocean Freight Services" class="img-fluid">
                    <div class="promo-text">
                      <h3>Ocean freight services</h3>
                    </div>
                  </div>
                  <div class="promo-box">
                    <img src="{{ asset('/img/pages-banner/service-banner.jpg') }}" alt="Committed Capacity" class="img-fluid">
                    <div class="promo-text">
                      <h3>Committed capacity</h3>
                    </div>
                  </div>
                  <div class="promo-box">
                    <img src="{{ asset('/img/pages-banner/contact-banner.jpg') }}" alt="Track Your Shipment" class="img-fluid">
                    <div class="promo-text">
                      <h3>Track your shipment</h3>
                    </div>
                  </div>
                </div>
              </section>
              

        </main>


@endsection
