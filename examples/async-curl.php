<?php
// create both cURL resources
$ch1 = curl_init();
$ch2 = curl_init();

// set URL and other appropriate options
curl_setopt($ch1, CURLOPT_URL, "http://localhost::3000");
curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_URL, "http://localhost::3000");
curl_setopt($ch2, CURLOPT_HEADER, 0);

//create the multiple cURL handle
$mh = curl_multi_init();

//add the two handles
curl_multi_add_handle($mh, $ch1);
curl_multi_add_handle($mh, $ch2);

//execute the multi handle
do {
    $status = curl_multi_exec($mh, $active);
    if ($active) {
        curl_multi_select($mh);
    }
} while ($active && $status == CURLM_OK);

//close the handles
curl_multi_remove_handle($mh, $ch1);
curl_multi_remove_handle($mh, $ch2);
curl_multi_close($mh);

?>
