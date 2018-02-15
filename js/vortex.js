$(".plus-close").click(function() {
  $(this).toggleClass("open");
});


var instagramGrabber = function () {
	var name = "solmarkcreative"; //Change this name to the user you want to display.
	var max = 4; // The # of images to display. Min = 2, Max = 6
	var count = 0;
	$.get("https://www.instagram.com/" + name + "/?__a=1", function (data, status) {
		//console.log('IG_NODES', data.user.media.nodes);
		$.each(data.user.media.nodes, function (n, item) {
			//console.log('ITEMS', item.display_src);
			if (count < max) {
				$('.instagram-items').append(                  
					"<div class='col-sm-3'><img class='img-responsive' src='"+ item.display_src +"'></div>"
				);
			}                
			count++;
		});
	});
};

instagramGrabber();
	           

