<?php

echo form_open(base_url().'task2/admin/i/create');

echo form_submit('mysubmit', 'Add Name Industry!');

echo "<br><Br>";

echo "<table border=1 cellspacing=0 cellpadding=5><tr>";
echo "<td><b>No</b></td>";
echo "<td><b>Industry Name</b></td>";
echo "</tr><tr>";
$i=1;
foreach ($row as $key =>$val) {
   echo "<td>".$i."</td>";
   echo "<td>".$val['industry_name']."</td>";
   echo "</tr>";
   $i++;	
}
echo "</table>";

echo form_close();



?> 
