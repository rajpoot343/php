<?php
include_once 'models/connect.php';
$data = '';
$sql = "SELECT * FROM website";

$query = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($query)){
    $data .= '<div class="result">
       <h2><a href="'.$row['url'].'">'.$row['title'].'</a></h2>
     <address>'.$row['url'].'</address>
        <p>'.$row['meta_description'].'</p>
    </div>';
}


$result_data = $data;

?>
