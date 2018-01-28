jQuery( document ).ready( function ( $ ) {
    "use strict";
    /* ==========================================================================
     For Preloader
     ========================================================================== */

    jQuery( window ).load( function ( ) {
        jQuery( '#preloader' ).delay( 100 ).fadeOut( 'slow' );
        jQuery( 'html,body' ).addClass( 'add-oveflow' );
    } );
    /* ==========================================================================
     For Nav Scroll
     ========================================================================== */
    var $transparent_nav = jQuery( ".trnsparent" );
    if ( $transparent_nav.length ) {
        jQuery( window ).scroll( function ( ) {
            if ( $transparent_nav.offset( ).top > 50 ) {
                $transparent_nav.addClass( "scroll-nav" );
            } else {
                $transparent_nav.removeClass( "scroll-nav" );
            }


        } );
    }

    /* ==========================================================================
     For Scroll to Top
     ========================================================================== */
    jQuery( window ).scroll( function ( ) {
        if ( jQuery( this ).scrollTop( ) > 600 ) {
            jQuery( '.scrollup' ).fadeIn( 'slow' );
        } else {
            jQuery( '.scrollup' ).fadeOut( 'slow' );
        }
    } );
    jQuery( '.scrollup' ).click( function ( ) {
        jQuery( "html, body" ).animate( { scrollTop: 0 }, 1000 );
        return false;
    } );

    $( '.page-scroll' ).click( function () {
        var toNext = $( '.parallax-section' ).height();
        $( 'html, body' ).animate( { scrollTop: toNext }, 'slow' )
        return false;
    } );

    /* ==========================================================================
     For jQuery for page scrolling feature
     ========================================================================== */
    jQuery( '#main-menu' ).find( 'a[href*="#"]:not([href="#"])' ).click( function () {
        if ( location.pathname.replace( /^\//, '' ) == this.pathname.replace( /^\//, '' ) && location.hostname == this.hostname ) {
            var target = jQuery( this.hash );
            target = target.length ? target : jQuery( '[name=' + this.hash.slice( 1 ) + ']' );
            if ( target.length ) {
                jQuery( 'html,body' ).animate( {
                    scrollTop: ( target.offset().top - 40 )
                }, 1000 );
                if ( jQuery( '.navbar-toggle' ).css( 'display' ) != 'none' ) {
                    jQuery( this ).parents( '.container' ).find( ".navbar-toggle" ).trigger( "click" );
                }
                return false;
            }
        }
    } );

    /* ==========================================================================
     For Highlight the top nav as scrolling occurs
     ========================================================================== */
    jQuery( 'body' ).scrollspy( {
        target: '.navbar-fixed-top',
        offset: 51
    } );
    /* ==========================================================================
     For Closes the Responsive Menu on Menu Item Click
     ========================================================================== */
    jQuery( '.navbar-collapse ul li a:not(.dropdown-toggle)' ).click( function ( ) {
        jQuery( '.navbar-toggle:visible' ).click( );
    } );
    /* ==========================================================================
     For Offset for Main Navigation
     ========================================================================== */
    jQuery( '#main-nav' ).affix( {
        offset: {
            top: 100
        }
    } );
    /* ==========================================================================
     For Foo
     ========================================================================== */
    var $ScrollReveal = jQuery( ".foo" );
    if ( $ScrollReveal.length ) {
        window.sr = ScrollReveal( );
        sr.reveal( '.foo', {
            duration: 700,
            delay: 300,
            distance: '50px',
            viewFactor: 0.5,
            easing: 'ease-in-out'
        } );
    }


// parallax initialization
    if ( !Modernizr.touch ) {
        jQuery.stellar( {
            horizontalScrolling: false,
            verticalOffset: 40
        } );
    }
    ;
    /* ==========================================================================
     For Scroll to Top
     ========================================================================== */
//    jQuery(window).scroll(function () {
//        if (jQuery(this).scrollTop() > 600) {
//            jQuery('.scrollup').fadeIn('slow');
//        } else {
//            jQuery('.scrollup').fadeOut('slow');
//        }
//    });
//
//    jQuery('.scrollup').click(function () {
//        jQuery("html, body").animate({scrollTop: 0}, 1000);
//        return false;
//    });

    /* ==========================================================================
     For Hero Header 1
     ========================================================================== */
    var owl = jQuery( '#hero-header-1' );
    owl.owlCarousel( {
        singleItem: true,
        autoPlay: true,
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 500,
        rewindSpeed: 400,
        autoHeight: true,
        addClassActive: true,
        afterMove: function ( ) {
            jQuery( '.owl-item.active h1' ).addClass( 'animated fadeInUpSmall' );
            jQuery( '.owl-item.active p' ).addClass( 'animated-md fadeInUpSmall' );
            jQuery( '.owl-item.active .bttn-div' ).addClass( 'animated-lt fadeInUpSmall' );
        },
        beforeMove: function ( ) {
            jQuery( '.owl-item h1' ).removeClass( 'animated fadeInUpSmall' );
            jQuery( '.owl-item p' ).removeClass( 'animated-md fadeInUpSmall' );
            jQuery( '.owl-item .bttn-div' ).removeClass( 'animated-lt fadeInUpSmall' );
        },
    } );
    jQuery( '.owl-item.active h1' ).addClass( 'animated fadeInUpSmall' );
    jQuery( '.owl-item.active p' ).addClass( 'animated-md fadeInUpSmall' );
    jQuery( '.owl-item.active .bttn-div' ).addClass( 'animated-lt fadeInUpSmall' );
    jQuery( '.hero-header-1 .carousel-arrows .next-feature' ).on( 'click', function ( event ) {
        owl.trigger( 'owl.next' );
    } );
    jQuery( '.hero-header-1 .carousel-arrows .prev-feature' ).on( 'click', function ( event ) {
        owl.trigger( 'owl.prev' );
    } );
    var owlbttn = jQuery( '#hero-header-1' ).data( 'owlCarousel' );
    jQuery( document.documentElement ).keyup( function ( event ) {
        if ( event.keyCode == 37 ) {
            owlbttn.prev( );
        } else if ( event.keyCode == 39 ) {
            owlbttn.next( );
        }
    } );
    /*----------------------------------------------------*/
    /*	FW Contact Form
     /*----------------------------------------------------*/
    fwForm.initAjaxSubmit( {
        selector: 'form[data-fw-form-id="fw_form"]',
        ajaxUrl: adminAjax
    } );
    /* ==========================================================================
     For Hero Header 11
     ========================================================================== */
    var owl = jQuery( '#hero-header-11' );
    owl.owlCarousel( {
        singleItem: true,
        autoPlay: true,
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 500,
        rewindSpeed: 400,
        autoHeight: true
    } );
    var owlbttn = jQuery( '#hero-header-11' ).data( 'owlCarousel' );
    jQuery( document.documentElement ).keyup( function ( event ) {
        if ( event.keyCode === 37 ) {
            owlbttn.prev( );
        } else if ( event.keyCode === 39 ) {
            owlbttn.next( );
        }
    } );
    /* ==========================================================================
     Event date
     ========================================================================== */
    var eventdate = jQuery( '#countdown' );
    if ( eventdate.length ) {
        jQuery( '#countdown' ).countdown( eventdate.attr( 'data-eventdate' ) + ' 00:00:00', function ( event ) {
            jQuery( '#countdown #days' ).html( event.strftime( '%D' ) );
            jQuery( '#countdown #hours' ).html( event.strftime( '%H' ) );
            jQuery( '#countdown #minutes' ).html( event.strftime( '%M' ) );
            jQuery( '#countdown #seconds' ).html( event.strftime( '%S' ) );
        } );
    }

    /* ==========================================================================
     For Hero Header Video
     ========================================================================== */



    jQuery( '.popup-video' ).magnificPopup( {
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade my-video',
        preloader: false
    } );
    /* ==========================================================================
     For Testimonial Style 2
     ========================================================================== */
    var owl = jQuery( '#testimonial2' );
    owl.owlCarousel( {
        items: 3,
        autoPlay: true,
        navigation: false,
        slideSpeed: 300,
        rewindSpeed: 400,
        itemsDesktop: [ 1199, 3 ],
        itemsDesktopSmall: [ 979, 2 ],
        itemsTablet: [ 768, 2 ],
        itemsMobile: [ 540, 1 ],
    } );
    /* ==========================================================================
     For Testimonial Style 3
     ========================================================================== */
    var owl = jQuery( '.testimonial03' );
    owl.owlCarousel( {
        singleItem: true,
        autoPlay: true,
        navigation: false,
        slideSpeed: 300,
        rewindSpeed: 400
    } );
    /* ==========================================================================
     For Testimonial Style 4
     ========================================================================== */
    jQuery( '.testimonial-4' ).masonry( {
        itemSelector: '.col-xs-4'
    } );
    /* ==========================================================================
     For Testimonial Style 5
     ========================================================================== */
    var owl = jQuery( '.owl-testimonial-5' );
    owl.owlCarousel( {
        items: 3,
        autoPlay: true,
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 300,
        rewindSpeed: 400,
        itemsDesktop: [ 1199, 3 ],
        itemsDesktopSmall: [ 979, 2 ],
        itemsTablet: [ 768, 2 ],
        itemsMobile: [ 540, 1 ]
    } );
    /* ==========================================================================
     For Counterup 1
     ========================================================================== */
    jQuery( '.funfact-1' ).counterUp( {
        delay: 50,
        time: 2000
    } );
    /* ==========================================================================
     For Counterup 2
     ========================================================================== */
    jQuery( '.funfact-2' ).counterUp( {
        delay: 50,
        time: 2000
    } );
    /* ==========================================================================
     For Partner Style 3
     ========================================================================== */
    var owl = jQuery( '.clients' );
    owl.owlCarousel( {
        items: 4,
        autoPlay: true,
        pagination: false,
        slideSpeed: 300,
        paginationSpeed: 300,
        rewindSpeed: 400,
        itemsDesktop: [ 1199, 4 ],
        itemsDesktopSmall: [ 979, 3 ],
        itemsTablet: [ 768, 3 ],
        itemsMobile: [ 380, 2 ]
    } );
    jQuery( '.next-client' ).on( 'click', function ( event ) {
        owl.trigger( 'owl.next' );
    } );
    jQuery( '.prev-client' ).on( 'click', function ( event ) {
        owl.trigger( 'owl.prev' );
    } );
    /* ==========================================================================
     For Portfolio Style 1 Popup
     ========================================================================== */
    jQuery( '.portfolio-masonary-1' ).magnificPopup( {
        disableOn: 700,
        type: 'image',
        gallery: { enabled: true },
    } );
    /* ==========================================================================
     For Portfolio Style 2 Popup
     ========================================================================== */
    jQuery( '.portfolio-masonary-2' ).magnificPopup( {
        disableOn: 700,
        type: 'image',
        gallery: { enabled: true },
    } );
    /* ==========================================================================
     For Portfolio-2 Masonary Grid
     ========================================================================== */
    var jQuerygrid = jQuery( '.portfolio-2 .grid' ).masonry( {
        itemSelector: '.grid-item'
    } );
    jQuerygrid.imagesLoaded( ).progress( function ( ) {
        jQuerygrid.masonry( 'layout' );
    } );
} );