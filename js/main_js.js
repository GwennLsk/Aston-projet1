



$( document ).ready(function()
{
  $("#menu1").accordion();
  
	var $register = $("#register");
	var $auth = $("#auth");

	$register.hide();
	$auth.hide();

    $(".a-nav").on("click", function()
    {
    	$(".page").hide();
    	$("#" + $(this).attr("value")).show();
    });
});
