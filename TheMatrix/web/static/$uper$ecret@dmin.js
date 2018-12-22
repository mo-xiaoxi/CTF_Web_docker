function get_password(username) {
	$.ajax({
		type: "POST",
		url: "/api.php",
		data: {"token":csrf_token,"action":"get_password","username":username},
		dataType: "json",
		success:function (data) {
			if (data["error"] === '')
			{
				$("#" + username).text(data["result"]);
			}
			else
				alert('Error: ' + data["error"]);
        }
	});
}
