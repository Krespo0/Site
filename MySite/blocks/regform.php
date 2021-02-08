<div class="main-content">
	<div class="registration">
		<form action=query-registration.php method=POST>		
			<label>Фамилия:</label></br>
			<input type=Text name=surname placeholder='Enter Surname'required></br>
			<label>Имя:</label></br>
			<input type=Text name=firstname placeholder='Enter Name' required></br>
			<label>Логин:</label></br>
			<input type=Text id=log name=login placeholder='Enter Login' required oninput="loginCheck();"></br>
			<label>Пароль:</label></br>
			<div class="message"></div>
			<input type=Password name=password placeholder='********' required></br>
			<input type="submit" name="submit" class="button" value="Зарегистрироваться">
		</form>
	</div>
</div>
<script src="jQuary.js"></script>
<script type="text/javascript">
	function loginCheck() 
	{
		var data = "log=" + log.value
		var request = new XMLHttpRequest()
		request.open("POST", "loginCheck.php", true)
		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf8")
		request.send(data)
		
		request.onreadystatechange = function() {

			if (request.readyState == 4) 
			{
				if (request.status == 200) 
				{
					$('.message').text(request.responseText)
					if (request.responseText == "Success!") 
					{
						$('.message').text('Логин свободен')
						$('.message').css('background-color','rgba(59, 235, 23, .5)')
						$('.button').prop("disabled", false)
					}
					if (request.responseText == "Error!") 
					{
						$('.message').text('Логин занят')
						$('.message').css('background-color','rgba(235, 59, 23, .5)')
						$('.button').prop("disabled", true)
					}
				}
			}
		}
	}
</script>
