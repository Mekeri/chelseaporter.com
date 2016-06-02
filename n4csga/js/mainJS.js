// JavaScript Document

$(document).ready(function(){

	

	$( "#accordion" ).accordion({
		  heightStyle: "content",
		  collapsible: true,
		  active: false
	});/*end accordionUI */
	
	$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
		padding: 5,
		preload: '14',
		transitionIn: 'elastic',
   		transitionOut: 'elastic',
        beforeLoad: function() {
            this.title = $(this.element).attr('caption');
        }
    });

});/*end ready()*/