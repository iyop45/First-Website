<?php
	namespace techberry\api;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('docs','default');

// Head variables
$tpl->assign("platformsTab",true);
$cssLinks = array(
				'https://fonts.googleapis.com/css?family=Droid+Sans:400,700',
				'http://techberry.org/docs/css/highlight.default.css',
				'http://techberry.org/docs/css/screen.css'
				);
$javaScriptLinks = array(
						'http://techberry.org/docs/lib/shred.bundle.js',
						'http://techberry.org/docs/lib/jquery-1.8.0.min.js',
						'http://techberry.org/docs/lib/jquery.slideto.min.js',
						'http://techberry.org/docs/lib/jquery.wiggle.min.js',
						'http://techberry.org/docs/lib/jquery.ba-bbq.min.js',
						'http://techberry.org/docs/lib/handlebars-1.0.0.js',
						'http://techberry.org/docs/lib/underscore-min.js',
						'http://techberry.org/docs/lib/backbone-min.js',
						'http://techberry.org/docs/lib/swagger.js',
						'http://techberry.org/docs/swagger-ui.js',
						'http://techberry.org/docs/lib/highlight.7.3.pack.js',
						);
$favicon = "http://techberry.org/favicon.png";
$inlineScript = 
<<<'EOT'
    $(function () {
      window.swaggerUi = new SwaggerUi({
      url: "http://techberry.org/api/docs.php",
      dom_id: "swagger-ui-container",
      supportedSubmitMethods: ['get', 'post', 'put', 'delete'],
      onComplete: function(swaggerApi, swaggerUi){
        log("Loaded SwaggerUI")
        $('pre code').each(function(i, e) {hljs.highlightBlock(e)});
      },
      onFailure: function(data) {
        log("Unable to Load SwaggerUI");
      },
      docExpansion: "none"
    });

    $('#input_apiKey').change(function() {
      var key = $('#input_apiKey')[0].value;
      log("key: " + key);
      if(key && key.trim() != "") {
        log("added key " + key);
        window.authorizations.add("key", new ApiKeyAuthorization("api_key", key, "query"));
      }
    })
    window.swaggerUi.load();
  });
EOT;
$inlineCSS = 'body{padding:0px !important}';

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

$tpl->display('/home/content/99/11499199/html/templates/pages/docs.tpl');
?>