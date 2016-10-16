function uploadChannelArt(){
	exitUploadChannelArt();
	$.ajax({
		type: "POST",
		url: "http://techberry.org/frames/upload.channelArt.php",
		success: function(d){
			$(document.body).append('<div id="upload-channel-art" class="ajax-frame">'+d+'</div>');
			$("#upload-channel-art").draggable({ handle: "#upload-channel-art-handle" });
		},
		error: function(){
			Messenger().post({
				message: "Unable to load channel art upload form",
				type: 'error',
				hideAfter: 10,
				hideOnNavigate: true
			});
			$("#upload-channel-art").remove();
		}
	});
}

function exitUploadChannelArt(){
	$("#upload-channel-art").remove();
}
function uploadProfilePicture(){
	exitUploadProfilePicture();
	$.ajax({
		type: "POST",
		url: "http://techberry.org/frames/upload.profilePicture.php",
		success: function(d){
			$(document.body).append('<div id="upload-profile-picture" class="ajax-frame">'+d+'</div>');
			$("#upload-profile-picture").draggable({ handle: "#upload-profile-picture-handle" });
		},
		error: function(){
			Messenger().post({
				message: "Unable to load profile picture upload form",
				type: 'error',
				hideAfter: 10,
				hideOnNavigate: true
			});
			$("#upload-profile-picture").remove();
		}
	});
}

function exitUploadProfilePicture(){
	$("#upload-profile-picture").remove();
}
function linkAccounts(){
	exitUploadProfilePicture();
	$.ajax({
		type: "POST",
		url: "http://techberry.org/frames/link.accounts.php",
		success: function(d){
			$(document.body).append('<div id="link-accounts" class="ajax-frame">'+d+'</div>');
			$("#link-accounts").draggable({ handle: "#link-accounts-handle" });
		},
		error: function(){
			Messenger().post({
				message: "Unable to load account link form",
				type: 'error',
				hideAfter: 10,
				hideOnNavigate: true
			});
			$("#link-accounts").remove();
		}
	});
}

function exitLinkAccounts(){
	$("#link-accounts").remove();
}