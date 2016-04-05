$(document).ready(
	function() {
		$('.menu-item-44 a').html('<i class="fa fa-linkedin"></i>');
		$('.menu-item-45 a').html('<i class="fa fa-facebook"></i>');
		$(".screen-reader-text").hide();
		$('.widget_recent_entries h4 i').addClass('fa fa-comment');
		$('.widget_categories h4 i').addClass('fa fa-asterisk');
		$('.widget_archive h4 i').addClass('fa fa-folder-open');
	}
);

$(document).ready(
	function() {
	$(".toggle i").click(function() {
		 var $this = $(this);
		 if ($this.hasClass("fa-bars")) {
				$this.removeClass("fa-bars").addClass("fa-times");
				$("#logo").css('position', 'fixed');
				return;
		 }
		 if ($this.hasClass("fa-times")) {
				$this.removeClass("fa-times").addClass("fa-bars");
				$("#logo").css('position', 'absolute');
				return;
			 }
		});
});

$(document).ready(function() {
    $("#menu-second li a").click(function() {
 
        $("#ajax-content").empty().append("<div id='loading'><img src='../wp-content/themes/tzf-theme/img/loading.gif' alt='Loading' /></div>");
        $("#menu-second li a").removeClass('current');
        $(this).addClass('current');
 
        $.ajax({ url: this.href, success: function(html) {
            $("#ajax-content").empty().append(html);
            }
    });
    return false;
    });
});