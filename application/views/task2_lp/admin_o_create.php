<?php
$csrf = array(
        'csrf_name' => $this->security->get_csrf_token_name(),
        'csrf_hash' => $this->security->get_csrf_hash()
);

echo form_open(base_url().'task2/admin/o/confirm');

?>
<input type="hidden" name="<?=$csrf['csrf_name'];?>" value="<?=$csrf['csrf_hash'];?>" />
<?php
echo "<p>".form_label('Occupation Name')." : ".form_input('a_o_name',set_value('a_o_name'))."</p>";
echo form_error('a_o_name');

echo form_submit('mysubmit', 'Submit Occupation!');

echo form_close();



?> 
