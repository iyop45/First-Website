<?php
	namespace techberry\frames\profilePicture;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	
	$styles = 
		array(
			'bar'=>
				'background-color: #f1f1f1;
				border-color: #e5e5e5;
				border-width: 0 0 1px;
				border-style: solid;
				cursor: move;
				width: 100%;
				padding: 20px 0;',
			'title'=>
				'margin: 0 20px;
				color: #777;
				text-transform: uppercase;
				font-size: 12px;',
			'close'=>
				'margin-right: 10px;
				border: none;
				background-color: #f1f1f1;
				cursor: pointer;
				font-size: 20px;
				color: #777;
				margin-top: 10px;
				position: absolute;
				top: 0;
				right: 0;',
			'content'=>
				'padding: 20px',
			'error'=>
				'font-size: 12px;
				font-weight: bold;
				margin-bottom: 10px'
			
		);
	$tpl->assign("styles",$styles);
	
	$tpl->display('/home/content/99/11499199/html/frames/templates/upload.profilePicture.tpl');
?>