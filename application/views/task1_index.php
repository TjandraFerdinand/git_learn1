<?php

echo form_open(base_url().'user/create');

echo form_submit('mysubmit', 'Create Data!');

echo "<br><Br>";

echo "<table border=1 cellspacing=0 cellpadding=5><tr>";
echo "<td><b>Name</b></td>";
echo "<td><b>Phone</b></td>";
echo "<td><b>Email</b></td>";
echo "<td><b>Edit</b></td>";
echo "</tr><tr>";
foreach ($row as $key =>$val) {
   echo "<td>".$val['name']."</td>";
   echo "<td>".$val['phone']."</td>";
   echo "<td>".$val['email']."</td>";
   echo "<td><a href=".base_url()."user/detail/".$val['id'].">Edit</a> </td>";
   echo "</tr>";
}
echo "</table>";
echo $this->pagination->create_links();

echo form_close();



?>
