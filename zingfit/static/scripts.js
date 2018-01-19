var $on = function(el,type,fnc){
	YAHOO.util.Event.addListener(el, type, fnc);
}
var get = function(id){
	return YAHOO.util.Dom.get(id);
}
function confirmThis(msg, url){
	if (confirm(msg)){
		window.location = url
	}
}
function popup(url, name, width, height, opts, doreturn){
	if(!width) width = 800;
	if(!height) height= 700;
	var params = 'width=' + width + ',height=' + height;
	if(opts){
		params += ',' + opts;
	}else{
		params += ',toolbar=no,location=yes,directories=yes,menubar=yes,scrollbars=yes,resizable=yes';
	}
	if(!name) name='newwin';
	var win = window.open(url,name,params);
	win.focus();
	if(doreturn)
		return win;
}
