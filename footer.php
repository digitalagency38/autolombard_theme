<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autolombard_theme
 */
$footer_text = get_option('footer_text');
$site_tel = get_option('sale_tel');
$site_tel2 = get_option('sale_tel2');
$foot1 = get_option('foot1');
$foot2 = get_option('foot2');
$link_wts = get_option('link_wts');
$link_tg = get_option('link_tg');
$copy = get_option('copy');
$politic = get_option('politic');
?>
 </div>
<footer class="footer">
	<div class="center_block">
    <div class="footer__text"><?= $footer_text; ?></div>
    <div class="footer__item">
        <div class="footer__main">
            <a href="/" class="footer__logo">
                <img src="<?= get_option('sale_image'); ?>" alt="">
            </a>
            <div class="footer__label"><?= $foot1; ?></div>
            <div class="footer__description"><?= $foot2; ?></div> 
        </div>
        <div class="footer__menu">
            <nav>
                <div>Услуги</div>
                  <?php
                      wp_nav_menu(
                          array(
                              'menu'            => 'Меню Услуги в подвале',
                              'theme_location'  => '',
                              'container'       => 'ul'
                          )
                      );
                  ?>
            </nav>
            <nav>
                <div>Прочее</div>	
              <?php
                  wp_nav_menu(
                      array(
                          'menu'            => 'Меню Прочее в подвале',
                          'theme_location'  => '',
                          'container'       => 'ul',
                          'menu_class'      => 'header__menu--item'
                      )
                  );
              ?>
            </nav>
        </div>
        <div class="footer__info">
            <div class="footer__tel">
                <a href="tel:<?= $site_tel; ?>"><?= $site_tel; ?></a>
                <div>Телефон в Москве</div>
            </div>
            <div class="footer__tel">
                <a href="tel:<?= $site_tel2; ?>"><?= $site_tel2; ?></a>
                <div>Телефон в Санкт-Петербурге</div>
            </div>
            <div class="footer__soc">
                <a href="<?= $link_wts; ?>" target="_blank">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_353_3453)">
                        <rect width="30" height="30" rx="5" fill="white"/>
                        <path d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM15.3179 23.7334C15.3177 23.7334 15.3181 23.7334 15.3179 23.7334H15.3143C13.8116 23.7328 12.3351 23.356 11.0239 22.641L6.26472 23.8891L7.53845 19.2382C6.7527 17.8773 6.33934 16.3332 6.34003 14.7514C6.34209 9.80301 10.3695 5.77721 15.3179 5.77721C17.7193 5.77812 19.9736 6.71288 21.6685 8.40912C23.3636 10.1056 24.2965 12.3605 24.2956 14.7585C24.2935 19.7072 20.2657 23.7334 15.3179 23.7334Z" fill="white"/>
                        <path d="M15.5032 7C11.3663 7 8.00184 10.363 8 14.4968C7.99954 15.9134 8.39614 17.2929 9.14679 18.4866L9.32507 18.7702L8.5673 21.5369L11.4058 20.7925L11.6798 20.9549C12.8312 21.6381 14.1512 21.9995 15.497 22H15.5C19.6337 22 22.9982 18.6368 23 14.5028C23.0007 12.4993 22.2213 10.6158 20.8053 9.19872C19.3894 7.78168 17.5062 7.00069 15.5032 7ZM19.9146 17.7201C19.7267 18.2464 18.826 18.727 18.3928 18.7919C18.0043 18.8498 17.5129 18.874 16.9728 18.7026C16.6452 18.5986 16.2253 18.4599 15.6873 18.2278C13.4257 17.2515 11.9485 14.975 11.8358 14.8246C11.7231 14.6741 10.9152 13.6024 10.9152 12.4929C10.9152 11.3836 11.4976 10.8382 11.7042 10.6128C11.911 10.3871 12.1553 10.3308 12.3056 10.3308C12.4558 10.3308 12.6062 10.3321 12.7376 10.3386C12.8761 10.3455 13.062 10.2859 13.2448 10.7255C13.4328 11.1768 13.8837 12.2861 13.94 12.3988C13.9964 12.5118 14.0339 12.6433 13.9589 12.7938C13.8837 12.9442 13.6339 13.2688 13.3953 13.5647C13.2952 13.6886 13.1648 13.7991 13.2964 14.0247C13.4277 14.2502 13.8805 14.9884 14.5506 15.586C15.4119 16.3539 16.1384 16.5918 16.3638 16.7047C16.589 16.8174 16.7206 16.7986 16.8522 16.6483C16.9836 16.4979 17.4158 15.9902 17.5661 15.7645C17.7163 15.5389 17.8667 15.5766 18.0733 15.6518C18.2801 15.7268 19.3885 16.2722 19.6139 16.3849C19.8394 16.4979 19.9896 16.5543 20.046 16.6483C20.1026 16.7424 20.1026 17.1935 19.9146 17.7201Z" fill="#397BE7"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_353_3453">
                        <rect width="30" height="30" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg> 
                </a>
                <a href="<?= $link_tg; ?>" target="_blank">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_353_3457)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30 15C30 23.2863 23.2863 30 15 30C6.71375 30 0 23.2863 0 15C0 6.71375 6.71375 0 15 0C23.2863 0 30 6.71375 30 15ZM21.8012 8.07487L5.83813 14.1926C4.74403 14.6177 4.76335 15.2197 5.65049 15.4995L9.29983 16.7433L19.217 10.8341C19.6572 10.5433 20.0655 10.7079 19.7317 11L12.0606 17.8884L11.5073 22.2288C11.5073 22.7607 12.3286 21.9424 12.5796 21.6923C12.5874 21.6845 12.5947 21.6773 12.6014 21.6706L14.5978 19.759L18.7369 22.7911C19.4916 23.2162 20.0311 22.9968 20.2325 22.0944L22.9491 9.36808C23.1892 8.25452 22.5421 7.80883 21.8012 8.07487Z" fill="#397BE7"/>
                        <rect width="30" height="30" rx="5" fill="white"/>
                        <path d="M5.83813 14.1926L21.8012 8.07487C22.5421 7.80883 23.1892 8.25452 22.9491 9.36808L20.2325 22.0944C20.0311 22.9968 19.4916 23.2162 18.7369 22.7911L14.5978 19.759L12.6014 21.6706C12.3806 21.8901 11.5073 22.7773 11.5073 22.2288L12.0606 17.8884L19.7317 11C20.0655 10.7079 19.6572 10.5433 19.217 10.8341L9.29983 16.7433L5.65049 15.4995C4.76335 15.2197 4.74403 14.6177 5.83813 14.1926Z" fill="#397BE7"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_353_3457">
                        <rect width="30" height="30" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="footer__btn">
                <div data-modal-id="2">Позвонить нам</div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__copy"><?= $copy; ?></div>
        <a href="<?= $politic; ?>" class="footer__politic">Политика конфиденциальности</a>
        <div class="footer__reserve">Все права защищены</div>
        <a href="//kraftnet.tech/" target="_blank" class="footer__link">
            <svg width="80" height="27" viewBox="0 0 80 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_353_3468)">
                <path d="M6.43795 19.9863H8.6397C9.19866 19.9863 9.68512 20.1858 10.0746 20.5781C10.4801 20.955 10.6899 21.4297 10.6899 21.9788V27H8.00157V22.2179H2.68831V27H0V15.0449H2.68831V20.5738L8.3809 15.0449H11.9149L6.43795 19.9863Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2768 22.2179H18.7236V20.3962H16.1704V26.9999H13.6172V18.2329H16.1704V18.8079L16.7844 18.2329H19.1491C19.7322 18.2329 20.2382 18.4346 20.6416 18.8278C21.0614 19.2055 21.2768 19.6793 21.2768 20.2254V22.2179Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.2734 26.4346C23.6676 26.8088 24.1472 26.9999 24.6915 26.9999H28.2656L29.0897 26.3018V26.9999H31.4887V20.2254C31.4887 19.6794 31.2863 19.2055 30.8918 18.8278C30.5128 18.4346 30.0374 18.2329 29.4895 18.2329H24.2975L22.127 20.3962H29.0897V21.4209H24.6915C24.141 21.4209 23.6593 21.6243 23.2665 22.0158C22.8847 22.3963 22.6924 22.8705 22.6924 23.4134V25.0074C22.6924 25.55 22.8842 26.0279 23.2596 26.4208L23.2664 26.4279L23.2734 26.4346ZM25.0914 23.5614V24.8366H29.0897V22.5462L28.0538 23.5614H25.0914Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M41.702 13.4509L39.4114 15.6142H35.6422V18.6281L36.064 18.2329H41.4649L39.1742 20.3962H35.6422V27H33.1914V15.4434C33.1914 14.8941 33.3939 14.4179 33.7884 14.0391C34.194 13.6497 34.6869 13.4509 35.2469 13.4509H41.702Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M49.3622 27H45.7387C45.1932 27 44.7118 26.8186 44.3149 26.4617L44.3079 26.4553L44.3012 26.4486C43.9228 26.0735 43.7285 25.616 43.7285 25.0955V20.6881H40.8516L43.041 18.6204H43.7285V17.3182L46.1356 15.0449V18.6204H49.3622V20.6881H46.1356V24.9323H49.3622V27Z" fill="white"/>
                <path d="M57.873 20.3962H53.6176V26.9999H51.0645V18.2329H53.6176V18.8079L54.2317 18.2329H58.2985C58.8816 18.2329 59.3876 18.4346 59.791 18.8278C60.2108 19.2055 60.4262 19.6793 60.4262 20.2254V26.9999H57.873V20.3962Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M61.8957 26.4346C62.3153 26.8088 62.8256 26.9999 63.405 26.9999H70.639V24.8366H63.8305V23.8119H68.6876L70.639 21.9845V20.2254C70.639 19.6793 70.4237 19.2055 70.0038 18.8278C69.6005 18.4346 69.0945 18.2329 68.5114 18.2329H63.405C62.819 18.2329 62.3064 18.4363 61.8883 18.8278C61.4821 19.2083 61.2773 19.6825 61.2773 20.2254V25.0074C61.2773 25.55 61.4815 26.0279 61.8811 26.4208L61.8882 26.4279L61.8957 26.4346ZM68.0859 21.6486V20.3962H63.8305V22.6791L64.9309 21.6486H68.0859Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M80.0009 27H76.3774C75.8318 27 75.3505 26.8186 74.9536 26.4617L74.9466 26.4553L74.9398 26.4486C74.5615 26.0735 74.3672 25.616 74.3672 25.0955V20.6881H71.4902L73.6797 18.6204H74.3672V17.3182L76.7743 15.0449V18.6204H80.0009V20.6881H76.7743V24.9323H80.0009V27Z" fill="white"/>
                </g>
                <path d="M6.3572 0.681323V1.63105C6.07276 1.35576 5.76343 1.14242 5.4292 0.991015C5.02387 0.812082 4.61498 0.722615 4.20254 0.722615C3.38476 0.722615 2.70209 1.00134 2.15454 1.55878C1.61409 2.10935 1.34387 2.78723 1.34387 3.59243C1.34387 4.45957 1.63898 5.14433 2.2292 5.64672C2.82654 6.14911 3.48787 6.40031 4.2132 6.40031C4.66831 6.40031 5.1092 6.29363 5.53587 6.08029C5.83454 5.93577 6.10831 5.74307 6.3572 5.5022V6.45192C5.71009 6.89925 4.99543 7.12292 4.2132 7.12292C3.16076 7.12292 2.28254 6.78226 1.57854 6.10094C0.881648 5.41961 0.533203 4.58 0.533203 3.58211C0.533203 2.55668 0.885203 1.70331 1.5892 1.02198C2.30031 0.340661 3.1892 0 4.25587 0C5.03809 0 5.73854 0.227108 6.3572 0.681323Z" fill="white"/>
                <path d="M7.94104 2.71497H11.0557V6.31772H11.717V8.13458H11.013V6.99904H7.64237V8.13458H6.93837V6.31772C7.30815 6.31084 7.58193 6.12502 7.7597 5.76028C7.88059 5.5194 7.94104 5.14089 7.94104 4.62474V2.71497ZM10.2877 6.31772V3.39629H8.70904V5.00669C8.70904 5.5779 8.53126 6.01491 8.1757 6.31772H10.2877Z" fill="white"/>
                <path d="M15.8126 5.56414L16.4526 5.9048C16.3033 6.18008 16.122 6.41063 15.9086 6.59644C15.5033 6.94743 15.0126 7.12292 14.4366 7.12292C13.8393 7.12292 13.3237 6.93711 12.89 6.56547C12.4633 6.18696 12.25 5.62608 12.25 4.88281C12.25 4.22902 12.442 3.68878 12.826 3.26209C13.2171 2.82852 13.7397 2.61174 14.394 2.61174C15.1335 2.61174 15.6917 2.87326 16.0686 3.39629C16.3673 3.80921 16.506 4.34601 16.4846 5.00669H13.0393C13.0464 5.44026 13.1851 5.79124 13.4553 6.05964C13.7255 6.32804 14.0562 6.46224 14.4473 6.46224C14.7957 6.46224 15.098 6.35901 15.354 6.15255C15.5531 5.98738 15.706 5.79124 15.8126 5.56414ZM13.0926 4.38731H15.6953C15.6313 4.05009 15.4784 3.78169 15.2366 3.58211C15.002 3.37564 14.7211 3.27241 14.394 3.27241C14.074 3.27241 13.7895 3.37909 13.5406 3.59243C13.2988 3.79889 13.1495 4.06385 13.0926 4.38731Z" fill="white"/>
                <path d="M21.012 2.71497V6.99904H20.244V3.39629H18.6654V5.32671C18.6654 5.88415 18.5516 6.29708 18.324 6.56547C18.068 6.86829 17.7125 7.01969 17.2574 7.01969C17.2005 7.01969 17.1223 7.01281 17.0227 6.99904V6.31772C17.0938 6.33149 17.1507 6.33837 17.1934 6.33837C17.4423 6.33837 17.6271 6.24546 17.748 6.05964C17.8476 5.90824 17.8974 5.66393 17.8974 5.32671V2.71497H21.012Z" fill="white"/>
                <path d="M25.8568 3.32403V2.71497H26.6248V6.99904H25.8568V6.40031C25.4728 6.88205 24.9679 7.12292 24.3421 7.12292C23.7448 7.12292 23.2363 6.92334 22.8168 6.52418C22.3972 6.12502 22.1875 5.56758 22.1875 4.85184C22.1875 4.14988 22.3937 3.60275 22.8061 3.21048C23.2257 2.81132 23.7377 2.61174 24.3421 2.61174C24.9821 2.61174 25.487 2.84917 25.8568 3.32403ZM24.4275 3.27241C24.0221 3.27241 23.6772 3.4135 23.3928 3.69566C23.1155 3.97094 22.9768 4.35634 22.9768 4.85184C22.9768 5.32671 23.1048 5.71554 23.3608 6.01835C23.6239 6.31428 23.9795 6.46224 24.4275 6.46224C24.8755 6.46224 25.231 6.3074 25.4941 5.99771C25.7643 5.68801 25.8995 5.3095 25.8995 4.86217C25.8995 4.3529 25.7501 3.96062 25.4515 3.68534C25.1528 3.41006 24.8115 3.27241 24.4275 3.27241Z" fill="white"/>
                <path d="M28.0794 6.99904V2.71497H28.8474V4.46989H30.938V2.71497H31.706V6.99904H30.938V5.15121H28.8474V6.99904H28.0794Z" fill="white"/>
                <path d="M36.8963 6.48289C36.4554 6.90958 35.8972 7.12292 35.2216 7.12292C34.5461 7.12292 33.9843 6.90958 33.5363 6.48289C33.0954 6.0562 32.875 5.5194 32.875 4.87249C32.875 4.2187 33.0954 3.67846 33.5363 3.25177C33.9843 2.82508 34.5461 2.61174 35.2216 2.61174C35.8972 2.61174 36.4554 2.82508 36.8963 3.25177C37.3443 3.67846 37.5683 4.2187 37.5683 4.87249C37.5683 5.5194 37.3443 6.0562 36.8963 6.48289ZM36.3203 3.69566C36.0216 3.4135 35.6554 3.27241 35.2216 3.27241C34.7878 3.27241 34.4181 3.41694 34.1123 3.70598C33.8136 3.98815 33.6643 4.37698 33.6643 4.87249C33.6643 5.368 33.8172 5.75683 34.123 6.039C34.4287 6.32116 34.795 6.46224 35.2216 6.46224C35.6483 6.46224 36.0145 6.32116 36.3203 6.039C36.6261 5.75683 36.779 5.368 36.779 4.87249C36.779 4.3701 36.6261 3.97782 36.3203 3.69566Z" fill="white"/>
                <path d="M41.2356 2.71497H42.9103C43.3156 2.71497 43.625 2.79755 43.8383 2.96272C44.0943 3.1623 44.2223 3.4307 44.2223 3.76792C44.2223 4.13955 44.0623 4.42516 43.7423 4.62474C43.9627 4.67979 44.1476 4.77614 44.297 4.91378C44.5316 5.13401 44.649 5.40929 44.649 5.73963C44.649 6.15255 44.4961 6.47601 44.1903 6.71C43.9272 6.9027 43.5787 6.99904 43.145 6.99904H41.2356V2.71497ZM42.0036 4.45957H42.8143C43.0205 4.45957 43.1841 4.41828 43.305 4.33569C43.4472 4.23246 43.5183 4.0845 43.5183 3.8918C43.5183 3.71975 43.4472 3.58211 43.305 3.47888C43.1983 3.41006 42.9921 3.37565 42.6863 3.37565H42.0036V4.45957ZM42.0036 6.33837H42.953C43.2801 6.33837 43.5112 6.29019 43.6463 6.19384C43.817 6.06997 43.9023 5.91168 43.9023 5.71898C43.9023 5.51252 43.8276 5.35079 43.6783 5.2338C43.5432 5.13057 43.3121 5.07895 42.985 5.07895H42.0036V6.33837Z" fill="white"/>
                <defs>
                <clipPath id="clip0_353_3468">
                <rect width="80" height="13.549" fill="white" transform="translate(0 13.4509)"/>
                </clipPath>
                </defs>
            </svg>
        </a>
    </div>
    </div>
</footer>
    </div>
    <script src="<?php echo get_theme_file_uri(); ?>/dist/js/app.min.js?_v=20230303214427"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/jquery.responsiveTabs.min.js?_v=20230303214427"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/main_dop.js?_v=20230303214427"></script>
<div class="modal" data-modal="2">
    <div class="modal__in">
        <div class="modal__closer"></div>
		<div class="modal__title">Подать документы на оформление <span>займа</span> под <span>залог авто</span></div>
		<?php echo do_shortcode('[contact-form-7 id="869" title="Форма в подвале"]')?>
		<div class="modal-body isSent">
			<h2><span>Спасибо</span>, <br> ваша заявка получена.</h2>
			<p>Мы свяжемся с вами в рабочее время</p>
		</div>
    </div>
</div>
 <?php wp_footer();?>
</body>
</html>