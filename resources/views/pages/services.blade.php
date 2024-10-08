@extends('layouts.app')

@section('title')Services @endsection

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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <p>
                                Fusce dapibus tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue.
                            </p>                        
                        </div>
                    </div>
                </section>
            </section>

        </main>


@endsection

@section('page-name-in-footer')
    <span property="name">Services</span>
@endsection
