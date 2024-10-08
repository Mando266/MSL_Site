@extends('layouts.app')

@section('title') Team Board @endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/team/innerview.css') }}">
    <link rel="stylesheet" href="{{ asset('css/team/team.css') }}">
@endsection

@section('content')

<main id="main" class="main" role="main" data-page-type="team-board">
    <!-- Place the team banner at the beginning -->
    @include('partials.team-banner')

    <div class="container">
        
        <!-- Insert the team content into the section as requested -->
        <section class="section-content">
            <div class="section-block">
                <!-- Team content starts here -->
                <div class="team-section">
                    <!-- Manager Section -->
                    <h2 class="section-title">Manager</h2>
                    <div class="team-row">
                        <div class="team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Moataz Elnabawi" class="img-fluid">
                            <h3>Moataz Elnabawi</h3>
                            <p>Manager</p>
                        </div>
                        <div class="team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Ahmed Ghazy" class="img-fluid">
                            <h3>Ahmed Ghazy</h3>
                            <p>Manager</p>
                        </div>
                    </div>

                    <!-- Operations Team -->
                    <h2 class="section-title">Operation Team</h2>
                    <div class="team-row">
                        <div class="team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Ahmed Shoukry" class="img-fluid">
                            <h3>Ahmed Shoukry</h3>
                            <p>Operations</p>
                        </div>
                        <div class="team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Another Name" class="img-fluid">
                            <h3>Another Name</h3>
                            <p>Operations</p>
                        </div>
                    </div>

                    <!-- Software Team -->
                    <h2 class="section-title">Software Team</h2>
                    <div class="team-row">
                        <div class="team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Mohamed Fadl" class="img-fluid">
                            <h3>Mohamed Fadl</h3>
                            <p>Team Lead</p>
                        </div>
                        <div class="team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Ahmed Ellaqany" class="img-fluid">
                            <h3>Ahmed Ellaqany</h3>
                            <p>Software Engineer</p>
                        </div>
                    </div>

                    <!-- Accounting Team -->
                    <h2 class="section-title">Accounting Team</h2>
                    <div class="team-row">
                        <div class="team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Alaa Test" class="img-fluid">
                            <h3>Alaa Test</h3>
                            <p>Accounting Manager</p>
                        </div>
                        <div class="team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Mohamed Shawky" class="img-fluid">
                            <h3>Mohamed Shawky</h3>
                            <p>Accounting Manager</p>
                        </div>
                    </div>

                    <!-- Accounting Sub-team (Same row, smaller) -->
                    <div class="team-row sub-team">
                        <div class="sub-team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Accountant Name 1" class="img-fluid small-img">
                            <h4>Accountant Name 1</h4>
                            <p>Accountant</p>
                        </div>
                        <div class="sub-team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Accountant Name 2" class="img-fluid small-img">
                            <h4>Accountant Name 2</h4>
                            <p>Accountant</p>
                        </div>
                        <div class="sub-team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Saleh" class="img-fluid small-img">
                            <h4>Saleh</h4>
                            <p>Accountant</p>
                        </div>
                        <div class="sub-team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Rana" class="img-fluid small-img">
                            <h4>Rana</h4>
                            <p>Accountant</p>
                        </div>
                    </div>

                    <!-- Sales Team -->
                    <h2 class="section-title">Sales Team</h2>
                    <div class="team-row">
                        <div class="team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Mr. Yousry" class="img-fluid">
                            <h3>Mr. Yousry</h3>
                            <p>Sales Manager</p>
                        </div>
                    </div>

                    <!-- Sales Sub-team (Same row, smaller) -->
                    <div class="team-row sub-team">
                        <div class="sub-team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Sales Team Member Name 1" class="img-fluid small-img">
                            <h4>Sales Team Member Name 1</h4>
                            <p>Sales Team Member</p>
                        </div>
                        <div class="sub-team-member">
                            <img src="{{ asset('/img/people/user.png') }}" alt="Sales Team Member Name 2" class="img-fluid small-img">
                            <h4>Sales Team Member Name 2</h4>
                            <p>Sales Team Member</p>
                        </div>
                    </div>
                </div>
                <!-- Team content ends here -->

            </div>
        </section>

    </div>
</main>

@endsection

@section('page-name-in-footer')
    <span property="name">Team Board</span>
@endsection
