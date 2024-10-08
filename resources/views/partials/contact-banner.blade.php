
<style>
    .main-banner {
        position: relative;
        width: 100%;
        max-width: 406cm;
    }
    
    .main-banner img {
        width: 100%;
        display: block;
        opacity: 0.8;
        height:350px;
        object-fit: cover;
    }
    
    .main-banner .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Black overlay with 50% opacity */
        z-index: 1;
    }
    
    .main-banner .banner-title {
        position: absolute;
        top:65%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        text-align: center;
    
    }
    
    .main-banner .banner-title h1 {
        font-size: 3em;
        font-weight: bold;
        text-transform: uppercase;
        margin: 0;
        color:white ;
    
    }
    
    </style>
    
    <div class="main-banner">
        <div class="overlay"></div>
        <img src="{{ asset('/img/pages-banner/contact-banner.jpg') }}" alt="Main Banner" class="img-fluid">
        <div class="banner-title">
            <h1>Contact US</h1>
        </div>
    </div>
    