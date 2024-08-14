<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://molodemo.site/agrilinkapi/payment/show_transactions',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization:  Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTcxMjg0MDMzNSwianRpIjoiNzBmNTc0MjgtM2JmZi00YmUwLWI0NzktNmUzOGJkNTQ3MzEwIiwidHlwZSI6ImFjY2VzcyIsInN1YiI6NDA2MDIyLCJuYmYiOjE3MTI4NDAzMzUsImV4cCI6MTcxMjg0NzUzNX0.05v25rwYtngcA23CPtu4_kADrzSCGx_ODwGv9JS2ymQ'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
