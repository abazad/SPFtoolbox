<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

class IP{
    public function getDNS($hostname){        
        print_r(gethostbyname($hostname));
    }
}
$bullhorn = new IP;
$bullhorn->getDNS($_GET['domain']);


?>