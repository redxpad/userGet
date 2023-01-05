<?php
require_once('crest.php');
$user = CRest::call('user.get', [
    'ID' => 1
])['result'][0];
$file = base64_encode(file_get_contents($user['PERSONAL_PHOTO']));
