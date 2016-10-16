{
	"apiVersion": "{$apiVersion}",
	"swaggerVersion": "1.0",
	"basePath": "{$basePath}",
	"apis": [
		{foreach from=$apiRoutes item=route name=r}
			{
				"path": "http://techberry.org/api/routes/{$route.name}.php",
				"description": "{$route.description}"
			}{if not $smarty.foreach.r.last},{/if}
		{/foreach}
	],
	"info":{
		"title":"TechBerry API Documentation",
		"description":"For developers who want to manipulate and interact with our services"
	}
}