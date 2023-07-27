$( document ).ready(function() {
    console.log( "ready Vi !" );

    // =================================================
    // 1.0 Playr Init
    // =================================================

    let getHomeBannerVideo = $('#gh_home_plyr');
    const ghHomePlyr = new Plyr( getHomeBannerVideo, {
        controls : false,
        autoplay : true,
        playsinline : true,
        muted : true, 
        hideControls : true,
        // resetOnEnd : true,
        // loop : true, 
    });

    // =================================================
    // 1.1 Home Banner Slider
    // =================================================
    
    let getHomeBannerSlider = $("#eme-slider-v2.no-vid");
    if( getHomeBannerSlider.length ){
        let argsSliderESV2 = { 
            items: 1,
            loop: true, 
            // margin: 0,
            autoplay: true,
            dots: true,
            autoplayHoverPause: true,
            //animateOut: "fadeOut", 
            // dragEndSpeed: 1500,
            navSpeed: 1500,
            // smartSpeed: 1500,
            nav : false,
            // navText: ['<svg width="7" height="12" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-left"></use></svg>', '<svg width="7" height="12" aria-hidden="true"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use></svg>'],
            // lazyLoad: true,
            responsive: {
                768: {
                    items: 1,
                },
                1200: {
                    items: 1,
                }
            }
        }
        getHomeBannerSlider.owlCarousel(argsSliderESV2);
    }

});