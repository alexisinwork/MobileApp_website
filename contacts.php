<?
if (array_key_exists('email', $_POST)) {
   $to = 'alexkuhtin1993@gmail.com';
   $subject = '��������� ���������� ����� � '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "���: ".$_POST['name']."\nEmail: ".$_POST['email']."\n";
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";

   mail($to, $subject, $message, $headers);
  echo $_POST['name'];
}
?>