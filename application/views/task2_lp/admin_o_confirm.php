<?php
echo form_open(base_url().'task2/admin/o/register');

echo "Your Submit Occupation Name : ".$a_o_name."<br>";


echo "<p>".form_hidden('a_o_name',$a_o_name)."</p>";
echo form_submit('mysubmit', 'Confirm!!');

echo form_close();
?>
