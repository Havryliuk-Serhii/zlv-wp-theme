<?php
	if( isset( $_POST['comment'] ) || isset( $_POST['message'] ) )
	exit;
 
require( dirname(__FILE__) . '/wp-load.php');
 
if( isset( $_POST['name'] )
  && isset( $_POST['phone'] ) 
  && isset( $_POST['message'] ) ) {
 
	$headers = array(
		"Content-type: text/html; charset=utf-8",
		"From: " . $_POST['name'] . " <" . $_POST['phone'] . ">"
	);
 
	if( wp_mail( get_option('admin_email'), 'Сообщение с сайта', wpautop( $_POST['message'] ), $headers ) ) {
		header('Location:' . site_url('/contact?msg=success') );
		exit;
	} 
}
 
header('Location:' . site_url('/contact?msg=error') );
exit;