<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5ZB11PS1DT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-5ZB11PS1DT');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WWTBBNPH');
    </script>

    <!-- Google Ads gtag -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16586268099"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-16586268099');
    </script>

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1085601246305010');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" 
             src="https://www.facebook.com/tr?id=1085601246305010&ev=PageView&noscript=1"/>
    </noscript>

    <!-- TikTok Pixel Code -->
    <script>
        !function(w,d,t){
            w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];
            ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group",
                         "enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"];
            ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};
            for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);
            ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;
                ttq._i=ttq._i||{};ttq._i[e]=[];ttq._i[e]._u=r;ttq._t=ttq._t||{};ttq._t[e]=+new Date;
                ttq._o=ttq._o||{};ttq._o[e]=n||{};n=document.createElement("script");
                n.type="text/javascript"; n.async=true;
                n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];
                e.parentNode.insertBefore(n,e)
            };
            ttq.load('CRKIJ5RC77U855HRD5LG'); ttq.page();
        }(window,document,'ttq');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWTBBNPH" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVB323HB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>

<?php wp_body_open(); ?>

<form method="post" action="./" id="form1">
    <div class="aspNetHidden">
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="" />
        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
    </div>

<script type="text/javascript">
    var theForm = document.forms['form1'] || document.form1;
    function __doPostBack(eventTarget, eventArgument) {
        if(!theForm.onsubmit || (theForm.onsubmit() != false)) {
            theForm.__EVENTTARGET.value = eventTarget;
            theForm.__EVENTARGUMENT.value = eventArgument;
            theForm.submit();
        }
    }
</script>


<!-- Top navigation bar -->
<div id="top-nav">
    <div class="link-button menu-button">
        <p class="link-texts white">MENU</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/master/burger.svg" class="burger img" />
    </div>

    <!-- Site Logo -->
    <a href="<?php echo esc_url(home_url()); ?>" class="logo">
        <?php 
        $logo = get_field('main_logo', 'option'); 
        if( $logo ) : 
        ?>
            <img src="<?php echo esc_url($logo['url']); ?>" alt="Logo" class="img" />
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" class="img" />
        <?php endif; ?>
    </a>
    
    <?php 
    $menu_action_button = get_field('menu_action_button', 'option'); 
    if( $menu_action_button ) : ?>
        <a href="<?php echo esc_url($menu_action_button['url']); ?>" 
        class="link-button" 
        target="<?php echo esc_attr($menu_action_button['target'] ?: '_self'); ?>">
            <p class="link-texts white"><?php echo esc_html($menu_action_button['title']); ?></p>
        </a>
    <?php endif; ?>


</div>

<!-- Nav structure -->
<nav>
    <div class="nav-container">
        <div class="link-button close-btn">
            <p class="link-texts white">CLOSE</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/master/cross.svg" class="img cross-img" />
        </div>

        <!-- Site Color Full Logo -->
        <a href="<?php echo esc_url(home_url()); ?>" class="logo-container">
            <?php 
            $logo = get_field('expanded_menu_logo', 'option'); 
            if( $logo ) : 
            ?>
                <img src="<?php echo esc_url($logo['url']); ?>" alt="Logo"  class="img logo" />
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" class="img logo" />
            <?php endif; ?>
        </a>

    </div>
    <div class="bottom-nav-container">
        <!-- Navigation Brand Image -->
        <div class="nav-tabs-container nav-tabs-one">
            <?php 
            $brand_image = get_field('brand_image', 'option'); 
            if( $brand_image ) : 
                $image_url = esc_url($brand_image['url']); 
                $image_ext = pathinfo($image_url, PATHINFO_EXTENSION);
                $jpg_url = str_replace('.' . $image_ext, '.jpg', $image_url);
            ?>
                <picture class="img">
                    <source srcset="<?php echo $image_url; ?>" type="image/webp">
                    <source srcset="<?php echo $jpg_url; ?>" type="image/jpeg">
                    <img loading="lazy" src="<?php echo $image_url; ?>" alt="<?php echo esc_attr($brand_image['alt']); ?>" class="img">
                </picture>
            <?php endif; ?>
        </div>

        <!-- Navigation Main Menus -->
        <?php
            $walker = new Custom_Nav_Walker();
        ?>

        <div class="nav-tabs-container nav-tabs-two">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'nav_discover',
                'container'      => false, 
                'items_wrap'     => '%3$s', 
                'walker'         => $walker,
            ));
            ?>
        </div>

        <div class="nav-tabs-container nav-tabs-two">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'nav_secondary',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'walker'         => $walker,
            ));
            ?>
        </div>


        <!-- Action Menu With Social Icons -->
        <div class="nav-tabs-container nav-tabs-three">

            <div class="nav-right-container">

                <?php if( have_rows('action_menu', 'option') ): ?>
                    <?php while( have_rows('action_menu', 'option') ): the_row(); 
                        $menu_link = get_sub_field('menu_link');
                        $menu_name = get_sub_field('menu_name');
                    ?>
                        
                        <div class="menu-item-wrapper"> 
                            <a href="<?php echo esc_url($menu_link); ?>" 
                            class="nav-tabs-item-right FZHeavy-18 gray" 
                            data-text="<?php echo esc_attr($menu_name); ?>">
                                
                                <?php echo esc_html($menu_name); ?>
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.629" height="11.366" viewBox="0 0 15.629 11.366" class="img arrow-icon">
                                    <path id="next_1_" data-name="next (1)" d="M15.421,6.185l-4.973,4.973a.71.71,0,1,1-1-1l3.76-3.76H.71a.71.71,0,1,1,0-1.421H13.2l-3.76-3.76a.71.71,0,1,1,1-1l4.973,4.973a.71.71,0,0,1,0,1Z" />
                                </svg>
                            </a>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
                        
            <div class="nav-social-container">
                <?php 
                if( have_rows('social_icons', 'option') ): 
                    while( have_rows('social_icons', 'option') ): the_row(); 

                        $image = get_sub_field('image');
                        $link  = get_sub_field('link');

                        if( $image && !is_string($image) ) {
                            if( is_numeric($image) ) {
                                $image = wp_get_attachment_url($image);
                            } 
                            elseif( is_array($image) && isset($image['url']) ) {
                                $image = $image['url'];
                            }
                        }

                        if ( $image && $link ) : 
                ?>
                            <a href="<?php echo esc_url($link); ?>" class="social-link" target="_blank">
                                <img src="<?php echo esc_url($image); ?>" class="img" alt="Social Icon" />
                            </a>
                <?php 
                        endif; 
                    endwhile; 
                else: 
                    echo '<p>No social icons found!</p>';
                endif; 
                ?>
            </div>

        </div>


    </div>

</nav>

<a href="https://wa.link/aees7g?utm_source=website&utm_medium=floatingbutton&utm_campaign=whatsapp"
    id="whatsapp-icon" target="_blank">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/master/whatsapp-float.svg" />
</a>


    </form>
