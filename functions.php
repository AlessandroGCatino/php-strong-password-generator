<?php

session_start();

function genRandomChar(){
    $out = "";
    $charSel = rand(1,4);
    switch ($charSel){
        case 1:
            $out = chr(rand(48,57));
            break;
        case 2:
            $out = chr(rand(65,90));
            break;
        case 3:
            $out = chr(rand(97,122));
            break;
        case 4:
            $out = chr(rand(35,38));
            break;
        default:
            $out = "";
    }
    return $out;
}

function genPW($leng){
    $generatedPW = "";
    for($i=0; $i<$leng; $i++){
        $generatedPW .= genRandomChar();
    }
    $_SESSION["password"] = $generatedPW;
    
}

?>