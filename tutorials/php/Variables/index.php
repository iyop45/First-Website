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
								<h4 class="w_m">PHP: Variables (Basics) pt.3</h4>
                                <p>
This chapter is going to cover the overview of variables and their uses within PHP. I will show how you can introduce variables to what we have learnt and why they're so useful
                                </p>
                                <br>
                                <h4 class="w_s">Basic overview</h4>
                                <p>
Variables are like 'tags' of which you can store information on. For example you could store the number 1 in the variable 'cat' and whenever the variable cat is called the number 1 will be put in place. There are different types of variables such as integers (whole numbers), strings (text), objects(I will explain later) etc. The good thing about PHP is that you do not need to define what type of variable you're going to use. PHP will work out the type depending on the context that it's used. For example all string variables are wrapped in quotes and all decimals (floats) will have a decimal point. All variables start with the special character $ and are followed by the variable name (the variable name can't begin with a number) and are assigned a value with the equals sign (=).
                                </p>
                                <br>
                                <pre><?php highlight_string("<?php \n\t \$variable1 = 1; /* assign variable1 the value 1 */ \n\t \$variable2 = 'Hello'; /* assign variable2 the string 'Hello' */ \n\t \$variable3 = 34.3; /* assign variable3 the decimal 34.3 */\n?>") ?></pre>
                                <h4 class="w_s">Manipulating variables</h4> 
                                <p>
You can change variable values at any time (unless they're 'final' but I'll explain that later) by simply using the declaration on the same variable but with a different value (example 1). Variable can too be outputted on the screen like the strings shown in the previous chapter. However, variable are not wrapped in quotes. You have to end the wrapped string and then reopen it (if you need more text) using the "."
                                </p>
                                <br>
                                <pre><?php highlight_string("<?php \n\t \$variable1 = 1; /* assign variable1 the value 1 */ \n\t \$variable1 = 'Hello'; /* re-assign variable1 the string 'Hello' */ \n\t echo \$variable1; //Simply print the value of the variable on the screen\n\t echo '<br>'; //Output a linebreak\n\t echo \$variable1 . ' World!'; //Output the variable with a string after it\n\t echo '<br>'; \n\t echo 'The value of \$variable1 is ' . \$variable1 . '<br>'; //The variable is printed completely inside a string of text\n\t echo \$variable1 . ' is the value of \$variable1'; //and of course printed the variable before a string of text?>") ?></pre>
                                <pre>Hello<br>Hello World!<br>The value of $variable1 is Hello<br>Hello is the value of $variable1</pre>
                                <h4 class="w_s">Mathmatical operators</h4> 
                                <p>
With number variables you can also use mathmatical operations as a means of manipulating them. As with any language they use the general characters for such operations.
                                </p>
                                <br>
                                <table class="reference">
                                    <tbody><tr>
                                    	<th>Character</th>
                                		<th>Description</th>
                                	</tr>
                                	<tr>
                                		<td>+</td>
                                		<td>Addition</td>
                                	</tr>
                                	<tr>
                                		<td>-</td>
                                		<td>Subtraction</td>
                                	</tr>
                                	<tr>
                                		<td>*</td>
                                		<td>Multiplication</td>
                                	</tr>
                                	<tr>
                                		<td>/</td>
                                		<td>Division</td>
                                	</tr>
                                	<tr>
                                		<td>%</td>
                                		<td>Modulus: remainder after a division</td>
                                	</tr>                               
                                    </tbody>
                                </table> 
                                <br>
                                <pre><?php highlight_string("<?php \n\t \$var1 = 9; \n\t \$var2 = 3; \n\n\t echo \$var1 + \$var2; \n\t echo '<br>'; \n\t echo \$var1 - \$var2; \n\t echo '<br>'; \n\t echo \$var1 * \$var2; \n\t echo '<br>'; \n\t echo \$var1 / \$var2; \n\t echo '<br>'; \n\t echo \$var1 % \$var2; \n?>") ?></pre>
                                <pre>12<br>6<br>27<br>3<br>0</pre>
                                <p>
Remember, if the variable is wrapped in quotes it's considered a string and so can't be manipulated by mathmatical operators even if they're numbers. In that case you would have to consider: <a class="script_link" href="http://php.net/manual/en/function.intval.php" target="_blank" rel="nofollow">intval()</a>.
                                </p>
                                <br>
                                <br>
                                <div class="chapter">
                                   <div class="prev"><a href="http://techberry.org/tuts/PHP/Output/">« Previous</a></div>
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
    									<li><a class="script_link" href="http://techberry.org/tuts/PHP/Output/">Outputting text</a></li>
    									<li>Variables</li>
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