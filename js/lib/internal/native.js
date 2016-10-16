CLOSURE_NO_DEPS=true;
window.onerror = function(message, url, lineNumber){
	return true;
};

function close_menu() {
	document.getElementById("co_settings").style.display = "none", document.getElementById("co_overlay").style.display = "none"
}

function close_bar(e) {
	document.getElementById("notifications").style.display = "none", e.style.display = "none"
}

function setting_menu() {
	document.getElementById("co_settings").style.display = "block", document.getElementById("co_overlay").style.display = "block"
}

function mast_head(e) {
	"up" == e.className ? (e.className = "down", document.getElementById("banner").style.display = "block") : "down" == e.className ? (e.className = "up", document.getElementById("banner").style.display = "none") : ("down" == e.className, document.getElementById("banner").style.display = "block")
}

function htmlEntities(str){
	return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '');
}

function ShowLogin(e) {
	e.parentNode.removeChild(e), document.getElementById("g_login").style.visibility = "visible"
}

function parse_theme(e) {
	for (var t = document.getElementById("select").length, n = 0; t > n; n++) document.getElementById("select").options[n].value == e && (document.getElementById("select").selectedIndex = n, selectTheme(), ThemeCookie(e))
}

function getCookie(e) {
	var t, n, r, i = document.cookie.split(";");
	for (t = 0; t < i.length; t++)
		if (n = i[t].substr(0, i[t].indexOf("=")), r = i[t].substr(i[t].indexOf("=") + 1), n = n.replace(/^\s|\s+$/g, ""), n == e) return unescape(r)
}

function ThemeCookie(e) {
	var t = getCookie("codeTheme");
	document.cookie = null != t && "" != t ? "codeTheme =" + e + ";path=/" : "codeTheme =" + e + ";path=/"
}

function eraseCookie(name){
	document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function str_obf(e) {
	var t = "";
	for (var n = 0; n < e.length; n++) {
		var r = e.charCodeAt(n).toString(16);
		if (r.length == 1) {
			r = "0" + r
		}
		t += "" + r
	}
	return t
}

function notifications() {
	var e = document.getElementById("notifications");
	var o = document.getElementById("notification_overlay");
	var iframe = $("#notification_iframe");
	iframe.attr("src", iframe.data("src"));
	if(e.style.display == 'block'){
		e.style.display = 'none';
		o.style.display = 'none';
	}else{
		e.style.display = 'block';
		o.style.display = 'block';
	}return true;
}

function toggle_im(){
	if($('#im').css('bottom') == '0px'){
			$('#im').animate({
				bottom: "-265px"
			}, 500);
	}else{
			$('#im').animate({
				bottom: "0px"
			}, 500);
	}
}

function toggle_im_friends_list(){
	if($('#im_list').css('bottom') == '0px'){
			$('#im_list').animate({
				bottom: "-265px"
			}, 500);
	}else{
			$('#im_list').animate({
				bottom: "0px"
			}, 500);
	}
}

function remove_im_friends_list(){
	$.removeCookie('im_list', { path: '/' });
	$("#im_list").slideToggle( "slow", function() {$(this).remove();});
}

function remove_im(){
	$.removeCookie('im', { path: '/' });
	$("#im").slideToggle( "slow", function() {$(this).remove();});
}

function createAlert(type,message){
	Messenger().post({
		message: message,
		type: type,
		hideAfter: 10,
		hideOnNavigate: true
	});
}

function pointsNeeded(action){
	$.ajax({
		type: 'GET',
		url: 'http://techberry.org/ajax/actions.php',
		data: { 'action' : encodeURI(action) },
		dataType: 'json',
		success: function(data){
			createAlert('error','Requires '+data+'points');
			// cache the result
			$(this).attr("onclick","createAlert('warning','Requires "+data+" points')");
	},
	error: function(){
		createAlert('error','Requires NaN points');
		}
	});
	return false;
}

function avatarLoadError(el){
	$(el).src="//techberry.org/images/default.jpg";
	$(el).setAttribute('data-ot',"Users avatar failed to load");
}

function setNewsCommentParent(id){
	$("#parent_id").val(id);
	$('html, body').animate({
		scrollTop: $("#news_comment").offset().top - $('#g_h').height()
	},{
		complete : function(){
			$("#comment_textarea").animate({height:100},200);
			$.get('http://techberry.org/news/get.newsComment.php', { id: id }, function( data ) {
				$("#comment_textarea").html("[quote]"+data+"...[/quote]");
			});
		},
		duration : 2000
	}); 
}

function follow(username,token,id){
	$.ajax({
		type: 'POST',
		url: 'http://techberry.org/process.follow.php',
		data: "username="+username + "&token=" + token,
		success: function(result){
			var obj = $.parseJSON(result);
			if(obj['type']=="success"){
				createAlert('success',obj['message']);
				$('#' + id).html("UnFollow");
				$('#' + id).attr("onclick","unfollow('"+username+"','"+token+"','"+id+"')");
			}else{
				createAlert('error',obj['message']);
			}
	},
	error: function(){
		createAlert('error','Unable to follow this user');
		}
	});
	return false;
}

function unfollow(username,token,id){
	$.ajax({
		type: 'POST',
		url: 'http://techberry.org/process.follow.php',
		data: "username="+username + "&token=" + token + "&iuf=" + 1,
		success: function(result){
			var obj = $.parseJSON(result);
			if(obj['type']=="success"){
				createAlert('success',obj['message']);
				$('#' + id).html("Follow");
				$('#' + id).attr("onclick","follow('"+username+"','"+token+"','"+id+"')");
			}else{
				createAlert('error',obj['message']);
			}
	},
	error: function(){
		createAlert('error','Unable to unfollow this user');
		}
	});
	return false;
}

function removeAnnouncement(id){
	$('#announcement_'+id).hide('slow', function() {
		$('#announcement_'+id).remove();
		$('#paddedBody').css('padding-top','20px');
	});
	if($.cookie('removeAnnouncement') === null) { 
		$.cookie('removeAnnouncement', id, {expires:7, path:'/'});
	}else{
		document.cookie = 'removeAnnouncement='+id;
	}
}