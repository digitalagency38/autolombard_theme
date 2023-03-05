<?php 
/**
*	Template name: Страница сервиса
*/
 ?>
<?php
    get_header();
?>
<div class="center_block">
	<?php $block_main = get_field( 'block_main' );?>
  <div class="block_first">
    <div class="block_first__l-side">
        <div class="breadcrums">
            <div class="breadcrums__items">
        <?php if(function_exists('bcn_display'))
          {
              bcn_display();
          }?>
            </div>
        </div>
        <h1 class="block_first__h1"><?php echo $block_main['title']; ?></h1>
        <div class="block_first__blocks">
				<?php $pref = ($block_main['pref']); ?>
				<?php if (is_array($pref)) {
					foreach ($pref as $e) { ?>
                      <div class="block_first__block">
                          <?php echo $e['title']; ?>
                      </div>
					<?php } ?>
				<?php } ?>
        </div>
        <div class="block_first__form">
          <?php echo do_shortcode('[contact-form-7 id="8" title="Форма с телефоном"]')?>
        </div>
    </div>
    <div class="block_first__r-side">
      <img src="<?php echo $block_main['img']; ?>" alt="">
    </div>
</div>
	<?php $block_info = get_field( 'block_info' );?>
    <div class="block_info">
      <div class="block_info__title"><?php echo $block_info['title']; ?></div>
      <div class="block_info__blocks">
          <div class="block_info__l-side"><?php echo $block_info['text']; ?></div>
          <div class="block_info__r-side"><?php echo $block_info['list']; ?></div>
      </div>
      <a href="<?php echo $block_info['link']; ?>" class="block_info__link">Получить займ</a>
      <div class="glide info-glide-js">
          <div data-glide-el="track" class="glide__track">
              <div class="block_info__items">
				<?php $list22 = ($block_info['pref']); ?>
				<?php if (is_array($list22)) {
					foreach ($list22 as $e) { ?>
                  <div class="block_info__item">
                      <div class="block_info__icon">
                          <img src="<?php echo $e['icon']; ?>" alt="">
                      </div>
                      <div class="block_info__tit"><?php echo $e['title']; ?></div>
                  </div>
					<?php } ?>
				<?php } ?>
              </div>
          </div>
          <div class="glide__bullets" data-glide-el="controls[nav]">
				<?php if (is_array($list22)) {
					foreach ($list22 as $key => $e) { ?>
              <button class="glide__bullet" data-glide-dir="=<?php echo $key; ?>"><?php echo $key; ?></button>
					<?php } ?>
				<?php } ?>
          </div>
  </div>
  </div>
