{
	"apiVersion": "0.0.4542.22887",
	"swaggerVersion": "1.0",
	"basePath": "http://techberry.org/api/v1",
	"resourcePath": "/v1/forum",
	"apis": [
		{
			"path": "/user/username={username}/",
			"description": "Return information regarding a user on the site",
			"operations": [
				{
					"httpMethod": "GET",
					"notes": "Return information regarding a user on the site",
					"nickname": "getUser",
					"summary": "User information",
					"parameters": [
						{
							"name": "username",
							"description": "The username for lookup",
							"dataType": "string",
							"defaultValue":"admin",
							"required": true,
							"allowMultiple": false,
							"paramType": "path"
						},
						{
							"name": "encoding",
							"description": "The return type XML/json",
							"required": false,
							"defaultValue":"json",
							"allowMultiple": false,
							"type":"string",
							"paramType": "query",
							"enum":[
								 "xml",
								 "json"
							 ]
						}
					],
					"errorResponses": [ ]
				}
			]
		},
		{
			"path": "/user/userid={userid}/",
			"description": "Return information regarding a user on the site",
			"operations": [
				{
					"httpMethod": "GET",
					"notes": "Return information regarding a user on the site",
					"nickname": "getUser",
					"summary": "User information",
					"parameters": [
						{
							"name": "userid",
							"description": "The username for lookup",
							"dataType": "int",
							"defaultValue":1,
							"required": true,
							"allowMultiple": false,
							"paramType": "path"
						},
						{
							"name": "encoding",
							"description": "The return type XML/json",
							"required": false,
							"defaultValue":"json",
							"allowMultiple": false,
							"type":"string",
							"paramType": "query",
							"enum":[
								 "xml",
								 "json"
							 ]
						}
					],
					"errorResponses": [ ]
				}
			]
		},
		{
			"path": "/user/profile/id={id}/",
			"description": "Embeddable users profile",
			"operations": [
				{
					"httpMethod": "GET",
					"notes": "Embeddable users profile",
					"nickname": "getProfile",
					"summary": "User profile",
					"parameters": [
						{
							"name": "id",
							"description": "Embeddable users profile",
							"dataType": "int",
							"defaultValue":1,
							"required": true,
							"allowMultiple": false,
							"paramType": "path"
						}
					],
					"errorResponses": [ ]
				}
			]
		},
		{
			"path": "/user/profile/username={username}/",
			"description": "Embeddable users profile",
			"operations": [
				{
					"httpMethod": "GET",
					"notes": "Embeddable users profile",
					"nickname": "getProfile",
					"summary": "User profile",
					"parameters": [
						{
							"name": "username",
							"description": "Embeddable users profile",
							"dataType": "string",
							"defaultValue":"admin",
							"required": true,
							"allowMultiple": false,
							"paramType": "path"
						}
					],
					"errorResponses": [ ]
				}
			]
		},
		{
			"path": "/user/rankings/",
			"description": "User ranking ladder",
			"operations": [
				{
					"httpMethod": "GET",
					"notes": "Return the users with most reputation points",
					"nickname": "getRanking",
					"summary": "User rankings",
					"parameters": [
						{
							"name": "encoding",
							"description": "The return type XML/json",
							"required": false,
							"defaultValue":"json",
							"allowMultiple": false,
							"type":"string",
							"paramType": "query",
							"enum":[
								 "xml",
								 "json"
							 ]
						}
					],
					"errorResponses": [ ]
				}
			]
		}
	]
}