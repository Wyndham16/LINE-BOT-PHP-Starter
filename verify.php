<?php
$access_token = 'isiMdv0y3gQIJtA0RA9VQt29RNPZ60M1034R2qz4J4Cn6cyN//C+Zd6IshyKiwXKZ45XTTiD6ow7EiAurfT2vFAnW3Q8WXieHweUSo/8oVdopVepWnrhJHgFDOeCXejSOzpRuWHwCI/U09KYRwdsZQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
