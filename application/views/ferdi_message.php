<?php

echo form_open(base_url().'ferdi/send');


echo "<p>".form_label('Username')." : ".form_input('username')."</p>";
echo "<p>".form_label('Name')." : ".form_input('name')."</p>";
echo "<p>".form_label('Password')." : ".form_password('password')."</p>";
echo "<p>".form_label('Gender')." : ".form_label('Male').form_radio('gender', 'Male', TRUE).form_label('Female').form_radio('gender', 'Female')."</p>";


echo form_submit('mysubmit', 'Submit Post!');

echo form_close();
/*
echo ferHelp();
 
echo $call1;
echo "<br><br>";
echo $call2;

echo form_fieldset('Address Information');


echo form_open('email/send');

echo form_input('username', 'johndoe')."<bR>";

$options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );

$shirts_on_sale = array('small', 'large');

echo form_dropdown('shirts', $options, 'large');

echo form_checkbox('newsletter', 'accept', TRUE);
echo form_checkbox('newsletter', 'accept', TRUE);
echo form_checkbox('newsletter', 'accept', TRUE);


echo form_radio('newsletter1', 'accept', TRUE);

echo form_button('name','content');

echo form_close();

echo form_fieldset_close(); 
*/
?>
