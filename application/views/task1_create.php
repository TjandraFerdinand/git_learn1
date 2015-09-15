<?php
$csrf = array(
        'csrf_name' => $this->security->get_csrf_token_name(),
        'csrf_hash' => $this->security->get_csrf_hash()
);

echo form_open(base_url().'user/confirm');

?>
<input type="hidden" name="<?=$csrf['csrf_name'];?>" value="<?=$csrf['csrf_hash'];?>" />
<?php
echo "<p>".form_label('Name')." : ".form_input('name',set_value('name'))."</p>";
echo form_error('name');

echo "<p>".form_label('Phone')." : ".form_input('phone',set_value('phone'))."</p>";
echo form_error('phone');

echo "<p>".form_label('Email')." : ".form_input('email',set_value('email'))."</p>";
echo form_error('email');

echo form_submit('mysubmit', 'Submit Post!');

echo form_close();



?>
