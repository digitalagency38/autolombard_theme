<?php 
/**
*	Template name: Главная страница
*/
 ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autolombard_theme
 */

get_header();
?>
<div class="center_block">
	<?php $block_main = get_field( 'block_main' );?>	
	<?php if ($block_main['title']): ?>
	<div class="block_main">
		<div class="block_main__l-side">
			<h1 class="block_main__h1"><?php echo $block_main['title']; ?><a href="#map_block" class="block_h1_span"><?php echo $block_main['span']; ?></a></h1>
			<div class="block_main__blocks">
				<?php $pref = ($block_main['pref']); ?>
				<?php if (is_array($pref)) {
					foreach ($pref as $e) { ?>
						<div class="block_main__block"><?php echo $e['title']; ?></div>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="block_main__form">
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
					<div class="block_main__sending">Спасибо! Мы получили вашу заявку. Позвоним через 3 минуты!</div>
				</form>
			</div>
		</div>
		<div class="block_main__r-side">
			<img src="<?php echo $block_main['img']; ?>" alt="">
		</div>
	</div>
	<?php endif ?>
	<div class="block_calc">
		<div class="block_calc__item">
			<div class="block_calc__title"></div>
			<div class="block_calc__block">
				<div class="calc__wrap calc_pts">
					<div class="calc_borrow_step_1">
						<div class="title_calc">Рассчитайте ежемесячный платёж</div>
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
								<div class="block_main__sending">Спасибо! Мы получили вашу заявку. Позвоним через 3 минуты!</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $block_steps = get_field( 'block_steps' );?>	
	<?php if ($block_steps['title']): ?>
	<div class="block_steps">
		<div class="block_steps__title"><?php echo $block_steps['title']; ?></div>
		<div class="glide step-glide-js">
			<div data-glide-el="track" class="glide__track">
				<div class="block_steps__blocks">
					<div class="block_steps__block">
						<div class="block_steps__icon">
							<img src="<?php echo $block_steps['icon']; ?>" alt="">
						</div>
						<div class="block_steps__tit"><?php echo $block_steps['tit']; ?></div>
						<div class="block_steps__subtitle"><?php echo $block_steps['subtitle']; ?></div>
						<a href="tel:<?php echo $block_steps['tel']; ?>" class="block_steps__tel"><?php echo $block_steps['tel']; ?></a>
						<div data-modal-id="1" class="block_steps__link">Оставить заявку</div>
					</div>
					<?php $list = ($block_steps['pref']); ?>
					<?php if (is_array($list)) {
						foreach ($list as $e) { ?>
							<div class="block_steps__block">
								<div class="block_steps__icon">
									<img src="<?php echo $e['icon']; ?>" alt="">
								</div>
								<div class="block_steps__tit"><?php echo $e['title']; ?></div>
								<div class="block_steps__subtitle"><?php echo $e['text']; ?></div>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
			<div class="glide__bullets" data-glide-el="controls[nav]">
				<button class="glide__bullet" data-glide-dir="=0">0</button>
				<?php if (is_array($list)) {
					foreach ($list as $key => $e) { ?>
						<button class="glide__bullet" data-glide-dir="=<?php echo $key+1; ?>"><?php echo $key+1; ?></button>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php endif ?>
</div>  
<?php $block_services = get_field( 'block_services' );?>
<?php if ($block_services['title']): ?>
<div class="block_services">
    <div class="block_services__item center_block">
        <div class="block_services__title"><?php echo $block_services['title']; ?></div>
        <div class="block_services__blocks">
			<?php $list2 = ($block_services['pref']); ?>
			<?php if (is_array($list2)) {
				foreach ($list2 as $e) { ?>
					<a href="<?php echo $e['link']; ?>" class="block_services__block">
						<div class="block_services__tit"><?php echo $e['title']; ?></div>
						<div class="block_services__img">
							<img src="<?php echo $e['img']; ?>" alt="">
						</div>
					</a>
				<?php } ?>
			<?php } ?>
            <div class="block_services__form">
                <div class="block_services__l-side">
                    <div class="block_services__question"><?php echo $block_services['tit']; ?></div>
                    <div class="block_services__subtitle"><?php echo $block_services['subtit']; ?></div>
                    <div class="block_services__info">
                        <div class="block_services__soc">
                            <a href="<?php echo $block_services['link']; ?>" target="_blank">
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
                            <a href="<?php echo $block_services['link2']; ?>" target="_blank">
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
                        <div class="block_services__btn">
                            <div data-modal-id="1">Позвонить нам</div>
                        </div>
                    </div>
                </div>
                <div class="block_services__r-side">
                    <form class="feedback__form" action="/callback/" method="POST" name="">
						<input type="hidden" name="subject" value="Получить займ">
						<input class="feedback__input" type="tel" placeholder="+7 (___) ___-__-__" name="tel" required="required">
						<input id="check-35" name="check" type="hidden" value="" />
                        <input class="global_btn feedback__submit js_submit" type="submit" value="Получить займ" onclick="document.getElementById('check-35').value = 'stopSpam';">
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
            </div>
        </div>
    </div>
</div>
<?php endif ?>
<div class="center_block">
<?php $block_tabs = get_field( 'block_tabs' );?>
	<?php if ($block_tabs['title']): ?>
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
<?php endif ?>
<?php $block_time = get_field( 'block_time' );?>
	<?php if ($block_time['title']): ?>
		<div class="block_time">
			<div class="block_time__item">
				<div class="block_time__top">
					<div class="block_time__l-side">
						<div class="block_time__title"><?php echo $block_time['title']; ?></div>
						<div class="block_time__text"><?php echo $block_time['text']; ?></div>
						<div data-modal-id="1" class="block_time__link">Подать документы</div>
					</div>
					<div class="block_time__r-side">
						<div class="times_block">
							<div class="times_block__logo"><img src="<?php echo $block_time['img']; ?>" alt=""></div>
							<div class="times_block__text">Онлайн оформление</div>
							<div data-modal-id="1" class="times_block__button">Оформить</div>
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
	<?php endif ?>
</div>
<?php $block_prev = get_field( 'block_prev' );?>
<?php if ($block_prev['title']): ?>
	<div class="block_prev">
		<div class="block_prev__item center_block">
			<div class="block_prev__title"><?php echo $block_prev['title']; ?></div>
			<div class="block_prev__blocks ps_block">
				<?php $list5 = ($block_prev['pref']); ?>
				<?php if (is_array($list5)) {
					foreach ($list5 as $e) { ?>
						<div class="block_prev__block">
							<div class="block_prev__icon">
								<img src="<?php echo $e['icon']; ?>" alt="">
							</div>
							<div class="block_prev__tit"><?php echo $e['title']; ?></div>
							<div class="block_prev__text"><?php echo $e['text']; ?></div>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="glide dist-glide-js mobs_block">
				<div data-glide-el="track" class="glide__track">
					<div class="block_prev__blocks">
						<?php if (is_array($list5)) {
							foreach ($list5 as $e) { ?>
								<div class="block_prev__block">
									<div class="block_prev__icon">
										<img src="<?php echo $e['icon']; ?>" alt="">
									</div>
									<div class="block_prev__tit"><?php echo $e['title']; ?></div>
									<div class="block_prev__text"><?php echo $e['text']; ?></div>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="glide__bullets" data-glide-el="controls[nav]">
					<?php if (is_array($list5)) {
						foreach ($list5 as $key => $e) { ?>
							<button class="glide__bullet" data-glide-dir="=<?php echo $key; ?>"><?php echo $key; ?></button>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>
<?php $block_form = get_field( 'block_form' );?>
<?php if ($block_form['title']): ?>
<div class="block_form center_block">
    <div class="block_form__l-side">
        <div class="block_form__title"><?php echo $block_form['title']; ?></div>        
		<form class="feedback__form" action="/callback/" method="POST" name="">
			<input type="hidden" name="subject" value="Получить займ">
			<input class="feedback__input" type="tel" placeholder="+7 (___) ___-__-__" name="tel" required="required">
			<input id="check-351" name="check" type="hidden" value="" />
			<input class="global_btn feedback__submit js_submit" type="submit" value="Получить займ" onclick="document.getElementById('check-351').value = 'stopSpam';">
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
    <div class="block_form__r-side">
        <img src="<?php echo $block_form['img']; ?>" alt="">
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
<div class="block_stat">
	<div class="block_stat__in center_block">
	<?php
		$post_type = 'post';
		$count = 3; // Количество последних статей, которые вы хотите отобразить
		$sale_list = get_posts([
			'post_type' => $post_type,
			'numberposts' => $count,
		]);
	?>
		<div class="block_stat__top">
			<div class="block_stat__title">Полезные статьи</div>
			<a href="/poleznye-stati" class="block_stat__btn">Все статьи</a>
		</div>
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
		<a href="/poleznye-stati" class="block_stat__btn mob">Все статьи</a>
	</div>
</div>
<div class="center_block">
<?php $block_question = get_field( 'block_question' );?>
	<?php if ($block_question['title']): ?>
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
<?php endif ?>
</div>
<div class="block_map" id="map_block">
    <div class="block_map__items center_block">
        <div class="block_map__title">Наши офисы</div>
        <div class="block_map__item">
            <div class="block_map__l-side">
				<div class="block_map__buttons">
					<div class="block_map__fake">Москва</div>
            		<div class="block_map__more">
						<?php if (is_array($block_map)) {?>
							<div id="msk" class="block_map__button isActive">Москва</div>
						<?php } ?>
						<?php if (is_array($block_map2)) {?>
							<div id="spb" class="block_map__button">Санкт-Петербург</div>
						<?php } ?>
					</div>
				</div>
            </div>
            <div class="block_map__r-side">
				<div id="map"></div>
            </div>
        </div>
    </div>
</div>
<div class="center_block">
<?php $block_text = get_field( 'block_text' );?>
	<?php if ($block_text['title']): ?>
	<div class="block_text">
		<div class="block_text__title"><?php echo $block_text['title']; ?></div>
		<div class="block_text__text"><?php echo $block_text['text']; ?></div>
	</div>
<?php endif ?>
</div>
<div class="modal" data-modal="1">
    <div class="modal__in">
        <div class="modal__closer"></div>
		<form class="feedback__form" action="/callback/" method="POST" name="">
			<div class="modal__title">Подать документы на оформление <span>займа</span> под <span>залог авто</span></div>
			<input type="hidden" name="subject" value="Получить займ">
			<input class="feedback__input" type="name" placeholder="Ваше имя" name="name" required="required">
			<input class="feedback__input" type="tel" placeholder="+7 (___) ___-__-__" name="tel" required="required">
			<input id="check-36" name="check" type="hidden" value="" />
			<input class="global_btn feedback__submit js_submit" type="submit" onclick="document.getElementById('check-36').value = 'stopSpam';" value="Получить займ">
			<input type="hidden" name="UTM_SOURCE" value="">
			<input type="hidden" name="UTM_MEDIUM" value="">
			<input type="hidden" name="UTM_CAMPAIGN" value="">
			<input type="hidden" name="UTM_TERM" value="">
			<input type="hidden" name="UTM_CONTENT" value="">
			<input type="hidden" name="affiliate_id">
			<input type="hidden" name="source">
			<input type="hidden" name="transaction_id">
			<div class="modal-body isSent">
				<h2><span>Спасибо</span>, мы получили вашу заявку. Позвоним через 3 минуты!</h2>
			</div>
		</form>
    </div>
</div>
<?php
get_footer();
