<?php
include('./dataserver.php');

$obj=new query();
echo "<pre>";
//$result=$obj->getData('users','*','$condition_arr','','','','');

//insert Datas
//$condition_arr= array('username'=>'salo','password'=>'1254a182');
//$result=$obj->InsertData('users',$condition_arr);

//delete data
//$condition_arr= array('id'=>7);
//$result=$obj->DeleteData('users',$condition_arr);

//$condition_arr= array('username'=>'balda','email'=>'balsalharami@maki.com','password'=>'okhellokukur');
//$result=$obj->UpdateData('users',$condition_arr,'id',14);

print_r($result);

?>