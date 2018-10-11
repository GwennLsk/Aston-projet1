



$( document ).ready(function()
{
  $("#menu1").accordion();
  
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

});
