<?php
if (isset($_POST['type'])) {
	
	$email_to = 'superbrows@yandex.ru, leadpmu@mail.ru, headways@mail.ru, nikukulkina@gmail.com';
	$from_mail = 'landing@superbrows.ru';
	
	if($_POST['type'] == "callback"){
		/*Тема письма*/
    	$subject = 'Запрос обратного звонка';
		/*Переменные из формы*/
		$tel = $_POST['tel'];
		$name = $_POST['username'];
		/*формирование сообщения*/
		$message = '<html>
			<head>
				<title>'.$subject.'</title>
			</head>
			<body>
				<p>Пользователь: '.$name.'</p>
				<p>Номер телефона: '.$tel.'</p>
	      	</body>
	    </html>';
	}else if($_POST['type'] == "consult-form"){
		/*Тема письма*/
    	$subject = 'Получить консультацию, открытая форма';
		/*Переменные из формы*/
		$tel = $_POST['tel'];
        $name = $_POST['name'];
		/*формирование сообщения*/
		$message = '<html>
			<head>
				<title>'.$subject.'</title>
			</head>
			<body>
				<p>Пользователь '.$name.'</p>
				<p>Номер телефона: '.$tel.'</p>
	      	</body>
	    </html>';
	}else if($_POST['type'] == "consult"){
		/*Тема письма*/
    	$subject = 'Получить консультацию';
		/*Переменные из формы*/
		$tel = $_POST['tel'];
        $select = $_POST['select'];
		$name = $_POST['username'];
		/*формирование сообщения*/
		$message = '<html>
			<head>
				<title>'.$subject.'</title>
			</head>
			<body>
				<p>Пользователь '.$name.'</p>
				<p>Номер телефона: '.$tel.'</p>
				<p>Услуга: '.$select.'</p>
	      	</body>
		</html>';
	}else if($_POST['type'] == "sign"){
		/*Тема письма*/
    	$subject = 'Запись на поцедуру';
		/*Переменные из формы*/
		$tel = $_POST['tel'];
		$name = $_POST['username'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$services = isset($_POST['service']) && is_array($_POST['service']) ? $_POST['service'] : array();
		$text = implode(', ', $services);

		/*формирование сообщения*/
		$message = '<html>
			<head>
				<title>'.$subject.'</title>
			</head>
			<body>
				<p>Пользователь '.$name.'</p>
				<p>Номер телефона: '.$tel.'</p>
				<p>Услуги: '.$text.'</p>
				<p>Дата: '.$date.'</p>
				<p>Время: '.$time.'</p>
	      	</body>
		</html>';
	}
    /*Шапка письма*/
	$header = "Content-type: text/html; charset=\"utf-8\"\r\n";
	$header .= "From: Sphinx <".$from_mail.">\r\n";
	mail($email_to, $subject, $message, $header);
}
?>
