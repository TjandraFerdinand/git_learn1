<?php
echo form_open(base_url().'task2/user/register');

echo "Your Submit Username : ".$username."<br>";
echo "Your Submit Address  : ".$address."<br>";
echo "Your Submit Phone : ".$phone."<br>";
echo "Your Submit Email : ".$email."<br>";
echo "Your Submit Industry : ";

foreach ($data_i as $key => $val) {
	echo $val['industry_name'];
        echo form_hidden('industry[]',$val['industry_id']);
}

echo "<br>";
echo "Your Submit Occupation : <br>";
foreach ($data_o as $key => $val) {
	echo $val['occupation_name'];
        echo form_hidden('occupation[]',$val['occupation_id']);
}
echo "<br>";
echo "<p>".form_hidden('username',$username)."</p>";
echo "<p>".form_hidden('address',$address)."</p>";
echo "<p>".form_hidden('phone',$phone)."</p>";
echo "<p>".form_hidden('email',$email)."</p>";
echo form_submit('mysubmit', 'Confirm!!');

echo form_close();
?> 
