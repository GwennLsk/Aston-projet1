



$( document ).ready(function()
{
  
	var $register = $("#register");
	var $auth = $("#auth");
	var $reset_pwd = $("#reset_pwd");

	$register.hide();
	$auth.hide();
	$reset_pwd.hide();

//	for a clickable link, Use the class clickable
    $(".a-nav, .clickable").on("click", function()
    {
    	$(".page").hide();
    	$("#" + $(this).attr("value")).show();
	});


	function CurrentMenu() 
	{ 
		let currentTime = new Date();
		let currentDay = currentTime.getDay();

		if( currentDay == 1 || currentDay == 6 || currentDay == 0 ){
			$('#lundi').show().addClass('today');
			$('#nav-lundi').addClass('active');
		}
		if( currentDay == 2){
			$('#lundi').addClass('past');
			$('#mardi').show().addClass('today');
			$('#nav-mardi').addClass('active');
		}
		if( currentDay == 3){
			$('#lundi').addClass('past');
			$('#mardi').addClass('past');
			$('#mercredi').show().addClass('today');
			$('#nav-mercredi').addClass('active');
		}
		if( currentDay == 4){
			$('#lundi').addClass('past');
			$('#mardi').addClass('past');
			$('#mercredi').addClass('past');
			$('#jeudi').show().addClass('today');
			$('#nav-jeudi').addClass('active');
		}
		if( currentDay == 5){
			$('#lundi').addClass('past');
			$('#mardi').addClass('past');
			$('#mercredi').addClass('past');
			$('#jeudi').addClass('past');
			$('#vendredi').show().addClass('today');
			$('#nav-vendredi').addClass('active');
		}

	};
	CurrentMenu();
	


	$(".nav-day").click(function(){
		$('.nav-day').removeClass('active');
		$('.day').hide();
		$(this).addClass('active');
		if($(this).attr('id') == 'nav-lundi')
		{
			console.log("lundi");
			$('#lundi').show();
		}
		else if($(this).attr('id') == 'nav-mardi')
		{
			console.log("mardi");
			$('#mardi').show();
		}
		else if($(this).attr('id') == 'nav-mercredi')
		{
			console.log("mercredi");
			$('#mercredi').show();
		}
		else if($(this).attr('id') == 'nav-jeudi')
		{
			console.log("jeudi");
			$('#jeudi').show();
		}
		else if($(this).attr('id') == 'nav-vendredi')
		{
			console.log("vendredi");
			$('#vendredi').show();
		}
	});
});
