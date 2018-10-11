$( document ).ready(function() 
{
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