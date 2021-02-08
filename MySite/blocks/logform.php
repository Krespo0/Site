<div class="main-content">
	<div class="registration">
			<label>Логин:</label></br>
			<input type=Text class=login placeholder='Enter Login'></br>
			<label>Пароль:</label></br>
			<input type=Password class=password placeholder='********'></br>
			<button class=button>Вход</button>
			<div class=button><a href="registration.php">Регистрация</a></div>
	</div>
</div>	
<script src="jQuary.js"></script>
<script>
	$(document).ready(function() {
		$('button').on('click', function() {
			var login = "log=" + $(".login").val();
			var password = "pass=" + $(".password").val();
			var data = login + "&" + password;

			var request = new XMLHttpRequest();
			request.open("POST", "login.php", true);
			request.setRequestHeader("Content-type", "application/x-www-form-urlencoded", "charset=utf8");
			request.send(data);

			request.onreadystatechange = function() {
				if (request.readyState == 4) {
					if (request.status == 200) {
						if (request.responseText == "Success!") {
							document.location.href = "index.php";
						} else if (request.responseText == "Failed!") {
							alert("Неправильные данные");
						}
					}
				}
			}
		});
	});
</script>

