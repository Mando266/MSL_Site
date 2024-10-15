@extends('layouts.app')

@section('title') MSL @endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
@endsection

@section('content')

    <main id="main" class="main" role="main" data-page-type="contact">
        <!-- Contact banner -->
        @include('partials.home-banner')
        
    <section id="about-us" class="homepage-section about-section">
        <div class="container">
            <h2>Who We Are ?</h2>
            <p>At MSL, we are committed to providing exceptional logistics solutions tailored to your needs. With years of experience, a wide range of equipment, and dedicated professionals, we ensure that your cargo reaches its destination safely and on time. Our goal is to create seamless supply chain solutions that exceed your expectations.</p>
        </div>
    </section>

    <section id="section-promos" class="homepage-section">
          <h2>Our Services</h2>
          <div class="promo-container">
              <div class="promo-box">
                  <img src="{{ asset('/img/pages-banner/about-banner.jpg') }}" alt="Ocean Freight Services" class="img-fluid">
                  <div class="promo-overlay"></div>
                  <div class="promo-text">
                      <h3>Ocean Freight Services</h3>
                  </div>
                  <div class="description">
                      <p>This is a brief description of our ocean freight services. We ensure timely and safe transportation of your cargo across the seas.</p>
                  </div>
              </div>
      
              <div class="promo-box">
                  <img src="{{ asset('/img/pages-banner/service-banner.jpg') }}" alt="Committed Capacity" class="img-fluid">
                  <div class="promo-overlay"></div>
                  <div class="promo-text">
                      <h3>Committed Capacity</h3>
                  </div>
                  <div class="description">
                      <p>Our committed capacity ensures that your cargo is transported with reliability and efficiency.</p>
                  </div>
              </div>
      
              <div class="promo-box">
                  <img src="{{ asset('/img/home/tracking.jpg') }}" alt="Track Your Shipment" class="img-fluid">
                  <div class="promo-overlay"></div>
                  <div class="promo-text">
                      <h3>Track Your Shipment</h3>
                  </div>
                  <div class="description">
                      <p>Stay updated with real-time tracking of your shipments for complete peace of mind.</p>
                  </div>
              </div>
          </div>
    </section>

    <section id="why-choose-us" class="homepage-section">
        <div class="container">
            <h2>Why Choose MSL?</h2>
            <div class="benefits-container">
                <div class="benefit-item">
                    <i class="icon icon-shield"></i>
                    <h4>Reliable Service</h4>
                    <p>Count on us to deliver your cargo on time, every time.</p>
                </div>
                <div class="benefit-item">
                    <i class="icon icon-globe"></i>
                    <h4>Global Coverage</h4>
                    <p>We operate in major regions, connecting you to the world.</p>
                </div>
                <div class="benefit-item">
                    <i class="icon icon-headphones"></i>
                    <h4>24/7 Support</h4>
                    <p>Our team is available around the clock to assist you.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- <section id="service-phases" class="homepage-section">
        <div class="container">
            <h2>Service Phases</h2>
            <div class="timeline-container">
                <div class="timeline-item">
                    <h4>Sokhna / Jeddah</h4>
                </div>
                <div class="timeline-item">
                    <h4>Sokhna / Jebel Ali & Dammam</h4>
                </div>
                <div class="timeline-item">
                    <h4>Sokhna / Jebel Ali & Dammam</h4>
                </div>
                <div class="timeline-item">
                    <h4>Jebel Ali / Kuwait, Sohar, Bahrain</h4>
                </div>
                <div class="timeline-item">
                    <h4>Intra-Red Sea</h4>
                </div>
            </div>
        </div>
    </section> --}}
    
    
    
    {{-- <section id="fleet-equipment" class="homepage-section">
        <div class="container">
            <h2>Our Fleet & Equipment</h2>
            <div class="equipment-list">
                <div class="equipment-type">20 DV</div>
                <div class="equipment-type">40 DV</div>
                <div class="equipment-type">40 HC</div>
                <div class="equipment-type">20 OT</div>
                <div class="equipment-type">40 OT</div>
                <div class="equipment-type">40 FR</div>
                <div class="equipment-type">40 RFHC</div>
            </div>
        </div>
    </section> --}}
    


    <section id="clients">
        <h2>Our Clients</h2>
        <div class="clients-slider-wrapper">
            <div class="clients-slider">
                <div class="slider-track">
                    <div class="client-item">
                        <img src="{{ asset('/img/clients/samsung.svg') }}" alt="Samsung" class="client-logo">
                    </div>
                    <div class="client-item">
                        <img src="{{ asset('/img/clients/galaxy.png') }}" alt="Galaxy" class="client-logo">
                    </div>
                    <div class="client-item">
                        <img src="{{ asset('/img/clients/unilever.png') }}" alt="Unilever" class="client-logo">
                    </div>
                    <div class="client-item">
                        <img src="{{ asset('/img/clients/agrofoods.png') }}" alt="AgroFoods" class="client-logo">
                    </div>
                    <div class="client-item">
                        <img src="{{ asset('/img/clients/venuscargo.png') }}" alt="VenusCargo" class="client-logo">
                    </div>
                    <div class="client-item">
                        <img src="{{ asset('/img/clients/ezzsteel.png') }}" alt="EzzSteel" class="client-logo">
                    </div>
                    <div class="client-item">
                        <img src="{{ asset('/img/clients/suezsteel.png') }}" alt="SuezSteel" class="client-logo">
                    </div>
                    <div class="client-item">
                        <img src="{{ asset('/img/clients/sgl.png') }}" alt="SGLSteel" class="client-logo">
                    </div>
                    <div class="client-item">
                        <img src="{{ asset('/img/clients/alamana.png') }}" alt="AlAmana" class="client-logo">
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="prev-slide">❮</button>
                <button class="next-slide">❯</button>
            </div>
        </div>
    </section>
    
    
    
      
      
      
      
              
    </main>

    <script>
      document.querySelectorAll('.promo-box').forEach(box => {
          box.addEventListener('mouseenter', () => {
              box.querySelector('.description').style.opacity = '1'; // Show description on hover
              box.querySelector('.promo-text').style.opacity = '0'; // Hide title
          });
  
          box.addEventListener('mouseleave', () => {
              box.querySelector('.description').style.opacity = '0'; // Hide description on leave
              box.querySelector('.promo-text').style.opacity = '1'; // Show title again
          });
      });

      document.addEventListener("DOMContentLoaded", function() {
            const track = document.querySelector('.slider-track');
            const prevButton = document.querySelector('.prev-slide');
            const nextButton = document.querySelector('.next-slide');
            
            let currentSlide = 0;
            const slideWidth = document.querySelector('.client-item').offsetWidth;
            const totalSlides = document.querySelectorAll('.client-item').length;

            function updateSliderPosition() {
                track.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
            }

            nextButton.addEventListener('click', function() {
                if (currentSlide < totalSlides - 3) {  // Adjust for visible logos
                    currentSlide++;
                } else {
                    currentSlide = 0;
                }
                updateSliderPosition();
            });

            prevButton.addEventListener('click', function() {
                if (currentSlide > 0) {
                    currentSlide--;
                } else {
                    currentSlide = totalSlides - 3;  // Adjust for visible logos
                }
                updateSliderPosition();
            });

            // Auto-slide functionality (optional)
            setInterval(() => {
                if (currentSlide < totalSlides - 3) {
                    currentSlide++;
                } else {
                    currentSlide = 0;
                }
                updateSliderPosition();
            }, 5000); // Auto-slide every 5 seconds
        });

  </script>
  
  
  
@endsection
