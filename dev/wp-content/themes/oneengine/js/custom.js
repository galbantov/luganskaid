$(function() {

/*
var scrollHeight = document.getElementById("paypal_frame").scrollHeight;
var clientHeight = document.getElementById("paypal_frame").clientHeight;
scrollHeight = Math.max(scrollHeight, clientHeight);
alert('Высота с учетом прокрутки: ' + scrollHeight);
*/

/*
    var iFrameIdOnParentSelector = "#paypal_frame";
    var iFrameContentSelector = "#accordion";
    function fireiFrameResize(iFrameIdOnParentSelector, iFrameContentSelector) {
     var frame = $(iFrameIdOnParentSelector, window.parent.document);
     var height = $(iFrameContentSelector).height();
     var width = $(iFrameContentSelector).width();
     frame.height(height);
     frame.width(width);
	 document.getElementById('#paypal_frame').contentDocument.location.reload(true);
	 
    }
			activate: function (event, ui) {
			fireiFrameResize(iFrameIdOnParentSelector, iFrameContentSelector);
		}
		
		
var height = parseInt("500")+parseInt(window.innerHeight)
document.getElementById("paypal_frame").style.height=height+"px";
		
*/


    $( "#accordion" ).accordion({
		heightStyle: "content",
		collapsible: true,
		active: false
	});

});


