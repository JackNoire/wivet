<?php

function testcaseCmp($a, $b) {
    return intval(explode("_", $a)[0]) - intval(explode("_", $b)[0]);
}

function mergeResult() {
    $files = glob("3*.dat");
    $result = array("starttime" => 0,
    "ipaddress" => "0.0.0.0",
    "record" => "0_0",
    "pageVisits" => array());
    foreach ($files as $file) {
        $dat = unserialize(file_get_contents($file));
        foreach ($dat["pageVisits"] as $key => $value) {
            if (array_key_exists($key, $result)) {
                $result["pageVisits"][$key]["noofaccess"] += $value["noofaccess"];
            } else {
                $result["pageVisits"][$key] = $value;
            }
        }
    }
    uksort($result["pageVisits"], "testcaseCmp");
    file_put_contents("0_0.dat",serialize($result));
    return $result;
}

?>
