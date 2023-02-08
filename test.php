<?php
 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://365softwares.in/fe/api/v1/send");
curl_setopt($ch, CURLOPT_POST, 1);// set post data to true
curl_setopt($ch, CURLOPT_POSTFIELDS,"username=royalsecurities.trans&password=loilQ&unicode=false&from=ROYLSE&to=8240211820&text=123456 is your OTP for registering on royal securities portal&dltContentId=1707166003389213461");   // post data
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
curl_close ($ch);


//this is api
// https://365softwares.in/fe/api/v1/send?username=royalsecurities.trans&password=loilQ&unicode=false&from=ROYLSE&to=8240211820&text=123456 is your OTP for registering on royal securities portal&dltContentId=1707166003389213461

?>