{extends file='/home/content/99/11499199/html/admin/layout.tpl'}
{config_load file='/home/content/99/11499199/html/templates/config/css.prefix.conf'}
{strip}
{block name=adminContent}
	<script type="text/javascript">
		var clip = new ZeroClipboard.Client();
		clip.setText( $("#populate_categories_query").html()  );
		clip.glue( 'populate_categories');
		
		function addAnotherInsertQuery(){}
	</script>
	<div style="width:800px">
		<h3><a class="default" href="http://techberry.org/admin/sql-queries">Refresh query content</a></h3>
		<hr>
		<h3 style="color:#C74A4A;float:left">Populate forum categories</h3>
		<span style="
			display: inline-block;
			line-height: 25px;
			font-size: 12px;
			color: #979696;
			margin-left: 5px;
		">(x1) default/ user : admin (id = 2)</span>
		<input style="width:800px" 
					type="text" 
					onclick="select()"
					value='INSERT INTO forum_categories (title,description,user_id) VALUES ("{$title}","{$content}",2);';/>
		<button id="populate_categories" class="blue" style="margin-top:5px">Copy To Clipboard</button>
		<button class="red" style="margin-left:5px;margin-top:5px">+1 insert query</button>
		<hr>
		<h3 style="color:#C74A4A;float:left">Populate forum topics</h3>
		<span style="
			display: inline-block;
			line-height: 25px;
			font-size: 12px;
			color: #979696;
			margin-left: 5px;
		">(x1) default/ user : admin (id = 2) , category_id : 16</span>
		<input style="width:800px" 
					type="text" 
					onclick="select()"
					value='INSERT INTO forum_topics (title,description,user_id,category_id) VALUES ("{$title}","{$content}",2,16);';/>
		<button id="populate_topics" class="blue" style="margin-top:5px">Copy To Clipboard</button>
		<button class="red" style="margin-left:5px;margin-top:5px">+1 insert query</button>
		<hr>
		<h3 style="color:#C74A4A;float:left">Populate forum posts</h3>
		<span style="
			display: inline-block;
			line-height: 25px;
			font-size: 12px;
			color: #979696;
			margin-left: 5px;
		">(x1) default/ user : admin (id = 2) , topic_id : 1</span>
		<input style="width:800px" 
					type="text" 
					onclick="select()"
					value='INSERT INTO forum_posts (title,description,user_id,topic_id) VALUES ("{$title}","{$content}",2,1);';/>
		<button id="populate_posts" class="blue" style="margin-top:5px">Copy To Clipboard</button>
		<button class="red" style="margin-left:5px;margin-top:5px">+1 insert query</button>
		<hr>
		<h3 style="color:#C74A4A;float:left">Populate forum replies</h3>
		<span style="
			display: inline-block;
			line-height: 25px;
			font-size: 12px;
			color: #979696;
			margin-left: 5px;
		">(x1) default/ user : admin (id = 2) , post_id : 1</span>
		<input style="width:800px" 
					type="text" 
					onclick="select()"
					value='INSERT INTO forum_replies (title,description,user_id,post_id) VALUES ("{$title}","{$content}",2,1);';/>
		<button id="populate_replies" class="blue" style="margin-top:5px">Copy To Clipboard</button>
		<button class="red" style="margin-left:5px;margin-top:5px">+1 insert query</button>
		<hr>
	</div>
{/block}
{/strip}