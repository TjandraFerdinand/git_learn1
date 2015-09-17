<?php
/*
foreach ($row_o as $key => $value){
echo $value['occupation_name'];

}
exit;
*/
?>

<html>
<body>

<table bolder=1>
<tr>
   <td>Username</td><td> : </td><td><?php echo $row[0]['id']; ?></td>
</tr>
<tr>
   <td>Address</td><td> : </td><td><?php echo $row[0]['username']; ?></td>
</tr>
<t>
   <td>Phone</td><td> : </td><td><?php echo $row[0]['phone']; ?></td>
</tr>
<tr>
   <td>E-mail</td><td> : </td><td><?php echo $row[0]['email']; ?></td>
</tr>
<tr>
   <td>Industry</td><td> : </td><td><?php foreach ($row_i as $key => $value){
echo $value['industry_name']."<br>";

}
 ?></td>
</tr>
<tr>
   <td>Occupation</td><td> : </td><td><?php foreach ($row_o as $key => $value){
echo $value['occupation_name']."<br>";

}
 ?></td>
</tr>
<tr>
<td colspan="3"><a href= "http://test-ferdi.com/lp_test2/admin_list">Go back</a></td>
</tr>

</body>
</html>
