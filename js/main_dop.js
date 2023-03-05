$(document).ready(function(){
  $('#responsiveTabsDemo').responsiveTabs({
      startCollapsed: 'accordion'
  });
  if ( window.matchMedia('(max-width : 1023px)').matches ) {
    $(".block_auto__block").slice(0, 3).show();
    $(".block_auto__more").on("click", function(e){
      e.preventDefault();
      $(".block_auto__block:hidden").slice(0, 3).slideDown();
      if($(".block_auto__block:hidden").length == 0) {
        $(".block_auto__more").text("Больше займов нет").addClass("noContent");
      }
    });
  };
  $('.block_question__tit').on('click', function() {
    if($(this).parent().hasClass('isActive')) {
    	$(this).parent().find('.block_question__txt').hide('400');
    } else {
    	$(this).parent().find('.block_question__txt').show('400');
    }
  	$(this).parent().toggleClass('isActive');
  });
  $('.block_map__fake').on('click', function() {
  	$(this).toggleClass('isActive');
    $('.block_map__more').toggleClass('isActive');
  })
  $(document).click( function(event){
    if( $(event.target).closest('.block_map__fake').length ) 
      return;
    $('.block_map__more').removeClass('isActive');
    $('.block_map__fake').removeClass('isActive');
  });
  $('#msk').on('click', function() {
  	$('.block_map__fake').text('Москва');
    $(this).addClass('isActive');
    $('#spb').removeClass('isActive');
    $('#moscow_map').show();
    $('#saint_map').hide();
  })
  $('#spb').on('click', function() {
  	$('.block_map__fake').text('Санкт-Петербург');
    $(this).addClass('isActive');
    $('#msk').removeClass('isActive');
    $('#moscow_map').hide();
    $('#saint_map').show();
  })
})