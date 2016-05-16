<?php
/**
 * Created by PhpStorm.
 * User: csashokk
 * Date: 5/10/2016
 * Time: 2:50 PM
 */
include_once 'models/connect.php';
$data = '';
$sql = "SELECT * FROM website";
$query = mysqli_query($link, $sql) or die(mysqli_error($link));
while($row = mysqli_fetch_array($query)){
  $data .= '<div class="result">
                <h2><a href="'.$row['url'].'">'.$row['title'].'</a></h2>
                <address>'.$row['url'].'</address>
                <p>'.$row['meta_description'].'</p>
             </div>';
}
$result_data = $data;

?>