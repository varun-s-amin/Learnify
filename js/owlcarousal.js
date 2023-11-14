// Initialize Owl Carousel
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items: 1, // Set the number of items to show
            loop: true, // Enable loop
            nav: false,
            dots:false,
            autoplay: true, // Enable autoplay
            autoplayTimeout: 5000, // Set autoplay timeout in milliseconds
            autoplayHoverPause: true, // Pause on hover
        });
    });
