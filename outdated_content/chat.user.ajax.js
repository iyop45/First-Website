(function userPoll(){
	var i = 1;
	if(i==1){
		var onlineKnownUsersIDs = '.json_encode($userIDs).';
	}
	i++;
	var page = \''.base64_encode("/chat/index.php").'\';
	$.ajax({ url: "http://techberry.org/poll/users.onPage.php?page="+page, success: function(response){
			if(response==\'error\'){
				Messenger().post({
					message: "An error has occurred, please refresh the page",
					type: \'error\',
					hideAfter: 5
				});
			}else if(response!=\'false\'){
				var obj = $.parseJSON(response);
				
				console.log("obj: "+JSON.stringify(obj, null, 4));
				console.log("onlineKnownUsersIDs: "+onlineKnownUsersIDs);
				
				/* holds the ids that are in onlineKnownUsersIDs but not obj eg users who have left */
				var difference = onlineKnownUsersIDs; /* temp var */
				console.log("difference(before): "+difference);
				/* loop through all the users who are in the chatbox */
				$.each(obj, function(key,value){
					/* if the there are users in the chatbox that are not known then add them to array and html wrapper */
					if($.inArray(value.id,onlineKnownUsersIDs) == -1){
						/* new user has joined - id is not in initial load array */
						onlineKnownUsersIDs.push(value.id);
						/* just check user icon is not already on there, with id */
						if(!$(\'#user__\'+value.id).length)
						{
							 // it does not exist
							$("#__onlineUsers").append(\'<a id="user__\'+value.id+\'" href="http://techberry.org/user/\'+value.username+\'/" class="miniprofile" data-user="\'+value.username+\'"><img src="\'+value.avatar+\'" style="float:left" height="32" width="32"/></a>\').fadeIn(\'slow\');
						}
					}
				});
				/* to check users that have left we want to get the ids that are known but not returned from the ajax */
				/* we need to loop through the returned ids and if they are in the know ids remove them from the (temp/difference) array*/
				/* this is so we can get the ids in onlineKnownUsersIDs but no obj */
				$.each(obj, function(key,value){
					var index = difference.indexOf(value.id);
					difference.splice(index, 1);

					var index = onlineKnownUsersIDs.indexOf(value.id);
					onlineKnownUsersIDs.splice(index, 1);
				});
				console.log("difference(after) ~ ids to remove : "+difference);
				$.each(difference, function( key, value ){
					$(\'#user__\'+value).hide(\'slow\', function(){ $(\'#user__\'+value).remove(); });
				});
			}
	}, complete: setTimeout(userPoll,10000), timeout: 10000 });
})();