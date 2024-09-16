<?php

$data = json_decode(file_get_contents('http://forex.cbm.gov.mm/api/latest'));

print_r($data);

?>
