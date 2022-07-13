<?php
//1) PHP: Вывести цифры по порядку
$arrayNumber = [
	[0,1,2,3,4,5,6,7,8,9,10]
];
//2) MySQL: Написать запрос для выборки данных из таблицы, где id = 10
for($i = 0; $i < count($arrayNumber); $i++){
	//print $arrayNumber[$i];
}
//3) PHP: Вывести ключи и значение массива
$sql = "SELECT * FROM `users` WHERE `id` = 10";

//4) PHP: Вывести месяца года

$arrayMonth = [
	[
		1 => 'Январь',
		2 => 'Февраль',
		3 => 'Март'
	],
	[
		1 => 'Апрель',
		2 => 'Май',
		3 => 'Июнь'
	]
];

foreach($arrayMonth as $key => $item){
	foreach($item as $value){
		print $value."<br />";
	}
}

//5) PHP: Дана информация в json формате, надо вывести её.
//{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008
//,2009,2010]}

$json = '{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008
,2009,2010]}';
$data = json_decode($json);
foreach($data as $key => $item){
	for($i = 0; $i < count($item);$i++){
		print $item[$i];
	}
}

//6) PHP и MySQL: Дан код, нужно ответить на вопросы аргументировав свой ответ

$hostname = 'localhost';
$username = 'root';
$passwored = '123';
$database = 'data';

$conn = mysqli_connect($hostname, $database, $username, $password);

$sql = "SELECT * FROM `users`";
$resultSet = mysqli_query($conn, $sql);

/*
1) Будет ли выполнен запрос? нет, не будет! подключение неправильное, 
- $conn = mysqli_connect($hostname, $database, $username, $password); в качества второго аргумента передается $database и это неправильно
- должно быть следующим образом - mysqli_connect($hostname,$username, $password, $database);
2) Что сделает запрос?  в случае ошибки мы получим false а в случае успеха получим объект mysqli_result
3) Написать запрос для удаления данных, где id пользователей равен
одному из данных цифр = 1,2,3,4,5 - DELETE FROM `users` WHERE id IN (1, 2, 3, 4, 5)

*/

//7) PHP и HTML: Написать форму с одним полей для вода текста и
//кнопкой, по нажатию которой идёт сохранения данных из поля в файл.
if(isset($_POST['click'])){
	file_put_contents('file.txt', $_POST['text']."\n");
}
echo '<form action="" method="POST">
	<p><textarea name="text"></textarea></p>
	<p><input type="submit" name="click" /></p>
</form>';
?>
