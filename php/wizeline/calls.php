<?php
function countAPI($calls) {
    $tree = [];
    $key_count = 0;

    $x = 0;
    for ($i=0, $limit = count($calls); $i < $limit; $i++) {


        $hash = "--";
        $call = explode("/", substr($calls[$i], 1));
        foreach ($call as $value) {
            $tree[current($call)] = $value;
        }
    //
    //     foreach ($call as $value2) {
    //
    //         $call_str = $hash.$value2;
    //         // $pr_exists = (int) array_search($call_str, $tree);
    //
    //
    //         $tree[$call[$i]] = $value2;
    //         $hash .= "--";
    //         // $x++;
    //     }
    //
    }

    // foreach ($tree as $key => $value) {
    //     $tmp
    // }


        // $p_key = substr($value, 1, strposX($value, '/', 2)-1);
        //
        // if (!in_array("--".$p_key, $tree)) {
        //     array_push($tree, "--".$p_key);
        // } else {
        //
        // }




    return $tree;
}


$calls = [
        "/project1/subproject1/method1",
        "/project2/subproject1/method1",
        "/project1/subproject1/method1",
        "/project1/subproject2/method1",
        "/project1/subproject1/method2",
        "/project1/subproject2/method1",
        "/project2/subproject1/method1",
        "/project1/subproject2/method1"
];

$result = countAPI($calls);
var_dump($result);
