<?php 
include '../../../db_connect.php';
include '../../../functions.php';
include '../../../content.php';
sec_session_start();

include '../../content.php';
$globalInitialize = new globalInitialize($mysqli,$_SERVER['PHP_SELF']);
$globals = new tut_globals();
$domain = $_SERVER['HTTP_HOST'];
$path = $_SERVER['SCRIPT_NAME'];
$preurl = "http://" . $domain . $path;
$url = preg_replace('/index.php/','',$preurl);
docs();
?>
    <head>
        <?php $globalInitialize->head(); ?>
    	<?php head(0,0); ?>
        <title>TechBerry Tutorials - TechBerry</title>
        <meta name="description" content="Constantly updated and renewed tutorial series for beginners and advanced programmer alike. You can upload your own series or follow through with others for a wide variety of languages from C to JQuery library.">
        <link rel="icon" href="http://techberry.org/favicon.png" type="image/x-icon"/>
	</head>
	<body>
        <?php $globalInitialize->preBody(); ?>
		<div id="<?=$prefixMain?>bg"></div>
		<?php
			alert_bar();
		?>	
		<div id="<?=$prefixGlobal . $subPrefixHeader?>">
			<div id="<?=$prefixGlobal . $subPrefixHeader . '_' . $subPrefixWrap?>">
			<?php
				notifications($mysqli, $url);
				banner(1, 'service');
				?>
		<div id="wrapper">
			<div id="<?=$prefixMain?>overlay2" onclick="close_bar(this);" style="display:none"></div>
			<div class="<?=$prefixGlobal?>wrap">
				<div id="<?=$prefixGlobal?>page" style="height:100%">
    				<div id="ab_c">
    					<div class="tut">
							<div id="tut_content">
								<h4 class="w_m">PHP: Introduction (Basics) pt.1</h4>
								<p>
This is the first installment for my PHP tutorial series. If you're a beginner at programming or scripting (or neither) this is the right place to start. I will try to be as clear as I can with my explanations and avoid waffle and jargon in order to keep on point. The series will run at a steady and understandable rate so no viewers are at a disadvantage from the next.
								</p>
                                </br>
                            <h4 class="w_s">Installation</h4>
                                <p>
This only really applies for if you plan on running the php scripts on your local machine because if you're using a hosted server the chances are php is already installed. If that is the case you can of course skip this part. Well, to begin you need to have an environment where you can host web-pages on your computer locally. To do so it's recommended that you download <a class="script_link" href="http://sourceforge.net/projects/xampp/" target="_blank" rel="nofollow">xampp</a>, follow the installation and execute the main application. If all is well you should see the xampp control panel, for now click 'Start' on the apache module. 
                                </p>
<img src="http://techberry.org/tuts/images/xampp.png">
                                <p>
The apache module must be started in order for you to run on localhost (I'll explain in a bit). To write php scripts you can use <b>any</b> text editor. I would personally recommend <a class="script_link" href="http://notepad-plus-plus.org/" target="_blank" rel="nofollow">Notepad++</a> but that is just down to my personal preference. To start with we're going to check if php is working properly, to do so firstly make a folder (for example 'test') inside the htdocs folder of which would typically be found at C:\xampp\. Copy the following to a file named 'example.php' (the extension is important) and save it inside your newly made test folder.
                                </p>
                                </br>
                                <pre><?php highlight_string("<?php \n\t echo 'Hello World!'; \n?>") ?></pre>
                                </br>
                                <p>
In the address bar enter 'http://localhost/test/example.php' and if all works you should see <b>Hello World!</b> on the screen, if you're seeing anything else something has gone wrong and you may need to check apache is running and whether or not xampp has installed correctly. Notice how we used 'localhost' rather than C://xampp/, this is because we're treating it on a server rather than as a raw file. So remember always use 'localhost' (or 127.0.0.1) as the base directory of htdocs.
                                </p>
                                </br>
                            <h4 class="w_s">Declaring a php script</h4>
                                <p>
All php code must be within an opening and closing php tag. Any outside of these tags will not be seen by the php interpreter and so will not run; in fact typically speaking it will just be interpreted by the browser as html. Unlike html, you can't embed php tags within others however you can have them throughout a page.'
                                </p>
								</br>
						          <pre><?php highlight_string("<?php \n\t //Any lot of php code \n?> \n<!-- This is interpreted as html, not php -->\n<? \n\t //Shorthand way of opening and closing php tags\n?>") ?></pre>
                                </br>
                                <p>
You can open and close php tags as much as you like although it's of course good practice to not overuse this idea. From the script demonstrated it brings me nicely onto the next concept of which is <b>comments</b>.
                                </p>
                            <h4 class="w_s">Comments</h4>
                                </p>
                                <p>
Notice how I used the double forward slashes. These are <b>comments</b> and like code outside of the php tags are not run through the interpreter. You're not obligated to use comments and they don't have any specific purpose, they're just useful for debugging and passing on potentially confusing and/or complicated scripts for others look at or work on. For example you could use a comment to describe the purpose of each line or function in the script and if that purpose isn't met you will know where the problem is.
                                </p>
                                </br>
                                <p>
The double forward slashes are only commenting text on the right of them <b>and</b> on the same line, if you need your comment to span across multiple lines you would use '/*' and '*/' as demonstrated here:
                                </p>
                                </br>
                                <pre><?php highlight_string("<?php\n\t//This is very inneficient for long comments\n\t//as you have to use the doubleslahes\n\t//for each new line of comments\n\n/*\n\tBut this is perfect-\n\t- I can run the comment accross multiple lines\n\tvery easily\n*/\n?>"); ?></pre>
                                </br>
                                <p>
                                The first examples are known as <b>comment lines</b> and the second is a <b>comment block</b>, you'll find yourself using them a lot or not enough but either way they're a vital concept to have the grasp of.
                                </p>
                                </br>
                                </br>
                                <div class="chapter">
                                   <div class="next"><a href="http://techberry.org/tuts/PHP/Output/">Next Chapter »</a></div>
                                </div>
                            </div>
							<div id="tut_side">
								<div class="tut_sn">
                                     <?php echo $globals->about; ?>
                                </div>
                                </br>
                                </br>
    							<div class="tut_sn">
									<h4 class="w_s">Quick links</h4>
                                    <ul>
        								<li>Introduction</li>
    									<li><a class="script_link" href="http://techberry.org/tuts/PHP/Output/">Outputting text</a></li>
    									<li><a class="script_link" href="http://techberry.org/tuts/PHP/Variables/">Variables</a></li>
    								</ul>
                                </div>
							</div>
						</div>                    
					</div>
				</div>
			</div>
			<?php echo strip_output($footer); ?>
		</div>
	</body>
</html>