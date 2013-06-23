<?php
//do not allow direct access
if ( strpos(strtolower($_SERVER['SCRIPT_NAME']),strtolower(basename(__FILE__))) ) {
  header('HTTP/1.0 403 Forbidden');
  exit('Forbidden');
}
//**AUTO-GENERATED DATA, DO NOT HAND EDIT!**
//Settings for 'Fast Secure Contact Form' PHP Script
$array = array (
  'form_name' => '',
  'welcome' => '',
  'email_to' => 'Hertfordshire Construction,info@hertfordshireconstruction.co.uk',
  'php_mailer_enable' => 'phpmailer',
  'email_from' => '',
  'email_from_enforced' => 'false',
  'email_bcc' => '',
  'email_reply_to' => '',
  'email_subject' => 'Hertfordshire Construction Contact:',
  'email_subject_list' => 'Request a Quote
Available Services
General Contact',
  'name_format' => 'name',
  'name_type' => 'required',
  'email_type' => 'required',
  'subject_type' => 'required',
  'message_type' => 'required',
  'preserve_space_enable' => 'false',
  'max_fields' => '4',
  'double_email' => 'true',
  'name_case_enable' => 'false',
  'sender_info_enable' => 'true',
  'domain_protect' => 'true',
  'email_check_dns' => 'false',
  'email_html' => 'true',
  'smtp_enable' => 'false',
  'smtp_host' => 'smtp.gmail.com',
  'smtp_encryption' => 'ssl',
  'smtp_port' => '465',
  'smtp_auth_enable' => 'true',
  'smtp_user' => 'you@gmail.com',
  'smtp_pass' => 'YourPassword',
  'akismet_disable' => 'false',
  'akismet_send_anyway' => 'true',
  'captcha_enable' => 'true',
  'captcha_difficulty' => 'medium',
  'captcha_small' => 'false',
  'captcha_no_trans' => 'false',
  'enable_audio' => 'false',
  'enable_audio_flash' => 'false',
  'redirect_enable' => 'true',
  'redirect_seconds' => '3',
  'redirect_url' => 'http://hertfordshireconstruction.co.uk/contact.php',
  'redirect_query' => 'true',
  'redirect_ignore' => '',
  'redirect_rename' => '',
  'redirect_add' => '',
  'redirect_email_off' => 'false',
  'silent_send' => 'off',
  'silent_url' => '',
  'silent_ignore' => '',
  'silent_rename' => '',
  'silent_add' => '',
  'silent_email_off' => 'false',
  'border_enable' => 'true',
  'ex_fields_after_msg' => 'false',
  'date_format' => 'mm/dd/yyyy',
  'cal_start_day' => '0',
  'time_format' => '12',
  'attach_types' => 'doc,pdf,txt,gif,jpg,jpeg,png',
  'attach_size' => '1mb',
  'textarea_html_allow' => 'false',
  'enable_areyousure' => 'false',
  'auto_respond_enable' => 'false',
  'auto_respond_html' => 'false',
  'auto_respond_from_name' => 'Hertfordshire Construction',
  'auto_respond_from_email' => 'info@hertfordshireconstruction.co.uk',
  'auto_respond_reply_to' => 'info@hertfordshireconstruction.co.uk',
  'auto_respond_message' => '',
  'auto_respond_subject' => '',
  'req_field_indicator' => ' *',
  'req_field_label_enable' => 'true',
  'req_field_indicator_enable' => 'true',
  'form_style' => 'width:299px;',
  'border_style' => 'border: 1px solid #b1b6bb; padding:10px; background: #000;',
  'required_style' => 'text-align:left; color:#C00;',
  'notes_style' => 'text-align:left;',
  'title_style' => 'text-align:left; padding-top:5px;',
  'select_style' => 'text-align:left; width:273px;',
  'field_style' => 'text-align:left; margin:0; width:269px;',
  'field_div_style' => 'text-align:left;',
  'error_style' => 'text-align:left; color:red;',
  'captcha_div_style_sm' => 'width: 175px; height: 50px; padding-top:2px;',
  'captcha_div_style_m' => 'width: 250px; height: 65px; padding-top:2px;',
  'captcha_input_style' => 'text-align:left; margin:0; width:50px;',
  'submit_div_style' => 'text-align:left; padding-top:8px;',
  'button_style' => 'cursor:pointer; margin:0;',
  'reset_style' => 'cursor:pointer; margin:0;',
  'powered_by_style' => 'font-size:x-small; font-weight:normal; padding-top:5px;',
  'field_size' => '40',
  'captcha_field_size' => '6',
  'text_cols' => '30',
  'text_rows' => '10',
  'aria_required' => 'false',
  'title_border' => 'Online Contact',
  'title_dept' => '',
  'title_select' => '',
  'title_name' => '',
  'title_fname' => '',
  'title_lname' => '',
  'title_mname' => '',
  'title_miname' => '',
  'title_email' => '',
  'title_email2' => '',
  'title_email2_help' => '',
  'title_subj' => '',
  'title_mess' => '',
  'title_capt' => '',
  'title_submit' => '',
  'title_reset' => '',
  'title_areyousure' => '',
  'text_message_sent' => '',
  'tooltip_required' => '',
  'tooltip_captcha' => '',
  'tooltip_audio' => '',
  'tooltip_refresh' => '',
  'tooltip_filetypes' => '',
  'tooltip_filesize' => '',
  'enable_reset' => 'false',
  'enable_credit_link' => 'true',
  'error_contact_select' => '',
  'error_name' => '',
  'error_email' => '',
  'error_email2' => '',
  'error_field' => '',
  'error_subject' => '',
  'error_message' => '',
  'error_input' => '',
  'error_captcha_blank' => '',
  'error_captcha_wrong' => '',
  'error_correct' => '',
  'ex_field1_label' => '',
  'ex_field1_type' => 'text',
  'ex_field1_default' => '0',
  'ex_field1_default_text' => '',
  'ex_field1_max_len' => '',
  'ex_field1_label_css' => '',
  'ex_field1_input_css' => '',
  'ex_field1_attributes' => '',
  'ex_field1_regex' => '',
  'ex_field1_regex_error' => '',
  'ex_field1_req' => 'false',
  'ex_field1_notes' => '',
  'ex_field1_notes_after' => '',
  'ex_field2_label' => '',
  'ex_field2_type' => 'text',
  'ex_field2_default' => '0',
  'ex_field2_default_text' => '',
  'ex_field2_max_len' => '',
  'ex_field2_label_css' => '',
  'ex_field2_input_css' => '',
  'ex_field2_attributes' => '',
  'ex_field2_regex' => '',
  'ex_field2_regex_error' => '',
  'ex_field2_req' => 'false',
  'ex_field2_notes' => '',
  'ex_field2_notes_after' => '',
  'ex_field3_label' => '',
  'ex_field3_type' => 'text',
  'ex_field3_default' => '0',
  'ex_field3_default_text' => '',
  'ex_field3_max_len' => '',
  'ex_field3_label_css' => '',
  'ex_field3_input_css' => '',
  'ex_field3_attributes' => '',
  'ex_field3_regex' => '',
  'ex_field3_regex_error' => '',
  'ex_field3_req' => 'false',
  'ex_field3_notes' => '',
  'ex_field3_notes_after' => '',
  'ex_field4_label' => '',
  'ex_field4_type' => 'text',
  'ex_field4_default' => '0',
  'ex_field4_default_text' => '',
  'ex_field4_max_len' => '',
  'ex_field4_label_css' => '',
  'ex_field4_input_css' => '',
  'ex_field4_attributes' => '',
  'ex_field4_regex' => '',
  'ex_field4_regex_error' => '',
  'ex_field4_req' => 'false',
  'ex_field4_notes' => '',
  'ex_field4_notes_after' => '',
);
?>