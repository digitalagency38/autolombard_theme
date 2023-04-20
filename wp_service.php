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
	<?php if ($block_main['title']): ?>
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
					<form action="/callback/" method="POST" name="">
						<input type="hidden" name="subject" value="Отправить заявку">
						<input class="feedback__input" type="tel" placeholder="+7 (___) ___-__-__" name="tel" required="required"> 
						<input id="check-34" name="check" type="hidden" value="" />
						<input class="global_btn feedback__submit js_submit" type="submit" value="Отправить заявку" onclick="document.getElementById('check-34').value = 'stopSpam';">
						<input type="hidden" name="UTM_SOURCE" value="">
						<input type="hidden" name="UTM_MEDIUM" value="">
						<input type="hidden" name="UTM_CAMPAIGN" value="">
						<input type="hidden" name="UTM_TERM" value="">
						<input type="hidden" name="UTM_CONTENT" value="">
						<input type="hidden" name="affiliate_id">
						<input type="hidden" name="source">
						<input type="hidden" name="transaction_id">
						<div class="block_main__sending">Спасибо! Ваша заявка отправлена. <br> Мы свяжемся с вами в рабочее время</div>
					</form>
				</div>
			</div>
			<div class="block_first__r-side">
			  <img src="<?php echo $block_main['img']; ?>" alt="">
			</div>
		</div>
	<?php endif ?>
<?php $block_calc = get_field( 'block_calc' );?>
<?php if ($block_calc['title']): ?>
	<div class="block_calc">
		<div class="block_calc__item">
			<div class="block_calc__title"></div>
			<div class="block_calc__block">
				<div class="calc__wrap calc_pts">
					<div class="calc_borrow_step_1">
						<div class="title_calc"><?php echo $block_calc['title']; ?></div>
						<div class="calc_items">
							<div class="calc_item">
								<div class="calc_item_wrap">
									<div class="calc_left">
										<label class="calc_label">Сумма займа</label>
									</div>
									<div class="calc_right">
										<input type="text" id="amount_cash-pts" class="calc_input js-input-only-numbers js-q-price-range-value-pts">
										<div class="calc_right_absolute">
											<div class="calc_currency">рублей</div>
										</div>
									</div>
								</div>
								<div id="cash-pts" class="calc_range"></div>
								<div class="calc_values">
									<span class="calc_value">50 тыс.</span>
									<span class="calc_value mobs">5 млн</span>
									<span class="calc_value mobs">10 млн</span>
									<span class="calc_value">15 млн</span>
									<span class="calc_value">20 млн</span>
								</div>
							</div>
							<div class="calc_item">
								<div class="calc_item_wrap">
									<div class="calc_left">
										<label class="calc_label">Срок займа</label>
									</div>
									<div class="calc_right">
										<input type="text" id="amount_time-pts" class="calc_input js-input-only-numbers js-q-days-range-value-pts">
										<div class="calc_right_absolute">
											<div class="calc_textday b-calc-param__textday-pts">месяца</div>
