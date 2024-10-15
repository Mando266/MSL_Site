@extends('layouts.app')

@section('title') Contact Us @endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/contact/contact.css') }}">
@endsection

@section('content')

<main id="main" class="main" role="main" data-page-type="contact">
    <!-- Contact banner -->
    @include('partials.contact-banner')

    <!-- Contact Section -->
    <div class="contact-container">
        <div class="contact-info">
            <h3>Contact Info</h3>
            <ul>
                <li><b>Alexandria Office</b></li>
                <li>5 El Farana Street, Azarita, Alexandria, Egypt</li>
                <li>📞 +20 3 487 67 37</li>
                <li>✉️ info@meastline.com</li>
            </ul>

            <!-- Social Media Links -->
            <h3>Follow Us On</h3>
            <div class="social-icons">
                <a href="#" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/>
                    </svg>
                </a>
                <a href="#" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                </a>
                <a href="#" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form-container">
            <h3>Send To Us!</h3>
            <form action="/submit-contact" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone" required  autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required  autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required  autocomplete="off">
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Message" required  autocomplete="off"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Map Section -->
    <div class="map-section">
        <h3>Our Location</h3>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.26210866312!2d29.89105752515744!3d31.203070064808173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c537a6d3e09b%3A0x1a6e48de7ad510b2!2s5%20El%20Farana%20St%2C%20Azarita%20WA%20Ash%20Shatibi%2C%20Alexandria%20Governorate!5e0!3m2!1sen!2seg!4v1696184197301!5m2!1sen!2seg"
            width="100%" height="450"
            style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</main>

@endsection
