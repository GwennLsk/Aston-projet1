



$( document ).ready(function()
{
  $("#menu1").accordion();
  
	var $auth = $("#auth");
	var $basket = $("#basket");
	var $register = $("#register");
	var $reset_pwd = $("#reset_pwd");

	$auth.hide();
	$basket.hide();
	$register.hide();
	$reset_pwd.hide();

//	for a clickable link, Use the class clickable
    $(".a-nav, .clickable").on("click", function()
    {
    	$(".page").hide();
    	$("#" + $(this).attr("value")).show();
    });

});
