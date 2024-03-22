jQuery(function($) {

	$(".admin_gnb li .btn_op").click(function() {
		$(this).parent().addClass("active").siblings().removeClass("active");
	});

	$(".sort_btn").click(function() {
		$(this).parent().toggleClass("active").siblings().removeClass("active");
	});

   $(".mobile_top_bars").click(function(e) {
	e.preventDefault();
	$(".admin_gnb").slideToggle();  

	});

});

function check_all(f)
{
    var chk = document.getElementsByName("chk[]");

    for (i=0; i<chk.length; i++)
        chk[i].checked = f.chkall.checked;
}

function is_checked(elements_name)
{
    var checked = false;
    var chk = document.getElementsByName(elements_name);
    for (var i=0; i<chk.length; i++) {
        if (chk[i].checked) {
            checked = true;
        }
    }
    return checked;
}
