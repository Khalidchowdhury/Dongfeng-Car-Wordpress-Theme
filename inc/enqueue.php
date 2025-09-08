<?php


function mukto_enque_assets() {
    // CSS Files
    wp_enqueue_style('masterpage', get_template_directory_uri() . '/assets/css/MasterPage.min.css', array(), null);
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.css', array(), null);
    wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/assets/js/owl.theme.default.min.css', array(), null);
    wp_enqueue_style('default-style', get_template_directory_uri() . '/assets/css/Default.min.css', array(), null);
    wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/About-Us.min.css', array(), null);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11.1.4/swiper-bundle.min.css');

    if ( is_page('feature') ) {
        wp_enqueue_style('box-features', get_template_directory_uri() . '/assets/css/Box-Features.min.css');
        wp_enqueue_style('mcustom-scrollbar-css', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.css');
    }


    // Favicon & Apple Touch Icons
    $favicons = [
        'apple-touch-icon-57x57'   => 'assets/images/favicon/apple-touch-icon-57x57.png',
        'apple-touch-icon-114x114' => 'assets/images/favicon/apple-touch-icon-114x114.png',
        'apple-touch-icon-72x72'   => 'assets/images/favicon/apple-touch-icon-72x72.png',
        'apple-touch-icon-144x144' => 'assets/images/favicon/apple-touch-icon-144x144.png',
        'apple-touch-icon-60x60'   => 'assets/images/favicon/apple-touch-icon-60x60.png',
        'apple-touch-icon-120x120' => 'assets/images/favicon/apple-touch-icon-120x120.png',
        'favicon-196x196'           => 'assets/images/favicon/favicon-196x196.png',
        'favicon-96x96'             => 'assets/images/favicon/favicon-96x96.png',
        'favicon-32x32'             => 'assets/images/favicon/favicon-32x32.png',
        'favicon-16x16'             => 'assets/images/favicon/favicon-16x16.png',
        'favicon-128'               => 'assets/images/favicon/favicon-128.png'
    ];

    foreach ($favicons as $id => $path) {
        if (strpos($id, 'apple-touch') !== false) {
            echo '<link rel="apple-touch-icon-precomposed" sizes="'.preg_replace('/[^\d]/', '', $id).'x'.preg_replace('/[^\d]/', '', $id).'" href="'.get_template_directory_uri().'/'.$path.'" />' . "\n";
        } else {
            echo '<link rel="icon" type="image/png" sizes="'.preg_replace('/[^\d]/', '', $id).'x'.preg_replace('/[^\d]/', '', $id).'" href="'.get_template_directory_uri().'/'.$path.'" />' . "\n";
        }
    }

    // JS Files
    wp_enqueue_script('gtag-analytics', 'https://www.googletagmanager.com/gtag/js?id=G-5ZB11PS1DT', array(), null, true);
    wp_add_inline_script('gtag-analytics', "window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);} gtag('js',new Date()); gtag('config','G-5ZB11PS1DT');");
    wp_enqueue_script('gtag-ads', 'https://www.googletagmanager.com/gtag/js?id=AW-16586268099', array(), null, true);
    wp_add_inline_script('gtag-ads', "window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);} gtag('js',new Date()); gtag('config','AW-16586268099');");
    wp_enqueue_script('gtm', 'https://www.googletagmanager.com/gtm.js?id=GTM-WWTBBNPH', array(), null, true);
    wp_add_inline_script('gtm', "!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init','1085601246305010');fbq('track','PageView');");
    wp_add_inline_script('gtm', "!function(w,d,t){w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=['page','track','identify','instances','debug','on','off','once','ready','alias','group','enableCookie','disableCookie','holdConsent','revokeConsent','grantConsent'];ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e};ttq.load=function(e,n){var r='https://analytics.tiktok.com/i18n/pixel/events.js';n=n||{};var o=n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n;var a=document.createElement('script');a.type='text/javascript',a.async=!0,a.src=r+'?sdkid='+e+'&lib='+t;var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(a,s)};ttq.load('CRKIJ5RC77U855HRD5LG');ttq.page();}(window,document,'ttq');");
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11.1.4/swiper-bundle.min.js', array(), false, true);
    
    if ( is_page('feature') ) {
        wp_enqueue_script('mcustom-scrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.js', array('jquery'), null, true);
    }
    if ( is_page('about') ) {
        wp_enqueue_script('scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js', array(), null, true);
    }
}
add_action('wp_enqueue_scripts', 'mukto_enque_assets');
