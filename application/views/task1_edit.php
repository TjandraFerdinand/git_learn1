<?php

echo form_open(base_url().'user/edit');

echo "<p>".form_label('Name')." : ".form_input('name',$user_detail_info['name'])."</p>";
echo "<p>".form_label('Phone')." : ".form_input('phone',$user_detail_info['phone'])."</p>";
echo "<p>".form_label('Email')." : ".form_input('email',$user_detail_info['email'])."</p>";
echo form_submit('mysubmit', 'Submit Post!');

echo form_close();



?>
