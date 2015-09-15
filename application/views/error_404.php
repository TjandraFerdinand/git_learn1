<?php
class MY_Exceptions extends CI_Exceptions
   {
      public function show_error($heading, $message, $template = 'error_general', $status_code = 500)
      {
         swith($status_code){
           case: 401
              $template = 'error_401';
           case: 400
              if $message match 'has disallowed characters'
                   ### question $config['permitted_uri_chars'] = '一-龠ぁ-んァ-ヴーａ-ｚＡ-Ｚ０-９a-z 0-9~%.:_-';

                   $template = 'error_400_permitted_uri_chars';
              else
                  $template = 'error_400';
              end
              
         }
         $this->parent($heading, $message, $template, $status_code);
      }
?>