<?php $block_tabs = get_field( 'block_tabs' );?>
	<div class="block_tabs">
		<div class="block_tabs__title"><?php echo $block_tabs['title']; ?></div>
		<div class="block_tabs__tabs" id="responsiveTabsDemo">
			<ul>
				<?php $list3 = ($block_tabs['pref']); ?>
				<?php if (is_array($list3)) {
					foreach ($list3 as $key => $e) { ?>
						<li><a href="#tab-<?php echo $key; ?>"><?php echo $e['title']; ?></a></li>
					<?php } ?>
				<?php } ?>
			</ul>
			<?php $list3 = ($block_tabs['pref']); ?>
			<?php if (is_array($list3)) {
				foreach ($list3 as $key => $e) { ?>
					<div class="block_tabs__content" id="tab-<?php echo $key; ?>">
						<?php $lists = ($e['lists']); ?>
						<?php if (is_array($lists)) {
							foreach ($lists as $s) { ?>
								<div class="block_tabs__block">
									<div class="block_tabs__icon">
										<img src="<?php echo $s['icon']; ?>" alt="">
									</div>
									<div class="block_tabs__text"><?php echo $s['tit']; ?></div>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
<?php $block_prefs = get_field( 'block_prefs' );?>
  <div class="block_prefs">
      <div class="block_prefs__title"><?php echo $block_prefs['title']; ?></div>
      <div class="block_prefs__item">
          <div class="block_prefs__l-side">
              <div class="block_prefs__text"><?php echo $block_prefs['text']; ?></div>
              <a href="<?php echo $block_prefs['link']; ?>" class="block_prefs__btn">Получить займ</a>
          </div>
          <div class="block_prefs__r-side"><?php echo $block_prefs['list']; ?>
              <div class="block_prefs__info">
                  <?php echo $block_prefs['info']; ?>
              </div>
          </div>
          <a href="<?php echo $block_prefs['link']; ?>" class="block_prefs__btn mob">Получить займ</a>
      </div>
  </div>
</div>
<?php $block_form = get_field( 'block_form' );?>
<div class="block_tel">
<div class="block_tel__item center_block">
    <div class="block_tel__l-side">
        <div class="block_tel__title"><?php echo $block_form['title']; ?></div>
		<?php echo do_shortcode('[contact-form-7 id="137" title="Форма с телефоном кнопка Получить займ"]')?>
    </div>
    <div class="block_tel__r-side">
        <img src="<?php echo $block_form['img']; ?>" alt="">
    </div>
    </div>
</div>
<div class="center_block">
  <?php $block_time = get_field( 'block_time' );?>
      <div class="block_time">
          <div class="block_time__item">
              <div class="block_time__top">
                  <div class="block_time__l-side">
                      <div class="block_time__title"><?php echo $block_time['title']; ?></div>
                      <div class="block_time__text"><?php echo $block_time['text']; ?></div>
                      <a href="<?php echo $block_time['link']; ?>" class="block_time__link">Подать документы</a>
                  </div>
                  <div class="block_time__r-side">
                      <div class="block_time__img">
                          <img src="<?php echo $block_time['img']; ?>" alt="">
                      </div>
                  </div>
              </div>
              <div class="block_time__blocks">
                  <?php $list4 = ($block_time['pref']); ?>
                  <?php if (is_array($list4)) {
                      foreach ($list4 as $e) { ?>
                          <div class="block_time__block">
                              <div class="block_time__tit"><?php echo $e['title']; ?></div>
                              <div class="block_time__txt"><?php echo $e['text']; ?></div>
                          </div>
                      <?php } ?>
                  <?php } ?>
              </div>
          </div>
      </div>
</div>
<?php $block_auto = get_field( 'block_auto' );?>
<div class="block_auto">
    <div class="block_auto__item center_block">
        <div class="block_auto__title"><?php echo $block_auto['title']; ?></div>
        <div class="block_auto__items">
            <div class="block_auto__top">
                <div>Машина</div>
                <div>Год выпуска</div>
                <div>Цена по рынку</div>
                <div>Сумма займа</div>
                <div>Платёж в месяц</div>
            </div>
            <div class="block_auto__blocks">
				<?php $list6 = ($block_auto['pref']); ?>
				<?php if (is_array($list6)) {
					foreach ($list6 as $e) { ?>
					<div class="block_auto__block">
						<div class="block_auto__info">
							<div class="block_auto__img">
								<img src="<?php echo $e['img']; ?>" alt="">
							</div>
							<div class="block_auto__name"><?php echo $e['name']; ?></div>
						</div>
						<div class="block_auto__year"><span>Год выпуска</span><?php echo $e['year']; ?></div>
						<div class="block_auto__price"><span>Цена по рынку</span><?php echo $e['price']; ?></div>
						<div class="block_auto__sum"><span>Сумма займа</span><?php echo $e['sum']; ?></div>
						<div class="block_auto__cost"><span>Платёж в месяц</span><?php echo $e['cost']; ?></div>
					</div>
					<?php } ?>
				<?php } ?>
                <div class="block_auto__more">Загрузить ещё</div>
            </div>
        </div>
    </div>
</div>
<?php $block_partners = get_field( 'block_partners' );?>
<div class="block_partners">
    <div class="block_partners__title center_block"><?php echo $block_partners['title']; ?></div>
    <div class="block_partners__items">
        <div class="block_partners__item">
            <div class="block_partners__blocks center_block">
				<?php $list7 = ($block_partners['pref']); ?>
				<?php if (is_array($list7)) {
					foreach ($list7 as $e) { ?>
						<div class="block_partners__block">
							<img src="<?php echo $e['img']; ?>" alt="">
						</div>
					<?php } ?>
				<?php } ?>
            </div>
        </div>
    </div>
</div>
<?php $block_reviews = get_field( 'block_reviews' );?>
<div class="block_reviews">
    <div class="block_reviews__item center_block">
        <div class="block_reviews__title"><?php echo $block_reviews['title']; ?></div>
        <div class="glide rev-glide-js">
            <div data-glide-el="track" class="glide__track">
                <div class="block_reviews__slider">
				<?php $list8 = ($block_reviews['pref']); ?>
				<?php if (is_array($list8)) {
					foreach ($list8 as $e) { ?>
						<div class="block_reviews__block">
							<div class="block_reviews__info">
								<div class="block_reviews__img">
									<img src="<?php echo $e['img']; ?>" alt="">
								</div>
								<div class="block_reviews__name"><?php echo $e['name']; ?></div>
							</div>
							<div class="block_reviews__text"><?php echo $e['text']; ?></div>
							<div class="block_reviews__stars">
								<svg width="132" height="20" viewBox="0 0 132 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<?php if($e['check'] == '1') { ?>
										<path d="M10 0L13.5267 5.1459L19.5106 6.90983L15.7063 11.8541L15.8779 18.0902L10 16L4.12215 18.0902L4.29366 11.8541L0.489435 6.90983L6.47329 5.1459L10 0Z" fill="#F5D16C"/>
										<path d="M38 0L41.5267 5.1459L47.5106 6.90983L43.7063 11.8541L43.8779 18.0902L38 16L32.1221 18.0902L32.2937 11.8541L28.4894 6.90983L34.4733 5.1459L38 0Z" fill="#FBEEC8"/>
										<path d="M66 0L69.5267 5.1459L75.5106 6.90983L71.7063 11.8541L71.8779 18.0902L66 16L60.1221 18.0902L60.2937 11.8541L56.4894 6.90983L62.4733 5.1459L66 0Z" fill="#FBEEC8"/>
										<path d="M94 0L97.5267 5.1459L103.511 6.90983L99.7063 11.8541L99.8779 18.0902L94 16L88.1221 18.0902L88.2937 11.8541L84.4894 6.90983L90.4733 5.1459L94 0Z" fill="#FBEEC8"/>
										<path d="M122 0L125.527 5.1459L131.511 6.90983L127.706 11.8541L127.878 18.0902L122 16L116.122 18.0902L116.294 11.8541L112.489 6.90983L118.473 5.1459L122 0Z" fill="#FBEEC8"/>
									<?php } elseif($e['check'] == '2') { ?>
										<path d="M10 0L13.5267 5.1459L19.5106 6.90983L15.7063 11.8541L15.8779 18.0902L10 16L4.12215 18.0902L4.29366 11.8541L0.489435 6.90983L6.47329 5.1459L10 0Z" fill="#F5D16C"/>
										<path d="M38 0L41.5267 5.1459L47.5106 6.90983L43.7063 11.8541L43.8779 18.0902L38 16L32.1221 18.0902L32.2937 11.8541L28.4894 6.90983L34.4733 5.1459L38 0Z" fill="#F5D16C"/>
										<path d="M66 0L69.5267 5.1459L75.5106 6.90983L71.7063 11.8541L71.8779 18.0902L66 16L60.1221 18.0902L60.2937 11.8541L56.4894 6.90983L62.4733 5.1459L66 0Z" fill="#FBEEC8"/>
										<path d="M94 0L97.5267 5.1459L103.511 6.90983L99.7063 11.8541L99.8779 18.0902L94 16L88.1221 18.0902L88.2937 11.8541L84.4894 6.90983L90.4733 5.1459L94 0Z" fill="#FBEEC8"/>
										<path d="M122 0L125.527 5.1459L131.511 6.90983L127.706 11.8541L127.878 18.0902L122 16L116.122 18.0902L116.294 11.8541L112.489 6.90983L118.473 5.1459L122 0Z" fill="#FBEEC8"/>
									<?php } elseif($e['check'] == '3') { ?>
										<path d="M10 0L13.5267 5.1459L19.5106 6.90983L15.7063 11.8541L15.8779 18.0902L10 16L4.12215 18.0902L4.29366 11.8541L0.489435 6.90983L6.47329 5.1459L10 0Z" fill="#F5D16C"/>
										<path d="M38 0L41.5267 5.1459L47.5106 6.90983L43.7063 11.8541L43.8779 18.0902L38 16L32.1221 18.0902L32.2937 11.8541L28.4894 6.90983L34.4733 5.1459L38 0Z" fill="#F5D16C"/>
										<path d="M66 0L69.5267 5.1459L75.5106 6.90983L71.7063 11.8541L71.8779 18.0902L66 16L60.1221 18.0902L60.2937 11.8541L56.4894 6.90983L62.4733 5.1459L66 0Z" fill="#F5D16C"/>
										<path d="M94 0L97.5267 5.1459L103.511 6.90983L99.7063 11.8541L99.8779 18.0902L94 16L88.1221 18.0902L88.2937 11.8541L84.4894 6.90983L90.4733 5.1459L94 0Z" fill="#FBEEC8"/>
										<path d="M122 0L125.527 5.1459L131.511 6.90983L127.706 11.8541L127.878 18.0902L122 16L116.122 18.0902L116.294 11.8541L112.489 6.90983L118.473 5.1459L122 0Z" fill="#FBEEC8"/>
									<?php } elseif($e['check'] == '4') { ?>
										<path d="M10 0L13.5267 5.1459L19.5106 6.90983L15.7063 11.8541L15.8779 18.0902L10 16L4.12215 18.0902L4.29366 11.8541L0.489435 6.90983L6.47329 5.1459L10 0Z" fill="#F5D16C"/>
										<path d="M38 0L41.5267 5.1459L47.5106 6.90983L43.7063 11.8541L43.8779 18.0902L38 16L32.1221 18.0902L32.2937 11.8541L28.4894 6.90983L34.4733 5.1459L38 0Z" fill="#F5D16C"/>
										<path d="M66 0L69.5267 5.1459L75.5106 6.90983L71.7063 11.8541L71.8779 18.0902L66 16L60.1221 18.0902L60.2937 11.8541L56.4894 6.90983L62.4733 5.1459L66 0Z" fill="#F5D16C"/>
										<path d="M94 0L97.5267 5.1459L103.511 6.90983L99.7063 11.8541L99.8779 18.0902L94 16L88.1221 18.0902L88.2937 11.8541L84.4894 6.90983L90.4733 5.1459L94 0Z" fill="#F5D16C"/>
										<path d="M122 0L125.527 5.1459L131.511 6.90983L127.706 11.8541L127.878 18.0902L122 16L116.122 18.0902L116.294 11.8541L112.489 6.90983L118.473 5.1459L122 0Z" fill="#FBEEC8"/>
									<?php } elseif($e['check'] == '5') { ?>
										<path d="M10 0L13.5267 5.1459L19.5106 6.90983L15.7063 11.8541L15.8779 18.0902L10 16L4.12215 18.0902L4.29366 11.8541L0.489435 6.90983L6.47329 5.1459L10 0Z" fill="#F5D16C"/>
										<path d="M38 0L41.5267 5.1459L47.5106 6.90983L43.7063 11.8541L43.8779 18.0902L38 16L32.1221 18.0902L32.2937 11.8541L28.4894 6.90983L34.4733 5.1459L38 0Z" fill="#F5D16C"/>
										<path d="M66 0L69.5267 5.1459L75.5106 6.90983L71.7063 11.8541L71.8779 18.0902L66 16L60.1221 18.0902L60.2937 11.8541L56.4894 6.90983L62.4733 5.1459L66 0Z" fill="#F5D16C"/>
										<path d="M94 0L97.5267 5.1459L103.511 6.90983L99.7063 11.8541L99.8779 18.0902L94 16L88.1221 18.0902L88.2937 11.8541L84.4894 6.90983L90.4733 5.1459L94 0Z" fill="#F5D16C"/>
										<path d="M122 0L125.527 5.1459L131.511 6.90983L127.706 11.8541L127.878 18.0902L122 16L116.122 18.0902L116.294 11.8541L112.489 6.90983L118.473 5.1459L122 0Z" fill="#F5D16C"/>
									<?php } ?>
								</svg>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
                </div>
            </div>
            <div class="rev_button" data-glide-el="controls">
                <button class="rev_button__prev" data-glide-dir="<"></button>
                <button class="rev_button__next" data-glide-dir=">"></button>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
				<?php if (is_array($list8)) {
					foreach ($list8 as $key => $e) { ?>
						<button class="glide__bullet" data-glide-dir="=<?php echo $key; ?>"><?php echo $key; ?></button>
					<?php } ?>
				<?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="center_block">
  <?php $block_question = get_field( 'block_question' );?>
<div class="block_question">
  <div class="block_question__title"><?php echo $block_question['title']; ?></div>
  <div class="block_question__blocks">
    <?php $list9 = ($block_question['pref']); ?>
    <?php if (is_array($list9)) {
  foreach ($list9 as $e) { ?>
    <div class="block_question__block">
      <div class="block_question__tit"><?php echo $e['title']; ?></div>
      <div class="block_question__txt"><?php echo $e['text']; ?></div>
    </div>
    <?php } ?>
    <?php } ?>
  </div>
</div>
</div>

<div class="block_map">
    <div class="block_map__items center_block">
        <div class="block_map__title">Наши офисы</div>
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
</div>
<?php
    get_footer();
?>