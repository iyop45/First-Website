function forum_createCategory(){
	var e = 0;
	var title = document.forms['submit_new_category_form'].elements['title'].value;
	var content = document.forms['submit_new_category_form'].elements['content'].value;
	if(title.length < 5){
		e++;
		document.forms['submit_new_category_form'].elements['title'].setAttribute('data-ot',"The title is too short");
		document.forms['submit_new_category_form'].elements['title'].style.borderColor="rgb(170, 34, 34)";
	}else if(title.length > 200){
		e++;
		document.forms['submit_new_category_form'].elements['title'].setAttribute('data-ot',"The title is too long");
		document.forms['submit_new_category_form'].elements['title'].style.borderColor="rgb(170, 34, 34)";
	}
	if(content.length < 10){
		e++;
		document.forms['submit_new_category_form'].elements['content'].setAttribute('data-ot',"The content is too short");
		document.forms['submit_new_category_form'].elements['content'].style.borderColor="rgb(170, 34, 34)";
	}else if(content.length > 500){
		e++;
		document.forms['submit_new_category_form'].elements['content'].setAttribute('data-ot',"The content is too long");
		document.forms['submit_new_category_form'].elements['content'].style.borderColor="rgb(170, 34, 34)";
	}
	if(e==0){
		document.submit_new_category_form.submit();
	}else{
		Opentip.findElements();
		renderDynamicTips();
	}
	return false;
}
function forum_createTopic(){
	var e = 0;
	var title = document.forms['submit_new_topic_form'].elements['title'].value;
	var content = document.forms['submit_new_topic_form'].elements['content'].value;
	if(title.length < 10){
		e++;
		document.forms['submit_new_topic_form'].elements['title'].setAttribute('data-ot',"The title is too short");
		document.forms['submit_new_topic_form'].elements['title'].style.borderColor="rgb(170, 34, 34)";
	}else if(title.length > 200){
		e++;
		document.forms['submit_new_topic_form'].elements['title'].setAttribute('data-ot',"The title is too long");
		document.forms['submit_new_topic_form'].elements['title'].style.borderColor="rgb(170, 34, 34)";
	}
	if(content.length < 10){
		e++;
		document.forms['submit_new_topic_form'].elements['content'].setAttribute('data-ot',"The content is too short");
		document.forms['submit_new_topic_form'].elements['content'].style.borderColor="rgb(170, 34, 34)";
	}else if(content.length > 500){
		e++;
		document.forms['submit_new_topic_form'].elements['content'].setAttribute('data-ot',"The content is too long");
		document.forms['submit_new_topic_form'].elements['content'].style.borderColor="rgb(170, 34, 34)";
	}
	if(e==0){
		document.submit_new_topic_form.submit();
	}else{
		Opentip.findElements();
		renderDynamicTips();
	}
	return false;
}
function forum_createPost(){
	var e = 0;
	var title = document.forms['submit_new_post_form'].elements['title'].value;
	var content = document.forms['submit_new_post_form'].elements['content'].value;
	if(title.length < 10){
		e++;
		document.forms['submit_new_post_form'].elements['title'].setAttribute('data-ot',"The title is too short");
		document.forms['submit_new_post_form'].elements['title'].style.borderColor="rgb(170, 34, 34)";
	}else if(title.length > 200){
		e++;
		document.forms['submit_new_post_form'].elements['title'].setAttribute('data-ot',"The title is too long");
		document.forms['submit_new_post_form'].elements['title'].style.borderColor="rgb(170, 34, 34)";
	}
	if(content.length < 10){
		e++;
		document.forms['submit_new_post_form'].elements['content'].setAttribute('data-ot',"The content is too short");
		document.forms['submit_new_post_form'].elements['content'].style.borderColor="rgb(170, 34, 34)";
		document.getElementById("sceditor").style.borderColor="rgb(170, 34, 34)";
	}else if(content.length > 500){
		e++;
		document.forms['submit_new_post_form'].elements['content'].setAttribute('data-ot',"The content is too long");
		document.forms['submit_new_post_form'].elements['content'].style.borderColor="rgb(170, 34, 34)";
		document.getElementById("sceditor").style.borderColor="rgb(170, 34, 34)";
	}
	if(e==0){
		document.submit_new_post_form.submit();
	}else{
		Opentip.findElements();
		renderDynamicTips();
	}
	return false;
}
function forum_createReply(){
	var e = 0;
	var content = document.forms['submit_new_reply_form'].elements['content'].value;
	if(content.length < 10){
		e++;
		document.forms['submit_new_reply_form'].elements['content'].setAttribute('data-ot',"The content is too short");
		document.forms['submit_new_reply_form'].elements['content'].style.borderColor="rgb(170, 34, 34)";
		document.getElementById("sceditor").style.borderColor="rgb(170, 34, 34)";
	}else if(content.length > 500){
		e++;
		document.forms['submit_new_reply_form'].elements['content'].setAttribute('data-ot',"The content is too long");
		document.forms['submit_new_reply_form'].elements['content'].style.borderColor="rgb(170, 34, 34)";
		document.getElementById("sceditor").style.borderColor="rgb(170, 34, 34)";
	}
	if(e==0){
		document.submit_new_reply_form.submit();
	}else{
		Opentip.findElements();
		renderDynamicTips();
	}
	return false;
}