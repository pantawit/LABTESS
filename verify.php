<?php 
  $access_token = 'X8QHw9clTAnHHLoYqClNXCLV7wylUHQg1DcM7jvoJnG2sTWVMkOL3u9afRHLSv5CyAEHRfmZu/OPX4BXs+ldoi8AQY3rBOLNHabaCiE5fCwd8jFMrQHqPkb0/g2bKFZbLT54gijhPsiiugzzLC5nDgdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
