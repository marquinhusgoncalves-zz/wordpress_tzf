// Essa função troca o texto do menu para ícones
$(document).ready(
	function() {
		$('.menu-item-44 a').html('<i class="fa fa-linkedin"></i>');
		$('.menu-item-45 a').html('<i class="fa fa-facebook"></i>');
	});
// Essa função troca o ícone do menu resposnsivo quando aberto
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
// Essa função abre páginas em Ajax na página Equipamento
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
// Essa função troca cores de alguns elementos dependendo da página
$(document).ready(function() {
	var elem = document.getElementById("desenvolvimento");
	if (elem !== null && elem !== undefined) {    
    var elem2 = document.getElementsByClassName("rodape");
    var elem3 = document.getElementsByClassName("footer-mail");
    var elem4 = document.getElementsByClassName("btn-default-newsletter");
	    if (elem2 !== null && elem2 !== undefined && elem2.length > 0) {
	        elem2[0].style.background = "#8dba42";
	        elem3[0].style.color = "#8dba42";
	        elem4[0].style.background = "#8dba42";
	        elem4[0].style.borderColor = "#8dba42";
	    }
	}
});

// Essa função troca cores de alguns elementos dependendo da página
$(document).ready(function() {
	var elem = document.getElementById("qualidade");
	if (elem !== null && elem !== undefined) {    
    var elem2 = document.getElementsByClassName("rodape");
    var elem3 = document.getElementsByClassName("footer-mail");
    var elem4 = document.getElementsByClassName("btn-default-newsletter");
	    if (elem2 !== null && elem2 !== undefined && elem2.length > 0) {
	        elem2[0].style.background = "#f65097";
	        elem3[0].style.color = "#f65097";
	        elem4[0].style.background = "#f65097";
	        elem4[0].style.borderColor = "#f65097";
	    }
	}
});

// Essa função troca cores de alguns elementos dependendo da página
$(document).ready(function() {
	var elem = document.getElementById("equipamentos");
	if (elem !== null && elem !== undefined) {    
    var elem2 = document.getElementsByClassName("rodape");
    var elem3 = document.getElementsByClassName("footer-mail");
    var elem4 = document.getElementsByClassName("btn-default-newsletter");
	    if (elem2 !== null && elem2 !== undefined && elem2.length > 0) {
	        elem2[0].style.background = "#ff9200";
	        elem3[0].style.color = "#ff9200";
	        elem4[0].style.background = "#ff9200";
	        elem4[0].style.borderColor = "#ff9200";
	    }
	}
});
