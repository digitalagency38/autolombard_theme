<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package autolombard_theme
 */

get_header();
?>

<div class="page_404">
    <div class="page_404__item center_block">
            <div class="page_404__svg">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/img/svg_404.svg" alt="">
            </div>
            <div class="page_404__text">Такой страницы <span>не существует</span></div>
            <div class="page_404__link">
                <a href="/">Вернутся на главную</a>
            </div>
    </div>
</div>
<?php
get_footer();
