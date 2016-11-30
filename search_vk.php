<?php
  echo "Hello World !<br> ";
  //$id=99879525;
//for ($ii=0; $ii<2; $ii++) 
//{
// $id = $id+1;
 //$wall = file_get_contents("https://api.vk.com/method/wall.search?owner_id=".$id."&query=а"); // Запрос
 $wall = file_get_contents("https://api.vk.com/method/wall.search?owner_id=99879526&query=а"); // Запрос
 $wall = json_decode($wall); // Преобразуем JSON-строку в массив
 //$wall = $wall->response->items; // Получаем массив комментариев
 //print_r ($id.'<br>');
//for ($i = 0; $i < count($wall); $i++) {
//   echo "<p><b>".($i + 1)."</b>. <i>".$wall[$i]->text."</i><br /><span>".date("Y-m-d H:i:s", $wall[$i]->date)."</span></p>"; // Выводим записи
//	}
//}
print_r ($wall);
//echo PHP_VERSION;

/* how decode and encode JSON:
<?php
$json_string='{"id":1,"name":"ivan","country":"Russia","office":["yandex"," management"]} ';
$obj=json_decode($json_string);
echo $obj->name. '<br>';
foreach ($obj->office as $val)
echo $val;
?>
*/
?>
