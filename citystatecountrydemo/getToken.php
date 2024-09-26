<?php
// get_token.php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.universal-tutorial.com/api/getaccesstoken");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Accept: application/json",
    "api-token:Bj2MV5s2ewDZH6GvJI3Z2O164a0Gmane2BD6giI6MZtbeoq4eYrNsyuwC7cBlhv2AEo", // Replace with your API token
    "user-email: rinkaladesara.tops@gmail.com"     // Replace with your email used for the API
));

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$tokenData = json_decode($response, true);
echo $tokenData['auth_token'];// This will return the access token
?>
