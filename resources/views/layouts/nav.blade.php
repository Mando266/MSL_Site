        <!-- Global navigation -->
        <nav id="ac-globalnav" class="js no-touch" role="navigation" aria-label="Global Navigation" data-hires="false" lang="en-US" dir="ltr">

            <ul class="ac-gn-header">

                <li class="ac-gn-item ac-gn-menuicon">
                    <label class="ac-gn-menuicon-label" for="ac-gn-menustate" aria-hidden="true">
                        <span class="ac-gn-menuicon-bread ac-gn-menuicon-bread-top">
                            <span class="ac-gn-menuicon-bread-crust ac-gn-menuicon-bread-crust-top"></span>
                        </span>
                        <span class="ac-gn-menuicon-bread ac-gn-menuicon-bread-bottom">
                            <span class="ac-gn-menuicon-bread-crust ac-gn-menuicon-bread-crust-bottom"></span>
                        </span>
                    </label>
                    <a href="#ac-gn-menustate" class="ac-gn-menuanchor ac-gn-menuanchor-open" id="ac-gn-menuanchor-open">
                        <span class="ac-gn-menuanchor-label">Open Menu</span>
                    </a>
                    <a href="#" class="ac-gn-menuanchor ac-gn-menuanchor-close" id="ac-gn-menuanchor-close">
                        <span class="ac-gn-menuanchor-label">Close Menu</span>
                    </a>
                </li>
                <li class="ac-gn-item ac-gn-hms">
                    <a class="ac-gn-link ac-gn-link-hms" href="/" data-analytics-title="hms home" id="ac-gn-firstfocus-small">
                        <span class="ac-gn-link-text"></span>
                    </a>
                </li>

            </ul>

            <ul class="ac-gn-list ac-gn-hms-home">
                <li class="ac-gn-item ac-gn-hms">

                    <a class="ac-gn-link ac-gn-link-hms" href="/" data-analytics-title="hms home" id="ac-gn-firstfocus">
                        <span class="ac-gn-link-text"></span>
                    </a>

                </li> <!-- ac-gn-item ac-gn-hms -->
            </ul>

            <ul class="ac-gn-list">

                <li class="ac-gn-item ac-gn-item-menu ac-gn-about">
                    <a class="ac-gn-link ac-gn-link-about" href="{{ route('about') }}" data-analytics-title="about">
                        <span class="ac-gn-link-text">About Us</span>
                    </a>
                </li>

                <li class="ac-gn-item ac-gn-item-menu ac-gn-about dropdown">
                    <a class="ac-gn-link ac-gn-link-about" href="#" id="services-link" aria-haspopup="true" aria-expanded="false">
                        <span class="ac-gn-link-text">Services</span>
                        <i class="dropdown-icon"></i> <!-- Add an icon for a better visual cue -->
                    </a>
                    <ul class="dropdown-menu" id="dropdown-menu">
                        <li><a href="{{ route('services') }}">Shipping Agency</a></li>
                        <li><a href="{{ route('services.canal_transit') }}">Canal & Straits Transits</a></li>
                        <li><a href="{{ route('services.huspandary') }}">Husbandry Services</a></li>
                        <li><a href="{{ route('services.novcc') }}">NVOCC</a></li>
                        <li><a href="{{ route('services.sea-freight') }}">Sea Freight</a></li> <!-- New Sea Freight Services -->
                    </ul>
                </li>
                
                
                {{-- <li class="ac-gn-item ac-gn-item-menu ac-gn-people">
                    <a class="ac-gn-link ac-gn-link-people" href="{{ route('team') }}" data-analytics-title="people">
                        <span class="ac-gn-link-text">Team</span>
                    </a>
                </li> <!-- ac-gn-item ac-gn-hms --> --}}


                <li class="ac-gn-item ac-gn-item-menu ac-gn-about">
                    <a class="ac-gn-link ac-gn-link-about" href="{{ route('contact') }}" data-analytics-title="about">
                        <span class="ac-gn-link-text">Contact Us</span>
                    </a>
                </li> <!-- ac-gn-item ac-gn-hms -->


            </ul> <!-- ac-gn-list -->

        </nav>



        
<script>
    document.getElementById('services-link').addEventListener('click', function(e) {
        e.preventDefault();
        var dropdownMenu = document.getElementById('dropdown-menu');
        dropdownMenu.classList.toggle('open');
    });

</script>