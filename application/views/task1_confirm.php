<?php
echo form_open(base_url().'user/register');

echo "Your Submit Name : ".$name."<br>";
echo "Your Submit Phone : ".$phone."<br>";
echo "Your Submit Email : ".$email."<br>";


echo "<p>".form_hidden('name',$name)."</p>";
echo "<p>".form_hidden('phone',$phone)."</p>";
echo "<p>".form_hidden('email',$email)."</p>";
echo form_submit('mysubmit', 'Confirm!!');

echo form_close();
?>
