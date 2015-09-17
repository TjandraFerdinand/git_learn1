<?php
echo form_open(base_url().'task2/admin/i/register');

echo "Your Submit Industry Name : ".$a_i_name."<br>";


echo "<p>".form_hidden('a_i_name',$a_i_name)."</p>";
echo form_submit('mysubmit', 'Confirm!!');

echo form_close();
?>
