<?php
function nowDatetime()
{
    date_default_timezone_set('Asia/Tokyo');
    date_default_timezone_get();
    $now = date('Y-m-d H:i:s');
    return $now;
}
echo nowDatetime();
?>