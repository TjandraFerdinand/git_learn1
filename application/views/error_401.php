<?php




$config['permitted_uri_chars'] = '一-龠ぁ-んァ-ヴーａ-ｚＡ-Ｚ０-９a-z 0-9~%.:_-';

search 'permitted_uri_chars' in system directory

system/core/URI.php

	public function filter_uri(&$str)
	{
		if ( ! empty($str) && ! empty($this->_permitted_uri_chars) && ! preg_match('/^['.$this->_permitted_uri_chars.']+$/i'.(UTF8_ENABLED ? 'u' : ''), $str))
		{
			show_error('The URI you submitted has disallowed characters.', 400);
		}
	}

?>
