<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autolombard_theme
 */

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$site_name = get_option('sale_title');
$site_tel = get_option('sale_tel');
$sale_txt = get_option('sale_txt');
$link_wts = get_option('link_wts');
$link_tg = get_option('link_tg');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/dist/css/style.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/dop_style.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/responsive-tabs.css">
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="<?php echo get_theme_file_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_theme_file_uri(); ?>/js/jquery-ui.min.js"></script>
	<script src="<?php echo get_theme_file_uri(); ?>/js/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo get_theme_file_uri(); ?>/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript">
	// Группы объектов
		var groups = [
				{
					name: "Москва",
					id: "moscow_map",
					style: "islands#redIcon",
					items: [
						<?php $block_map = get_field( 'block_map' );?>
						<?php if (is_array($block_map)) {
							foreach ($block_map as $e) { ?>
								{
									center: [<?php echo $e['coor']; ?>],
									name: "<?php echo $e['title']; ?>",
									tel: "<?php echo $e['tel']; ?>",
									work: "<?php echo $e['work']; ?>",
									img: "<?php echo $e['img']; ?>",
									img2: "<?php echo $e['img2']; ?>",
									img3: "<?php echo $e['img3']; ?>"
								},
							<?php } ?>
						<?php } ?>
					]
				},
				{
					name: "Санкт-Петербург",
					id: "saint_map",
					style: "islands#greenIcon",
					items: [
						<?php $block_map2 = get_field( 'block_map2' );?>
						<?php if (is_array($block_map2)) {
							foreach ($block_map2 as $e) { ?>
								{
									center: [<?php echo $e['coor']; ?>],
									name: "<?php echo $e['title']; ?>",
									tel: "<?php echo $e['tel']; ?>",
									work: "<?php echo $e['work']; ?>",
									img: "<?php echo $e['img']; ?>",
									img2: "<?php echo $e['img2']; ?>",
									img3: "<?php echo $e['img3']; ?>"
								},
							<?php } ?>
						<?php } ?>
					]
				}
			];
	</script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/object_list.js" type="text/javascript"></script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K2LHK85');</script>
