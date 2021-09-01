<?php	
$mail = "headways@mail.ru, sphinxstudio@mail.ru, fertiliti@list.ru, stepan.gromovikov@gmail.com";
$subject = "Заявка с сайта superbrows";
$header = "From: \"superbrows\" <info@home-construct.ru>\n";
$header .= "Content-type: text/html; charset=\"utf-8\"";
$message = "";
if (isset($_POST['form'])) {
$message .= "<p>Форма: ".$_POST['form']."</p>";
}
if (isset($_POST['email'])) {
$message .= "<p>Почта: ".$_POST['email']."</p>";
}
if (isset($_POST['name'])) {
$message .= "<p>Ваше имя: ".$_POST['name']."</p>";
}

if (isset($_POST['phone'])) {
$message .= "<p>Телефон: ".$_POST['phone']."</p>";
}
mail($mail,$subject,$message,$header);

?>