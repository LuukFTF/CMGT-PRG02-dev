<?php 
/**
 * Calculate difference & convert to returntype
 *
 * @param int $firstDate First date in Y-m-d
 * @param int $lastDate  Second date in Y-m-d
 * @return float
 */
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

/**
 * Calculate difference from today & convert to returntype
 *
 * @param int $date First date in Y-m-d
 * @param int $inputtype Input Type
 * @param int $inputtype Return Type
 * @return float
 */
function dateTodayDiff($date, $inputtype = "date", $returnType = "days") {
    $currentDate = date("Y-m-d"); 
    $currentDatetime = date("Y-m-d H:i");

    switch ($inputtype) {
        case "date":
            $diff = dateDiff($currentDate, $date, $returnType);
        break;
        case "datetime":
            $diff = dateDiff($currentDatetime, $date, $returnType);
        break;
        default: $diff = dateDiff($currentDate, $date, $returnType);
    }

    return $diff;
}

/**
 * Calculate difference of today and birthday & convert to returntype
 *
 * @param int $birthday birthdate in Y-m-d
 * @param int $inputtype Input Type
 * @param int $inputtype Return Type
 * @return float
 */
function dateBirthdayTodayDiff($birthday, $inputtype = "date", $returnType = "days") {

    $currentTime = time();
    $birthday = strtotime($birthday);

    while ($birthday < $currentTime) {
        $birthday = strtotime("+1 year", $birthday);
    }

    $birthday = date("Y-m-d", $birthday);

    $diff = dateTodayDiff($birthday, $inputtype, $returnType);

    return ceil($diff);
}
?>