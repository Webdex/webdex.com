$(document).ready(function() {
/*	
	function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
        // Alternatively you could use:
        // (new Image()).src = this;
    });
}

// Usage:

preload([
    'img/imageName.jpg',
    'img/anotherOne.jpg',
    'img/blahblahblah.jpg'
]);
*/

$('#maincontent').css({
'background-image':'url(lib/img/webdex_logo_pale.png)',
'background-repeat':'no-repeat',
'background-attachment':'fixed'
});
	
  $('a[href=#webdexhome]').click(function(e) {
    $.scrollTo(0,1500);
    e.preventDefault();
  });
  
  $('a[href=#aboutanchor]').click(function(e) {
    $.scrollTo('#aboutanchor',1500);
    e.preventDefault();
  });
  
  $('a[href=#portfolioanchor]').click(function(e) {
    $.scrollTo('#portfolioanchor',1500);
    e.preventDefault();
  });
  
  $('a[href=#contactanchor]').click(function(e) {
    $.scrollTo('#contactanchor',1500);
    e.preventDefault();
  });
    
	$('a.lightbox').fancybox({
			'hideOnContentClick': false,
			'showNavArrows' :false
	});  
  $(window).scroll(function(){
  // get the height
  var h = $('html').height();
  var y = $(window).scrollTop();
  if( y > (h*.143)){
$('#maincontent').css({
'background-attachment': 'scroll',
'background-position':'center 150px'
});
  } else {
$('#maincontent').css({
'background-attachment': 'fixed',
'background-position':'center 298px'
});
  }
 });
 
 	$('.img').click(function() {
    var source = $(this).attr('src');
	$('.mainpicture').attr('alt', 'source')     
    // write your code here 
	});
	
	
	
	
			  $('#submit').click(function(e){
				var isFormValid = true;
$("#contactform input").each(function(){
        if ($.trim($(this).val()).length == 0){
			$(this).addClass("validate");
			isFormValid = false;
        }
		else
    {	
	 $(this).removeClass("validate");
	}
});	
	
				
				if (isFormValid) {
					e.preventDefault();
					
						$(this).toggle('slow');
						$('#submitconfirm').toggle('slow');
						jQuery.ajax({
							url: "../lib/inc/sendmail.php",
							type: "POST",
							data: {
								"name": jQuery('#name').attr('value'),
								"email": jQuery('#email').attr('value'),
								"subject": jQuery('#subject').attr('value'),
								"message": jQuery('#message').attr('value'),
								"submit": jQuery('#submit').attr('value')
							}//closes data input
						})//closes ajax
				}
				return isFormValid;
					});//closes all
});