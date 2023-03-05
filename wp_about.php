<?php 
/**
*	Template name: О компании
*/
 ?>
<?php
    get_header();
?>
<div class="center_block">
  <div class="breadcrums">
    <div class="breadcrums__items">
        <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?>
    </div>
</div>
  <h1 class="title_h1"><?php echo get_the_title(); ?></h1>
<?php $info_block = get_field( 'info_block' );?>
  <div class="info_block">
    <div class="info_block__img">
        <img src="<?php echo $info_block['img']; ?>" alt="">
    </div>
    <div class="info_block__block">
        <div class="info_block__l-side">
            <div class="info_block__title"><?php echo $info_block['title']; ?></div>
            <div class="info_block__text"><?php echo $info_block['text']; ?></div>
        </div>
        <div class="info_block__r-side">
          <?php $list12 = ($info_block['pref']); ?>
        	<?php if (is_array($list12)) {
        		foreach ($list12 as $e) { ?>
                <div class="info_block__item">
                    <div class="info_block__number"><?php echo $e['title']; ?></div>
                    <div class="info_block__txt"><?php echo $e['text']; ?></div>
                </div>
          	<?php } ?>
          <?php } ?>
        </div>
    </div>
</div>
</div>
<?php $block_distance = get_field( 'block_distance' );?>
<div class="block_distance">
    <div class="block_distance__center center_block">
        <div class="block_distance__info">
            <div class="block_distance__l-side">
                <div class="block_distance__title"><?php echo $block_distance['title']; ?></div>
                <div class="block_distance__text"><?php echo $block_distance['text']; ?></div>
            </div>
            <div class="block_distance__r-side">
                <img src="<?php echo $block_distance['img']; ?>" alt="">
            </div>
        </div>
        <div class="glide dist-glide-js">
            <div data-glide-el="track" class="glide__track">
                <div class="block_distance__blocks">
                  <?php $list13 = ($block_distance['pref']); ?>
                    <?php if (is_array($list13)) {
                        foreach ($list13 as $e) { ?>
                      <div class="block_distance__item">
                          <div class="block_distance__icon">
                              <img src="<?php echo $e['icon']; ?>" alt="">
                          </div>
                          <div class="block_distance__tit"><?php echo $e['title']; ?></div>
                          <div class="block_distance__txt"><?php echo $e['text']; ?></div>
                      </div>
                    <?php } ?>
                  <?php } ?>
                </div>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
              <?php if (is_array($list13)) {
  								foreach ($list13 as $key => $e) { ?>
              <button class="glide__bullet" data-glide-dir="=<?php echo $key; ?>"><?php echo $e['text']; ?></button>
              <?php } ?>
              <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php $block_form = get_field( 'block_form' );?>
<div class="block_form center_block">
    <div class="block_form__l-side">
        <div class="block_form__title"><?php echo $block_form['title']; ?></div>
		<?php echo do_shortcode('[contact-form-7 id="137" title="Форма с телефоном кнопка Получить займ"]')?>
    </div>
    <div class="block_form__r-side">
        <img src="<?php echo $block_form['img']; ?>" alt="">
    </div>
</div>
<?php
    get_footer();
?>