<!DOCTYPE html>
<html>
<head>
	<script src="//vk.com/js/api/openapi.js" type="text/javascript"></script>
	<script type="text/javascript">
  		VK.init({
    	apiId: Your App ID
  		});
	</script>
	<title>VK</title>
</head>
<body>
	<script type="text/javascript" charset="utf-8">
	VK.Auth.login(function(response) {
		if (response.session) {
			document.write("OK");
			if (response.settings) {
				document.write("response");
			}
		} else {
			document.write("NotOK");
			}
		});

	VK.Api.call('wall.post', {owner_id:'128605250', friends_only: 1, message: "I'm trying to work with OpenAPI by VK. Cool thing. It doesn't support Russian language yet, but soon I'll fix it. Anyway, I'm writing it only using my own web-server :)"}, function(r){}
	);
	</script>
</body>
</html>
