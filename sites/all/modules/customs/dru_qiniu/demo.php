<?php

require_once("qiniu/io.php");
require_once("qiniu/rs.php");
require_once("qiniu/fop.php");

$accessKey = 'QqX1uY0DSDKGh8dm-llqgBS3L_288463_AwEaI5H';
$secretKey = 'kd-Kfly7qwDAx0HzsCZ6OKXPPMyUVh088ZU3_S9B';

$bucket = 'liangyou';
$key1 = 'http://liangyou2.nissigz.com:15200/gv/gv131217.mp3';
// $key1 = 'gv131217.mp3';
$domain = 'phpsdk.qiniudn.com';


Qiniu_SetKeys($accessKey, $secretKey);
$putPolicy = new Qiniu_RS_PutPolicy($bucket);
$upToken = $putPolicy->Token(null);
$putExtra = new Qiniu_PutExtra();
$putExtra->Crc32 = 1;
list($ret, $err) = Qiniu_PutFile($upToken, $key1, __file__, $putExtra);
echo "====> Qiniu_PutFile result: \n";
if ($err !== null) {
    var_dump($err);
} else {
    var_dump($ret);
}


// $accessKey = 'QqX1uY0DSDKGh8dm-llqgBS3L_288463_AwEaI5H';
// $secretKey = 'kd-Kfly7qwDAx0HzsCZ6OKXPPMyUVh088ZU3_S9B';
// Qiniu_setKeys($accessKey, $secretKey);

// $client = new Qiniu_MacHttpClient(null);


//------------------------------------rs-----------------------------------------

// list($ret, $err) = Qiniu_RS_Stat($client, $bucket, $key);
// echo "\n\n====> Qiniu_RS_Stat result: \n";
// if ($err !== null) {
// 	var_dump($err);
// } else {
// 	var_dump($ret);
// }

// $err = Qiniu_RS_Copy($client, $bucket, $key, $bucket, $key1);
// echo "\n\n====> Qiniu_RS_Copy result: \n";
// if ($err !== null) {
// 	var_dump($err);
// } else {
// 	echo "Success! \n";
// }

// $err = Qiniu_RS_Delete($client, $bucket, $key);
// echo "\n\n====> Qiniu_RS_Delete result: \n";
// if ($err !== null) {
// 	var_dump($err);
// } else {
// 	echo "Success! \n";
// }

// $err = Qiniu_RS_Move($client, $bucket, $key1, $bucket, $key);
// echo "\n\n====> Qiniu_RS_Move result: \n";
// if ($err !== null) {
// 	var_dump($err);
// } else {
// 	echo "Success! \n";
// }


// //------------------------------------io-----------------------------------------

// $putPolicy = new Qiniu_RS_PutPolicy($bucket);
// $upToken = $putPolicy->Token(null);
// list($ret, $err) = Qiniu_Put($upToken, $key1, "Qiniu Storage!", null);
// echo "\n\n====> Qiniu_Put result: \n";
// if ($err !== null) {
// 	var_dump($err);
// } else {
// 	var_dump($ret);
// }
// Qiniu_RS_Delete($client, $bucket, $key1);

// $putExtra = new Qiniu_PutExtra();
// $putExtra->Crc32 = 1;
// list($ret, $err) = Qiniu_PutFile($upToken, $key1, __file__, null);
// echo "\n\n====> Qiniu_PutFile result: \n";
// if ($err !== null) {
// 	var_dump($err);
// } else {
// 	var_dump($ret);
// }
// Qiniu_RS_Delete($client, $bucket, $key1);

// $baseUrl = Qiniu_RS_MakeBaseUrl($domain, $key);
// $getPolicy = new Qiniu_RS_GetPolicy();
// $privateUrl = $getPolicy->MakeRequest($baseUrl, null);
// echo "\n\n====> getPolicy result: \n";
// echo $privateUrl . "\n";


// //------------------------------------fop-----------------------------------------

// $imgInfo = new Qiniu_ImageInfo;
// $imgInfoUrl = $imgInfo->MakeRequest($baseUrl);
// $imgInfoPrivateUrl = $getPolicy->MakeRequest($imgInfoUrl, null);
// echo "\n\n====> imageInfo privateUrl: \n";
// echo $imgInfoPrivateUrl . "\n";

// $imgExif = new Qiniu_Exif;
// $imgExifUrl = $imgExif->MakeRequest($baseUrl);
// $imgExifPrivateUrl = $getPolicy->MakeRequest($imgExifUrl, null);
// echo "\n\n====> imageView privateUrl: \n";
// echo $imgExifPrivateUrl . "\n";

// $imgView = new Qiniu_ImageView;
// $imgView->Mode = 1;
// $imgView->Width = 60;
// $imgView->Height = 30;
// $imgViewUrl = $imgView->MakeRequest($baseUrl);
// $imgViewPrivateUrl = $getPolicy->MakeRequest($imgViewUrl, null);
// echo "\n\n====> imageView privateUrl: \n";
// echo $imgViewPrivateUrl . "\n";