<!-- 											<span class="calc_last_day">до <span class="js-last-payment-day"></span></span> -->
										</div>
									</div>
								</div>
								<div id="time-pts" class="calc_range"></div>
								<div class="calc_values">
									<span class="calc_value">2 мес</span>
									<span class="calc_value mobs">12 мес</span>
									<span class="calc_value">18 мес</span>
									<span class="calc_value mobs">24 мес</span>
									<span class="calc_value">36 мес</span>
								</div>
							</div>
						</div>
					</div>
					<div class="calc_bottom">
						<div class="calc_total">
							<div class="calc_bottom__title">Наше предложение</div>
							<div class="calc_total_col">
								<div class="calc_total_title h4">Ежемесячный платёж</div>
								<div class="calc_total_text"><span id="month-pts">1</span>&nbsp;руб.</div>
							</div>
							<div class="calc_total_col">
								<div class="calc_total_title h4">Процентная ставка*</div>
								<div class="calc_total_text">от <span id="total-final-pts"></span><span class="js-days-percents-pts"></span></div>
							</div>
							<div class="calc_total__txt">*процентная ставка рассчитывается индивидуально</div>
						</div>
						<div class="calc_form">
							<div class="calc_bottom__title">Оставляйте заявку на займ</div>
							<form class="feedback__form" action="/callback/" method="POST" name="">
								<input type="hidden" name="subject" value="Оставляйте заявку на займ">
								<input class="feedback__input" type="tel" placeholder="+7 (___) ___-__-__" name="tel" required="required">
								<input id="check-60" name="check" type="hidden" value="" />
								<input class="global_btn feedback__submit js_submit" type="submit" value="Получить займ" onclick="document.getElementById('check-60').value = 'stopSpam';">
								<input type="hidden" name="UTM_SOURCE" value="">
								<input type="hidden" name="UTM_MEDIUM" value="">
								<input type="hidden" name="UTM_CAMPAIGN" value="">
								<input type="hidden" name="UTM_TERM" value="">
								<input type="hidden" name="UTM_CONTENT" value="">
								<input type="hidden" name="affiliate_id">
								<input type="hidden" name="source">
								<input type="hidden" name="transaction_id">
								<div class="block_main__sending">Спасибо! Ваша заявка отправлена. <br> Мы свяжемся с вами в рабочее время</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>
	<?php $block_info = get_field( 'block_info' );?>
	<?php if ($block_info['title']): ?>
			<div class="block_info">
			  <div class="block_info__title"><?php echo $block_info['title']; ?></div>
			  <div class="block_info__blocks">
				  <div class="block_info__l-side"><?php echo $block_info['text']; ?></div>
				  <div class="block_info__r-side"><?php echo $block_info['list']; ?></div>
			  </div>
			  <div data-modal-id="4" class="block_info__link">Получить займ</div>
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
	<?php endif ?>
<?php $block_tabs = get_field( 'block_tabs' );?>
	<?php $list3 = ($block_tabs['pref']); ?>
	<?php if ($list3): ?>
		<div class="block_tabs">
			<div class="block_tabs__title"><?php echo $block_tabs['title']; ?></div>
			<div class="block_tabs__tabs" id="responsiveTabsDemo">
				<ul>
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
	<?php endif ?>
<?php $block_prefs = get_field( 'block_prefs' );?>
	<?php if ($block_prefs['title']): ?>
	  <div class="block_prefs">
		  <div class="block_prefs__title"><?php echo $block_prefs['title']; ?></div>
		  <div class="block_prefs__item">
			  <div class="block_prefs__l-side">
				  <div class="block_prefs__text"><?php echo $block_prefs['text']; ?></div>
				  <div data-modal-id="4" class="block_prefs__btn">Получить займ</div>
			  </div>
			  <div class="block_prefs__r-side"><?php echo $block_prefs['list']; ?>
				  <div class="block_prefs__info">
					  <?php echo $block_prefs['info']; ?>
				  </div>
			  </div>
			  <div data-modal-id="4" class="block_prefs__btn mob">Получить займ</div>
		  </div>
	  </div>
	<?php endif ?>
</div>
<?php $block_form = get_field( 'block_form' );?>
	<?php if ($block_form['title']): ?>
	<div class="block_tel">
		<div class="block_tel__item center_block">
			<div class="block_tel__l-side">
				<div class="block_tel__title"><?php echo $block_form['title']; ?></div>  
				<form class="feedback__form" action="/callback/" method="POST" name="">
					<input type="hidden" name="subject" value="Получить займ">
					<input class="feedback__input" type="tel" placeholder="+7 (___) ___-__-__" name="tel" required="required">
					<input id="check-50" name="check" type="hidden" value="" />
					<input class="global_btn feedback__submit js_submit" type="submit" value="Получить займ" onclick="document.getElementById('check-34').value = 'stopSpam';">
					<input type="hidden" name="UTM_SOURCE" value="">
					<input type="hidden" name="UTM_MEDIUM" value="">
					<input type="hidden" name="UTM_CAMPAIGN" value="">
					<input type="hidden" name="UTM_TERM" value="">
					<input type="hidden" name="UTM_CONTENT" value="">
					<input type="hidden" name="affiliate_id">
					<input type="hidden" name="source">
					<input type="hidden" name="transaction_id">
					<div class="block_main__sending">Спасибо! Мы получили вашу заявку. Позвоним через 3 минуты!</div>
				</form>
			</div>
			<div class="block_tel__r-side">
				<img src="<?php echo $block_form['img']; ?>" alt="">
			</div>
		</div>
	</div>
	<?php endif ?>
