<?php
<script>
function syncAjax(u){
			var obj = $.ajax(
					{url:u,
					async: false
					}
				);
			return $.parseJSON(obj.responseText);

					}

function saveData(){
	var name = $("#name").val();
	var number = $("#number").val();
	var e-mail = $("#e-mail").val();
	var organisation = $("#organisation").val();
	var code = Math.random();
	
	var u = "js_php.php?cmd=1&name=" 
				+ name + "&number="
				+number + "&e-mail=" 
				+ e-mail + "&organisation=" 
				+ organisation + "&code="
				+ code; 
				alert(u);
				var r = syncAjax(u);
				//location.reload();
}
?>