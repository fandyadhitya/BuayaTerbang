<?php
$page = $_GET[page];
$file = "../data/$page.php";
if(!file_exists($file) || empty($page)){
    include "../data/home.php";
  }else{
   echo "<iframe align=middle width=100% height=650 src=$file frameborder=0></iframe> ";
}
?>
