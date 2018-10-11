$( document ).ready(function() 
{
	var $register = $("#register");
	var $auth = $("#auth");
	var $reset_pwd = $("#reset_pwd");

	$register.hide();
	$auth.hide();
	$reset_pwd.hide();

    $(".a-nav").on("click", function()
    {
    	$(".page").hide();
    	$("#" + $(this).attr("value")).show();
    });
});