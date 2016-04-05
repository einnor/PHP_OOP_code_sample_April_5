<?php
class SendEmail{
	public function __construct(){

  }
	public function __destruct(){

  }
	public function email($to, $subject, $message) {
		$Headers  = "MIME-Version: 1.0\n";
		$Headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$Headers .= "From: cytonn <noreply@cytonn.com>\n";
		$Headers .= "Reply-To: <support@cytonn.com>\n\n";
		$Headers .= "X-Sender: <support@cytonn.com>\n";
		$Headers .= "X-Mailer: PHP\n";
		$Headers .= "X-Priority: 1\n";
		$Headers .= "Return-Path: <support@cytonn.com>\n";
		if(!mail($to, $subject, $message, $Headers)) {
			echo "Oops! Something went wrong!"
			return false;
		}
		return true;
	}
}
?>
