<?php

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile: Theme Download</title>
	<link rel="stylesheet" href="themes/C.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	
	<script>
function syncAjax(u){
			var obj = $.ajax(
					{url:u,
					async: false
					}
				);
			return $.parseJSON(obj.responseText);

	}
$(document).ready(function(){
$("#save").click(function(){
    /*window.alert("Thank You For Signing Up. A message has been sent to your phone now!!");
	var name = $("#name").val();
	var number = $("#number").val();
	var email = $("#email").val();
	var organisation = $("#organisation").val();
	//var code = Math.random();
	
	var u = "js_php.php?cmd=1&name="+name+"&number="+number+"&email="+email+"&organisation="+organisation; 
				var r = syncAjax(u);
				//location.reload();*/
});
});

</script>

</head>
<body>
	<div data-role="page" class = "ui-content" data-theme="C">
		<div data-role="header" data-position="inline">
			<h1>Attendance APP</h1>
		</div>
		<div data-role="content" data-theme="C">
			<p ><a href="#" class="ui-icon-arrow-d-r">You are logged in as: </a></p>
			 <form	method="post"	action="">
		       
				<label	for=" "> </label>
                <a	href="#" class="ui-btn ui-btn-c" class="ui-icon-arrow-d-r" id="save" align = "center">Sign up</a>
		</div>
	</div>
	<div	data-role="footer">	
				<h1>Content Goes here</h1>	
		</div>
</body>
</html>
?>