window.onload=function(){if(window.jQuery){$(document).ready(function(){$(".sidebarNavigation .navbar-collapse").hide().clone().appendTo("body").removeAttr("class").addClass("sideMenu").show();$("body").append("<div class='overlay'></div>");$(".navbar-toggle, .navbar-toggler").on("click",function(){$(".sideMenu").addClass($(".sidebarNavigation").attr("data-sidebarClass"));$(".sideMenu, .overlay").toggleClass("open");$(".overlay").on("click",function(){$(this).removeClass("open");$(".sideMenu").removeClass("open")})});$("body").on("click",".sideMenu.open .nav-item",function(){if(!$(this).hasClass("dropdown")){$(".sideMenu, .overlay").toggleClass("open")}});$(window).resize(function(){if($(".navbar-toggler").is(":hidden")){$(".sideMenu, .overlay").hide()}else{$(".sideMenu, .overlay").show()}})})}else{console.log("sidebarNavigation Requires jQuery")}}

/*mega menu*/
$(document).ready(function(){

	/*data bg*/
	$('[data-bg-color]').each(function(i,obj){
		$(this).css('background-color',$(this).data('bg-color'));
	});
	/*data bg*/

	/*data bg*/
	$('[data-bg-img]').each(function(i,obj){
		$(this).css('background-image','url("'+$(this).data('bg-img')+'")');
	});
	/*data bg*/

	/*border bg*/
	$('[data-border-bt]').each(function(i,obj){
		$(this).css('border-bottom',$(this).data('border-bt'));
	});

	$('[data-border-top]').each(function(i,obj){
		$(this).css('border-top',$(this).data('border-top'));
	});

	$('[data-border]').each(function(i,obj){
		$(this).css('border',$(this).data('border'));
	});
	/*border bg*/

	$('[data-let-spac]').each(function(i,obj){
		$(this).css('letter-spacing',$(this).data('let-spac'));
	});
	
	$('[data-box-shadow]').each(function(i,obj){
		$(this).css('box-shadow',$(this).data('let-spac'));
		$(this).css('-webkit-box-shadow',$(this).data('box-shadow'));
	});

	$('[data-opacity]').each(function(i,obj){
		$(this).css('opacity',$(this).data('opacity'));
	});

	

});
/*mega menu*/

/*accordion toggle*/
function toggleIcon(e) {
    $(e.target)
        .prev('.card-header')
        .find(".more-less")
        .find('i')
        .toggleClass('las la-angle-up las la-angle-down');
}
$('.sidebar').find('#accordion').on('hidden.bs.collapse', toggleIcon);
$('.sidebar').find('#accordion').on('shown.bs.collapse', toggleIcon);
/*accordion toggle*/