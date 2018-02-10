var instagramGrabber = function () {
	var name = "solmarkcreative";
	var max = 4;
	var count = 0;
	$.get("https://www.instagram.com/" + name + "/?__a=1", function (data, status) {
		//console.log('IG_NODES', data.user.media.nodes);
		$.each(data.user.media.nodes, function (n, item) {
			//console.log('ITEMS', item.display_src);
			if (count < max) {
				$('.instagram-items').append(             
					"<div class='col-sm-3'><img src='"+ item.display_src +"' class='img-responsive'></div>"
				);
			}                
			count++;
		});
	});
};

instagramGrabber();