<?php
echo form_open(base_url().'task2/admin/cek_login');


echo "<p>".form_label('Userame')." : ".form_input('username')."</p>";
echo "<p>".form_label('Password')." : ".form_password('password')."</p>";
echo form_submit('mysubmit', 'Login!');
echo $this->input->post('info');
echo form_close();
