<?php
$json_string = file_get_contents("http://omi.punyanpan.net/api/jadwalCtrl.php");
$parsed_arr = json_decode($json_string);
echo $parsed_arr[0]->Id_pertandingan;
// foreach ($parsed_arr as $data) {
//   echo $data->Id_pertandingan.$data->Nama_Cabor."<br>";
// }

$cookie_name = "user";
$cookie_value = "John Doe";
function setCookieFunc($cookie_name,$cookie_value){
  $number_of_days = 1 ;
  $date_of_expiry = time() + 60 * 60 * 24 * $number_of_days ;
  setcookie($cookie_name, $cookie_value, $date_of_expiry, "/");
}
function deleteCookieFunc($cookie_name){
  if (isset($_COOKIE[$cookie_name])) {
    unset($_COOKIE[$cookie_name]);
    setcookie($cookie_name, null, -1, '/');
  }
}
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
