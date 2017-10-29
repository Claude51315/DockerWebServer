<?php
    require('func.php');
    $hash = $_POST['hash'];
    $pdo = connectDB();
    $ret = get_receiver_by_hash($pdo, $hash);
    if(!ret){
        echo 'Invalid ID';
    
    }
    $reply = [
        "name" => $ret['name'],
        "adj1" => $ret['adj1'], 
        "adj2" => $ret['adj2']
    ];
    array_walk_recursive($reply, function(&$value, $key) {
    if(is_string($value)) {
        $value = urlencode($value);
    }
    });    
    echo urldecode(json_encode(($reply)));
?>
