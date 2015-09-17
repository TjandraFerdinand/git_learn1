<table border=0  cellspacing=5 cellpadding=20>
<tr>
<td valign="top">
<h2>User List Name</h2>
<!--USER LIST -->

<table border=1 cellspacing=0 cellpadding=5><tr>
<td><b>No</b></td>
<td><b>Name</b></td>
<td><b>Edit</b></td>
</tr><tr>
<?php
$i=1;
foreach ($row_u as $key =>$val) {
   	echo "<td>".$i."</td>";
	echo "<td>".$val['username']."</td>";
   	echo "<td><a href=".base_url()."task2/admin/u/detail/".$val['id'].">detail</a> </td>";
   	echo "</tr>";
$i++;
}
echo "</table>";
//END LINE USER LIST

?>
</td>
<td>
<?php

//OCCUPATION NAME
echo "<h2> List Occupation Name </h2>";

echo form_open(base_url().'task2/admin/o/create');

echo form_submit('mysubmit', 'Add Occupation Name!');
?>
<br><Br>

<table border=1 cellspacing=0 cellpadding=5><tr>
<td><b>No</b></td>
<td><b>Occupation Name</b></td>
</tr><tr>
<?php
$i=1;
foreach ($row_o as $key =>$val) {
   ?><td><?php echo $i; ?> </td>
   <td><?php echo $val['occupation_name']; ?></td>
   </tr>
   <?php $i++;
}
?>
</table>

<?php

echo form_close();
//END OF OCCUPATION LIST

?>
</td> <td>
<?php



//INDUSTRY LIST

echo "<h2> List Industry Name </h2>";
echo form_open(base_url().'task2/admin/i/create');

echo form_submit('mysubmit', 'Add Name Industry!');

echo "<br><Br>";

echo "<table border=1 cellspacing=0 cellpadding=5><tr>";
echo "<td><b>No</b></td>";
echo "<td><b>Industry Name</b></td>";
echo "</tr><tr>";
$i=1;
foreach ($row_i as $key =>$val) {
   echo "<td>".$i."</td>";
   echo "<td>".$val['industry_name']."</td>";
   echo "</tr>";
   $i++;
}
echo "</table>";

echo form_close();
//END OF INDUSTRY LIST




?>

</td>
</tr>
</table>
<?php
echo form_open(base_url().'task2/admin/logout');

echo form_submit('mysubmit', 'logout');
echo form_close();


?>
