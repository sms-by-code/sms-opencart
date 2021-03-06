<?php
$_['heading_title'] = 'SMS.BY SMS and messages service';
$_['button_save'] = 'Save';
$_['button_cancel'] = 'Cancel';
$_['button_test'] = 'Send test message';
$_['button_send'] = 'Send';
$_['button_refer'] = 'Create account';
$_['button_name'] = 'First name';
$_['button_lastname'] = 'Last name';
$_['button_address'] = 'Address';
$_['button_city'] = 'City';
$_['button_phone'] = 'Phone';
$_['button_comment'] = 'Comment';
$_['button_storename'] = 'Store name';
$_['button_orderid'] = 'Order ID';
$_['button_total'] = 'Total';
$_['button_status'] = 'Status';
$_['button_download'] = 'Download';
$_['button_clear'] = 'Clear';
$_['button_filter'] = 'Filter';
$_['button_create_alphaname'] = 'Create sign';

$_['tab_sending'] = 'Bulk Sms';
$_['tab_sending_info'] = 'Here you can send Bulk Sms to various user groups: News subscribers or any group you have. Just select a group you wish to send a message and it would be instantly delivered. For scheduled messages, please refer to {link}';
$_['tab_notice'] = 'Message templates';
$_['tab_notice_info'] = 'On that tab you can configure which sms is sent based on order status.';
$_['tab_gate'] = 'Settings';
$_['tab_gate_info'] = 'Here you need to add your token to make the module work. If you don’t have a token, feel free to get it here {link}';
$_['tab_log'] = 'Log';
$_['tab_log_info'] = 'On that tab you can view all the messages sent to your customers.';

$_['entry_to'] = 'To';
$_['entry_arbitrary'] = 'Phone';
$_['entry_sender'] = 'From';
$_['entry_message'] = 'Text';
$_['entry_enabled'] = 'Enable';
$_['entry_message_template'] = 'Message template for order status';
$_['button_get_token'] = 'Obtain token';
$_['entry_message_customer'] = 'Message template for customer';
$_['entry_message_admin'] = 'Message template for owner';
$_['entry_apitoken'] = 'API token';
$_['entry_username'] = 'Username';
$_['entry_password'] = 'Password';
$_['entry_phone'] = 'Phone owner';
$_['entry_balance'] = 'Balance';
$_['entry_characters'] = 'Characters';
$_['entry_date_start'] = 'Date start';
$_['entry_date_stop'] = 'Date stop';
$_['entry_status'] = 'Status';
$_['entry_phone'] = 'Phone';
$_['entry_text'] = 'Text';
$_['entry_startsend_log'] = 'Enable log ';
$_['entry_alphanames'] = 'SMS sender sign';
$_['entry_alphaname_name'] = 'Sign name';
$_['entry_alphaname_yur_name'] = 'Sender legal name';
$_['entry_alphaname_unp'] = 'Sender UNP (TaxID)';
$_['entry_alphaname_country_id'] = 'Country ID (for Russia 1)';
$_['entry_alphaname_postcode'] = 'Zip code';
$_['entry_alphaname_city'] = 'City';
$_['entry_alphaname_address'] = 'Address';
$_['entry_alphaname_name_category_id'] = 'Sign category ID';
$_['entry_alphaname_traffic_type_id'] = 'Traffic type ID';
$_['entry_alphaname_traffic_type_id1'] = 'Service';
$_['entry_alphaname_traffic_type_id2'] = 'Advertising';
$_['entry_alphaname_text_example'] = 'Text for example';
$_['entry_testmessage'] = 'Test message';
$_['entry_send_gate'] = 'API send gate';



$_['text_enable'] = 'enabled';
$_['text_disable'] = 'disabled';
$_['text_description'] = 'SMS-message SMS.BY 1.5.0)';
$_['text_newsletter'] = 'Subscribe to news';
$_['text_all'] = 'All';
$_['text_all_group'] = 'All of the group';
$_['text_newsletter_group'] = 'All subscribe to news of the group ';
$_['text_module'] = 'Modules';
$_['text_refresh'] = 'Refresh';
$_['text_money_add'] = 'Fill up balance';
$_['text_new_order'] = 'New order (customer)';
$_['text_order_change'] = 'Changed order status (customer)';
$_['text_order_change_notice'] = 'Send Only if you set "Notify the customer"';
$_['text_owner'] = 'Notification of the co-owner of the new order';
$_['text_send_success'] = 'Message sent';
$_['text_send_error'] = 'Error sending';
$_['text_no_result'] = 'No result';
$_['text_log_disabled'] = 'Log disabled in settings';
$_['text_arbitrary'] = 'Enter the phone number';
$_['text_rub'] = 'Rubles';

$_['column_text'] = 'Text';
$_['column_phone'] = 'Phone';
$_['column_date'] = 'Date';
$_['column_status'] = 'Status';
$_['column_sms_id'] = 'SMS id';

$_['help_message_template'] = 'The message that customer will get a change order status. {OrderID} - order id, {Status} - order status, {StoreName} - store name.';
$_['help_message_customer'] = 'The message that will get the customer to create a new order. {OrderID} - order id, {StoreName} - store name.';
$_['help_message_admin'] = 'The message that will get the owner to create a new order. {OrderID} - order id, {StoreName} - store name, {Total} - order price.';
$_['help_message'] = 'The message. {Name} - first name, {LastName} - last name, {StoreName} - store name.';
$_['help_sure'] = 'You are sure?';
$_['help_callback'] = 'Callback URL automatically added. If this did not happen, add manually in field "URL of the handler" on the site <a href="https://svmidi.sms.ru/?panel=apps&subpanel=cb" target="_blank">sms.ru</a>';
$_['help_arbitrary'] = 'Enter the phone or phones, separated by commas. For example: 79000000000,79000000001,79000000002';
$_['help_phone'] = 'Enter a comma-separated numbers to which messages will be sent a new order (89000000001,99220000002).';
?>