<?php
$ip = "192.168.1.1";

if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo 'Valid IP';
} else {
    echo 'Not Valid IP';
}

?>