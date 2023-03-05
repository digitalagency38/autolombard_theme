<?php 
/**
*	Template name: Контакты
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
</div>
<div class="center_block contacts">
        <div class="block_map__item">
            <div class="block_map__l-side">
				<div class="block_map__buttons">
					<div class="block_map__fake">Москва</div>
            		<div class="block_map__more">
						<div id="msk" class="block_map__button isActive">Москва</div>
						<div id="spb" class="block_map__button">Санкт-Петербург</div>
					</div>
				</div>
            </div>
            <div class="block_map__r-side">
				<div id="map"></div>
            </div>
        </div>
</div>
<div class="center_block">
<?php $block_rekv = get_field( 'block_rekv' );?>
    <div class="block_rekv">
      <div class="block_rekv__title"><?php echo $block_rekv['title']; ?></div>
      <div class="block_rekv__blocks">
          <?php $list11 = ($block_rekv['pref']); ?>
        	<?php if (is_array($list11)) {
        		foreach ($list11 as $e) { ?>
                  <div class="block_rekv__block"><?php echo $e['title']; ?></div>
          	<?php } ?>
          <?php } ?>
      </div>
  </div>
</div>
<?php
    get_footer();
?>