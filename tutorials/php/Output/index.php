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
								<h4 class="w_m">PHP: Output (Basics) pt.2</h4>
                                <p>
This chapter will cover the different ways of outputting text on the screen and how to escape characters along with the pros and con of each method. 
                                </p>
                                </br>
                                <h4 class="w_s">Simple output</h4>
                                <p>
The echo and print are very basic built in constructs (not functions). You can use the echo and print statement with double or single quotes, as demonstrated here with the results returned.
                                </p>
                                </br>
                                <pre><?php highlight_string("<?php \n\t echo 'Hello World!'; \n\t print \"Hello World!\";\n?>") ?></pre>
                                <pre>Hello World!Hello World!</pre> 
                                <p>
Notice how the type of quote (either " or ') is the same for start on the wrapped string and the end of the wrap. Also that the two printed statements are right next to each and not on a seperate lines. It's worth mentioning that all operations must end with a semicolon (;) this tells the interpreter that it can move onto the next. You may ask how do I use a mixture of double quotes and single quotes inside an echo statement? and how exactly do I add spaces or new lines? 
                                </p>
                                <br>
                                <h4 class="w_s">Escape sequences</h4>
                                <p>
There are lots of different ways of doing this such as through html entities or escape sequences of which show up to the interpreter as 'new line' or 'tab', I will demonstrate here and list all those available to use. Though you must be aware that <b>most</b> escape sequences do <b>not</b> work inside single quoted strings!
                                </p>
                                <br>
                                <pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"Hello&nbsp;\n\tWorld!\n"</span><span style="color: #007700">;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"\t\tHello&nbsp;World!"</span><span style="color: #007700">;<br></span><span style="color: #0000BB">?&gt;</span></span></code></pre>
                                <pre>Hello<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;World!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello World!</pre> 
                                <table class="reference">
                                    <tbody><tr>
                                		<th>Escape sequence</th>
                                		<th>Description</th>
                                	</tr>
                                	<tr>
                                		<td>\n</td>
                                		<td>Newline (In html you could use &lt;br&gt;)</td>
                                	</tr>
                                	<tr>
                                		<td>\t</td>
                                		<td>Tab (typically 4 spaces, or 4 '&nbsp;')</td>
                                	</tr>
                                	<tr>
                                		<td>\e</td>
                                		<td>Escape</td>
                                	</tr>
                                	<tr>
                                		<td>\s</td>
                                		<td>any whitespace character</td>
                                	</tr>
                                	<tr>
                                		<td>\r</td>
                                		<td>carriage return</td>
                                	</tr>                               
                                    </tbody>
                                </table> 
                                <br>
                                <p>
Of course, there are lots more and to see a complete reference go to <a class="script_link" href="http://php.net/manual/en/regexp.reference.escape.php" target="_blank" rel="nofollow">php.net</a>. This section closely links onto the new idea of which is <b>escaping characters</b>, for example you may want to use single quotes <b>inside</b> a single quoted string. Well what you use is the backslashe '\' of which tells the interpreter to simply print the next character rather than using for closing a string (etc).
                                </p>
                                <br>
                                <pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'Isn\'t&nbsp;this&nbsp;amazing?'</span><span style="color: #007700">;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"This&nbsp;is&nbsp;the&nbsp;\"right\"&nbsp;way&nbsp;of&nbsp;doing&nbsp;it"</span><span style="color: #007700">;<br></span><span style="color: #0000BB">?&gt;</span></span></code></pre>
                                <h4 class="w_s">Outputting HTML</h4>
                                <p>
That seems to conclude this section and you should now know how to print almost any text on the screen. Though it's also worth noting that you can always put html text inside these echo or print statement to output html on the browser.
                                </p>
                                <br>
                                <pre><?php highlight_string("<?php \n\t echo '<img src=\"http://techberry.org/tuts/images/colorStrips.jpg\" height=\"100\" width=\"100\">';\n?>") ?></pre>
                                <pre style="overflow:hidden"><img style="width:100px !important;" src="http://techberry.org/tuts/images/colorStrips.jpg" height="100" width="100"></pre> 
                                </br>
                                </br>
                                <div class="chapter">
                                   <div class="prev"><a href="http://techberry.org/tuts/PHP/Introduction/">« Previous</a></div>
                                   <div class="next"><a href="http://techberry.org/tuts/PHP/Variables/">Next Chapter »</a></div>
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
        								<li><a class="script_link" href="http://techberry.org/tuts/PHP/Introduction/">Introduction</a></li>
    									<li>Outputting text</li>
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