<!-- End Google Tag Manager -->
</head>
<body>
    <div class="wrapper" id="app" :class="{isMobile, isTablet}">
        <header class="header">
    <div class="center_block">
    <div class="header__top">
        <a href="/" class="header__logo">
          <?php
            if ( has_custom_logo() ) {
              echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            }
          ?>
        </a>
        <div class="header__description"><?= $site_name; ?></div>
        <div class="header__burger" :class="{'isOpened': header.isMobileMenuOpened}">
            <div class="header__burger--icon" @click.prevent="header.toogleMobileMenu.apply(header)"></div>
            <div class="header__burger--body">
                <div class="header__top">
                    <a href="/" class="header__logo">
                      <?php
                        if ( has_custom_logo() ) {
                          echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        }
                      ?>
                    </a>
                    <div class="header__description"><?= $site_name; ?></div>
                    <div class="header__burger" :class="{'isOpened': header.isMobileMenuOpened}">
                        <div class="header__burger--icon" @click.prevent="header.toogleMobileMenu.apply(header)"></div>
                    </div>
                    <div class="header__tel">
                        <a href="tel:<?= $site_tel; ?>"><?= $site_tel; ?></a>
                        <div class="header__tel_info"><?= $sale_txt; ?></div>
                    </div>
                </div>
                <div class="burger_item">
                    <nav>
                      <?php
                          wp_nav_menu(
                              array(
                                  'menu'            => 'Меню в шапке',
                                  'theme_location'  => '',
                                  'container'       => 'ul'
                              )
                          );
                      ?>
                    </nav>
                    <div class="header__soc">
                        <a href="<?= $link_wts; ?>" target="_blank">
                            <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_353_3156)">
                                <rect y="0.5" width="30" height="30" rx="5" fill="#1D68E4"/>
                                <path d="M15 0.5C6.717 0.5 0 7.217 0 15.5C0 23.783 6.717 30.5 15 30.5C23.283 30.5 30 23.783 30 15.5C30 7.217 23.283 0.5 15 0.5ZM15.3179 24.2334C15.3177 24.2334 15.3181 24.2334 15.3179 24.2334H15.3143C13.8116 24.2328 12.3351 23.856 11.0239 23.141L6.26472 24.3891L7.53845 19.7382C6.7527 18.3773 6.33934 16.8332 6.34003 15.2514C6.34209 10.303 10.3695 6.27721 15.3179 6.27721C17.7193 6.27812 19.9736 7.21288 21.6685 8.90912C23.3636 10.6056 24.2965 12.8605 24.2956 15.2585C24.2935 20.2072 20.2657 24.2334 15.3179 24.2334Z" fill="#1D68E4"/>
                                <path d="M15.5032 7.5C11.3663 7.5 8.00184 10.863 8 14.9968C7.99954 16.4134 8.39614 17.7929 9.14679 18.9866L9.32507 19.2702L8.5673 22.0369L11.4058 21.2925L11.6798 21.4549C12.8312 22.1381 14.1512 22.4995 15.497 22.5H15.5C19.6337 22.5 22.9982 19.1368 23 15.0028C23.0007 12.9993 22.2213 11.1158 20.8053 9.69872C19.3894 8.28168 17.5062 7.50069 15.5032 7.5ZM19.9146 18.2201C19.7267 18.7464 18.826 19.227 18.3928 19.2919C18.0043 19.3498 17.5129 19.374 16.9728 19.2026C16.6452 19.0986 16.2253 18.9599 15.6873 18.7278C13.4257 17.7515 11.9485 15.475 11.8358 15.3246C11.7231 15.1741 10.9152 14.1024 10.9152 12.9929C10.9152 11.8836 11.4976 11.3382 11.7042 11.1128C11.911 10.8871 12.1553 10.8308 12.3056 10.8308C12.4558 10.8308 12.6062 10.8321 12.7376 10.8386C12.8761 10.8455 13.062 10.7859 13.2448 11.2255C13.4328 11.6768 13.8837 12.7861 13.94 12.8988C13.9964 13.0118 14.0339 13.1433 13.9589 13.2938C13.8837 13.4442 13.6339 13.7688 13.3953 14.0647C13.2952 14.1886 13.1648 14.2991 13.2964 14.5247C13.4277 14.7502 13.8805 15.4884 14.5506 16.086C15.4119 16.8539 16.1384 17.0918 16.3638 17.2047C16.589 17.3174 16.7206 17.2986 16.8522 17.1483C16.9836 16.9979 17.4158 16.4902 17.5661 16.2645C17.7163 16.0389 17.8667 16.0766 18.0733 16.1518C18.2801 16.2268 19.3885 16.7722 19.6139 16.8849C19.8394 16.9979 19.9896 17.0543 20.046 17.1483C20.1026 17.2424 20.1026 17.6935 19.9146 18.2201Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_353_3156">
                                <rect width="30" height="30" fill="white" transform="translate(0 0.5)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="<?= $link_tg; ?>" target="_blank">
                            <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_353_3160)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 15.5C30 23.7863 23.2863 30.5 15 30.5C6.71375 30.5 0 23.7863 0 15.5C0 7.21375 6.71375 0.5 15 0.5C23.2863 0.5 30 7.21375 30 15.5ZM21.8012 8.57487L5.83813 14.6926C4.74403 15.1177 4.76335 15.7197 5.65049 15.9995L9.29983 17.2433L19.217 11.3341C19.6572 11.0433 20.0655 11.2079 19.7317 11.5L12.0606 18.3884L11.5073 22.7288C11.5073 23.2607 12.3286 22.4424 12.5796 22.1923C12.5874 22.1845 12.5947 22.1773 12.6014 22.1706L14.5978 20.259L18.7369 23.2911C19.4916 23.7162 20.0311 23.4968 20.2325 22.5944L22.9491 9.86808C23.1892 8.75452 22.5421 8.30883 21.8012 8.57487Z" fill="#1D68E4"/>
                                <rect y="0.5" width="30" height="30" rx="5" fill="#1D68E4"/>
                                <path d="M5.83813 14.6926L21.8012 8.57487C22.5421 8.30883 23.1892 8.75452 22.9491 9.86808L20.2325 22.5944C20.0311 23.4968 19.4916 23.7162 18.7369 23.2911L14.5978 20.259L12.6014 22.1706C12.3806 22.3901 11.5073 23.2773 11.5073 22.7288L12.0606 18.3884L19.7317 11.5C20.0655 11.2079 19.6572 11.0433 19.217 11.3341L9.29983 17.2433L5.65049 15.9995C4.76335 15.7197 4.74403 15.1177 5.83813 14.6926Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_353_3160">
                                <rect width="30" height="30" fill="white" transform="translate(0 0.5)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__tel">
            <a href="tel:<?= $site_tel; ?>"><?= $site_tel; ?></a>
            <div class="header__tel_info"><?= $sale_txt; ?></div>
        </div>
        <div class="header__soc">
            <a href="<?= $link_wts; ?>" target="_blank">
                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_353_3156)">
                    <rect y="0.5" width="30" height="30" rx="5" fill="#1D68E4"/>
                    <path d="M15 0.5C6.717 0.5 0 7.217 0 15.5C0 23.783 6.717 30.5 15 30.5C23.283 30.5 30 23.783 30 15.5C30 7.217 23.283 0.5 15 0.5ZM15.3179 24.2334C15.3177 24.2334 15.3181 24.2334 15.3179 24.2334H15.3143C13.8116 24.2328 12.3351 23.856 11.0239 23.141L6.26472 24.3891L7.53845 19.7382C6.7527 18.3773 6.33934 16.8332 6.34003 15.2514C6.34209 10.303 10.3695 6.27721 15.3179 6.27721C17.7193 6.27812 19.9736 7.21288 21.6685 8.90912C23.3636 10.6056 24.2965 12.8605 24.2956 15.2585C24.2935 20.2072 20.2657 24.2334 15.3179 24.2334Z" fill="#1D68E4"/>
                    <path d="M15.5032 7.5C11.3663 7.5 8.00184 10.863 8 14.9968C7.99954 16.4134 8.39614 17.7929 9.14679 18.9866L9.32507 19.2702L8.5673 22.0369L11.4058 21.2925L11.6798 21.4549C12.8312 22.1381 14.1512 22.4995 15.497 22.5H15.5C19.6337 22.5 22.9982 19.1368 23 15.0028C23.0007 12.9993 22.2213 11.1158 20.8053 9.69872C19.3894 8.28168 17.5062 7.50069 15.5032 7.5ZM19.9146 18.2201C19.7267 18.7464 18.826 19.227 18.3928 19.2919C18.0043 19.3498 17.5129 19.374 16.9728 19.2026C16.6452 19.0986 16.2253 18.9599 15.6873 18.7278C13.4257 17.7515 11.9485 15.475 11.8358 15.3246C11.7231 15.1741 10.9152 14.1024 10.9152 12.9929C10.9152 11.8836 11.4976 11.3382 11.7042 11.1128C11.911 10.8871 12.1553 10.8308 12.3056 10.8308C12.4558 10.8308 12.6062 10.8321 12.7376 10.8386C12.8761 10.8455 13.062 10.7859 13.2448 11.2255C13.4328 11.6768 13.8837 12.7861 13.94 12.8988C13.9964 13.0118 14.0339 13.1433 13.9589 13.2938C13.8837 13.4442 13.6339 13.7688 13.3953 14.0647C13.2952 14.1886 13.1648 14.2991 13.2964 14.5247C13.4277 14.7502 13.8805 15.4884 14.5506 16.086C15.4119 16.8539 16.1384 17.0918 16.3638 17.2047C16.589 17.3174 16.7206 17.2986 16.8522 17.1483C16.9836 16.9979 17.4158 16.4902 17.5661 16.2645C17.7163 16.0389 17.8667 16.0766 18.0733 16.1518C18.2801 16.2268 19.3885 16.7722 19.6139 16.8849C19.8394 16.9979 19.9896 17.0543 20.046 17.1483C20.1026 17.2424 20.1026 17.6935 19.9146 18.2201Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_353_3156">
                    <rect width="30" height="30" fill="white" transform="translate(0 0.5)"/>
                    </clipPath>
                    </defs>
                </svg>
            </a>
            <a href="<?= $link_tg; ?>" target="_blank">
                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_353_3160)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M30 15.5C30 23.7863 23.2863 30.5 15 30.5C6.71375 30.5 0 23.7863 0 15.5C0 7.21375 6.71375 0.5 15 0.5C23.2863 0.5 30 7.21375 30 15.5ZM21.8012 8.57487L5.83813 14.6926C4.74403 15.1177 4.76335 15.7197 5.65049 15.9995L9.29983 17.2433L19.217 11.3341C19.6572 11.0433 20.0655 11.2079 19.7317 11.5L12.0606 18.3884L11.5073 22.7288C11.5073 23.2607 12.3286 22.4424 12.5796 22.1923C12.5874 22.1845 12.5947 22.1773 12.6014 22.1706L14.5978 20.259L18.7369 23.2911C19.4916 23.7162 20.0311 23.4968 20.2325 22.5944L22.9491 9.86808C23.1892 8.75452 22.5421 8.30883 21.8012 8.57487Z" fill="#1D68E4"/>
                    <rect y="0.5" width="30" height="30" rx="5" fill="#1D68E4"/>
                    <path d="M5.83813 14.6926L21.8012 8.57487C22.5421 8.30883 23.1892 8.75452 22.9491 9.86808L20.2325 22.5944C20.0311 23.4968 19.4916 23.7162 18.7369 23.2911L14.5978 20.259L12.6014 22.1706C12.3806 22.3901 11.5073 23.2773 11.5073 22.7288L12.0606 18.3884L19.7317 11.5C20.0655 11.2079 19.6572 11.0433 19.217 11.3341L9.29983 17.2433L5.65049 15.9995C4.76335 15.7197 4.74403 15.1177 5.83813 14.6926Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_353_3160">
                    <rect width="30" height="30" fill="white" transform="translate(0 0.5)"/>
                    </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
    </div>
    <div class="header__bottom">	
        <?php
            wp_nav_menu(
                array(
                    'menu'            => 'Меню в шапке',
                    'theme_location'  => '',
                    'container'       => 'ul'
                )
            );
        ?>
    </div>
    </div>
</header>
        <div class="content">