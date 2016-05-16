<?php

//$data = '';
//$data1 = '';
//$result = '';
//
//$arr = array(
//        array("name" => "ram", "age" => 36),
//        array("name" => "sham", "age" => 30),
//        array('name' => "jodu", 'age' => 25),
//        array('name' => "madhu", 'age' => 20)
//      );
//
////print_r($arr);
//echo json_encode($arr);
////var_dump($arr);

//echo "<br /> A. Value : ".$arr[3]['name'];
//echo "<br /> A. Value : ".$arr[3]['age'];


//for($i=0; $i<count($arr); $i++){
//    $data1 .= "<br /> Name : ".ucfirst($arr[$i]);
//}

//foreach($arr as $ar){
//    foreach($ar as $key=>$val){
//    $data1 .= "<br /> ".$key." : ".$val;
//    }
//}

//foreach($arr as $ar){
//    $data1 .= "<br /> Name : ".$ar['name'];
//    $data1 .= "<br /> Age : ".$ar['age'];
//}

//for($i=0; $i<count($arr); $i++){
//     $data1 .= "<br /> A. Name : ".$arr[$i]['name'];
//     $data1 .= "<br /> B. Age : ".$arr[$i]['age'];
//}

//
//foreach($_SERVER as $key=>$value){
//    $data .= $key."=".$value."<br />";
//}
//$result = "<br />Request get : ".count($arr)." $data1 <br />";

//echo $result;

//?>

<!--array practice-->

<?php
//$ashok =  array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
//foreach($ashok as $country => $capital){
//  echo "The capital of the $country is $capital.<br/>";
//}
//print_r($ashok);
//
//?>

<!--so far i could not do Q. 4
and i have done till question number 8-->

<?php
echo "
Associative array : Ascending order sort by value
";
$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); asort($array2);
foreach($array2 as $y=>$y_value)
{
  echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Ascending order sort by Key
";
$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); ksort($array3);
foreach($array3 as $y=>$y_value)
{
  echo
      "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Value
";
$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($age);
foreach($age as $y=>$y_value)
{
  echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Key
";
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); krsort($array4);
foreach($array4 as $y=>$y_value)
{
  echo "Age of ".$y." is : ".$y_value."
";
}
?>
