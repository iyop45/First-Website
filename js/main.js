<?php
	header('Content-Type: application/javascript');
	
	include("class.compiler.php");
	$c = new PhpClosure();
	$c
	  ->add("lib/external/jquery.navgoco.min.js")
	  ->add("lib/external/jquery.shorten.js")
	  ->add("lib/external/jquery.age.js")
	  ->add("lib/external/jquery.cookie.js")
	  ->add("lib/external/jquery.sceditor.bbcode.min.js")
	  ->add("lib/external/html2canvas.js")
	  ->add("lib/external/jquery.htmlfeedback.js")
	  ->add("lib/external/jquery.multiDialog.js")
	  ->add("lib/external/jquery.spoiler.min.js")
	  ->add("lib/external/opentip.js")
	  ->add("lib/external/jquery.remodal.min.js")
	  ->add("lib/external/messenger-theme-flat.js")
	  ->add("lib/external/zebra_pagination.js")
	  ->add("lib/external/ZeroClipBoard.Core.min.js")
	  
	  ->add("lib/internal/sha512.js")
	  ->add("lib/internal/frames.js")
	  ->add("lib/internal/forum.js")
	  ->add("lib/internal/native.js")
	  ->add("lib/internal/forms.js")
	  
	  ->cacheDir("tmp/")
	  ->write();
	//->advancedMode()//
	//->useClosureLibrary()//
?>