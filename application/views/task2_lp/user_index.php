<?php
$csrf = array(
        'csrf_name' => $this->security->get_csrf_token_name(),
        'csrf_hash' => $this->security->get_csrf_hash()
);

echo form_open(base_url().'lp_test2/user_confirm');

?>

<html>
<body>

<h1>Landing Page Site Test 2 Ferdinand </h1>
<input type="hidden" name="<?=$csrf['csrf_name'];?>" value="<?=$csrf['csrf_hash'];?>" />
<?php
echo "<p>".form_label('Username')." : ".form_input('username',set_value('username'))."</p>";
echo form_error('username');

echo "<p>".form_label('Address')." : ".form_input('address',set_value('address'))."</p>";
echo form_error('address');

echo "<p>".form_label('Phone')." : ".form_input('phone',set_value('phone'))."</p>";
echo form_error('phone');

echo "<p>".form_label('Email')." : ".form_input('email',set_value('email'))."</p>";
echo form_error('email');

echo "<p>".form_label('Industry')." : <br>";
foreach ($row_i as $key =>$val) {
   echo form_checkbox('industry[]', $val['industry_id'], set_checkbox('industry[]',$val['industry_id']))." ".$val['industry_name']."<br>"; 
  
}
echo form_error('industry[]');

echo "<p>".form_label('Occupation')." : <br>";
foreach ($row_o as $key =>$val) {
   echo form_checkbox('occupation[]', $val['occupation_id'], set_checkbox('occupation[]',$val['occupation_id']) )." ".$val['occupation_name']."<br>";      
  
}
echo form_error('occupation[]');

echo "<br><br>";
echo form_submit('mysubmit', 'Submit Post!');

echo form_close();
?>


</body>
</html>
