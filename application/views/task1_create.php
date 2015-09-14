<?php

echo form_open(base_url().'user/confirm');

echo "<p>".form_label('Name')." : ".form_input('name')."</p>";
echo "<p>".form_label('Phone')." : ".form_input('phone')."</p>";
echo "<p>".form_label('Email')." : ".form_input('email')."</p>";
echo form_submit('mysubmit', 'Submit Post!');

echo form_close();



?>
