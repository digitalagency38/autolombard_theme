<?php 
/**
*	Template name: Полезные статьи
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
<div class="block_stat__in center_block">
<?php
    $post_type = 'post';
    $sale_list = get_posts([
    'post_type' => $post_type
    ]);
?>
	<div class="block_stat__blocks">
        <?php foreach ($sale_list as $item): ?>
            <div class="block_stat__block" itemid="<?php echo $item->ID?>">
                <a href="<?php echo get_permalink($item) ?>" class="block_stat__img">
                <img src="<?php echo get_the_post_thumbnail_url($item)?>" alt="">
                </a>
                <a href="<?php echo get_permalink($item) ?>" class="block_stat__tit"><?php echo $item->post_title?></a>
                <a href="<?php echo get_permalink($item) ?>" class="block_stat__link">Подробнее</a>
            </div>
        <?php endforeach;?>
    </div>
</div>
<?php
    get_footer();
?>