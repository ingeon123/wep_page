$(document).ready(function() {
    $(".hidden_menu1").hide();

    $(".loc_menu_show").click(function(e) {
        e.preventDefault();

        $(".hidden_menu1").not($(this).closest('li').find('.hidden_menu1')).hide();
     
        $(this).closest('li').find('.hidden_menu1').toggle();

		$(this).closest('.menu_container').mouseleave(function(e) {
			$(this).closest('li').find('.hidden_menu1').hide();

			$(this).unbind(e);
		});
    });
});