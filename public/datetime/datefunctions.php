<?php 

function dateDiff($firstDate, $lastDate, $returnType) {
    $diff = strtotime($lastDate) - strtotime($firstDate);

    switch ($returnType) {
        case "days":
            $diff = round( $diff / (24 * 60 * 60) );
        break;
        default: $diff;
    }
    return $diff;
}



?>