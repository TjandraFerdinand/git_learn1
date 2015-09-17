<?php
$csrf = array(
        'csrf_name' => $this->security->get_csrf_token_name(),
        'csrf_hash' => $this->security->get_csrf_hash()
);

echo form_open(base_url().'task2/admin/i/confirm');

?>
<input type="hidden" name="<?=$csrf['csrf_name'];?>" value="<?=$csrf['csrf_hash'];?>" />
<?php
echo "<p>".form_label('Industry Name')." : ".form_input('a_i_name',set_value('a_i_name'))."</p>";
echo form_error('a_i_name');

echo form_submit('mysubmit', 'Submit Industry');

echo form_close();



?> 