<?php $block_time = get_field( 'block_time' );?>
<?php if ($block_time['title']): ?>
	<div class="center_block">
		<div class="block_time">
			<div class="block_time__item">
				<div class="block_time__top">
					<div class="block_time__l-side">
						<div class="block_time__title"><?php echo $block_time['title']; ?></div>
						<div class="block_time__text"><?php echo $block_time['text']; ?></div>
						<div data-modal-id="4" class="block_time__link">Подать документы</div>
					</div>
					<div class="block_time__r-side">
						<div class="times_block">
							<div class="times_block__logo"><img src="<?php echo $block_time['img']; ?>" alt=""></div>
							<div class="times_block__text">Онлайн оформление</div>
							<div data-modal-id="4" class="times_block__button">Оформить</div>
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
<?php endif ?>
<?php $block_auto = get_field( 'block_auto' );?>
<?php if ($block_auto['title']): ?>
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
<?php endif ?>
<?php $block_partners = get_field( 'block_partners' );?>
<?php if ($block_partners['title']): ?>
	<div class="block_partners">
		<div class="block_partners__title center_block"><?php echo $block_partners['title']; ?></div>
		<div class="block_partners__items">
			<div class="center_block">
				<div class="glide part-glide-js">
					<div data-glide-el="track" class="glide__track">
						<div class="block_partners__blocks">
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
		</div>
	</div>
<?php endif ?>
<?php $block_reviews = get_field( 'block_reviews' );?>
<?php if ($block_reviews['title']): ?>
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
<?php endif ?>
<?php $block_question = get_field( 'block_question' );?>
<?php if ($block_question['title']): ?>
	<div class="center_block">
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
<?php endif ?>
<?php $block_text = get_field( 'block_text' );?>
<?php if ($block_text['title']): ?>
	<div class="center_block">
		<div class="block_text">
			<div class="block_text__title"><?php echo $block_text['title']; ?></div>
			<div class="block_text__text"><?php echo $block_text['text']; ?></div>
		</div>
	</div>
<?php endif ?>
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
<div class="modal" data-modal="4">
    <div class="modal__in">
        <div class="modal__closer"></div>
		<form class="feedback__form" action="/callback/" method="POST" name="">
			<div class="modal__title">Подать документы на оформление <span>займа</span> под <span>залог авто</span></div>
			<input type="hidden" name="subject" value="Получить займ">
			<input class="feedback__input" type="name" placeholder="Ваше имя" name="name" required="required">
			<input class="feedback__input" type="tel" placeholder="+7 (___) ___-__-__" name="tel" required="required">
			<input id="check-40" name="check" type="hidden" value="" />
			<input class="global_btn feedback__submit js_submit" type="submit" onclick="document.getElementById('check-40').value = 'stopSpam';" value="Получить займ">
			<input type="hidden" name="UTM_SOURCE" value="">
			<input type="hidden" name="UTM_MEDIUM" value="">
			<input type="hidden" name="UTM_CAMPAIGN" value="">
			<input type="hidden" name="UTM_TERM" value="">
			<input type="hidden" name="UTM_CONTENT" value="">
			<input type="hidden" name="affiliate_id">
			<input type="hidden" name="source">
			<input type="hidden" name="transaction_id">
			<div class="modal-body isSent">
				<h2><span>Спасибо</span>! Мы получили вашу заявку. Позвоним через 3 минуты!</h2>
			</div>
		</form>
    </div>
</div>
<?php
    get_footer();
?>