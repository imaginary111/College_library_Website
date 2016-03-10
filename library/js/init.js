(function($){
  $(function(){
	$('.dropdown-content li a').hover(function() {
			$(this).removeClass('white-text').addClass('blue-text-lib white');
		},function() {
			$(this).removeClass('blue-text-lib white').addClass('white-text');
	});
	$('.slider').slider({height:280});
  $('.modal-trigger').leanModal();
	// we are using hasClass to check if a class brown-text is present or not
    $('.modal-trigger').leanModal();
    /*$('.collapsible-header').on('click',function() {
      if($(this).hasClass('grey-text text-darken-3')){
        $(this).removeClass('grey-text text-darken-3').addClass('white-text');
      }else{
        $(this).removeClass('white-text').addClass('grey-text text-darken-3');
      }
    });*/
  }); // end of document ready
})(jQuery); // end of jQuery name space