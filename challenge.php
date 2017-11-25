<?php
$Railing = $_POST['Railing'];
$Posts = $_POST['Posts'];
$Length = $_POST['Length'];
/*
* Calculating the Railings
* Take the input from HTML and calculate it
* $Railing
* return $Length & $Posts
*/
function Railing($Railing) {
    $Length = $Railing * 1.60 + 0.10;
    return "We will have " . $Length . "m. Length and need " . round($Length/1.60 +1) . " Posts";
}
/*
* Calculating the Posts
* Take the input from HTML and calculate it
* $Posts
* return $Length & $Railing
*/
    function Posts($Posts) {
        $Length = ($Posts - 1) * 1.60 + 0.10;
        return "We must have " . $Length . " meters Length and " . round($Posts - 1) . " Railings";
    }
/*
* Calculating the Length
* Take the input from HTML and calculate it
* $Length
* return $Posts & $Railing
*/
    function Length($Length) {
        $Railing = round($Length/1.7);
        return "We must have " . $Railing . " Railings and " . round($Railing + 1) . " Posts";
    }
/*
* Calculate the final result
* Iterate throught the functions in order to get output
* $Railing, $Posts, $Length
 * return $Railing or $Posts or $Length
*/
    function Execution($Railing, $Posts, $Length) {
        if($Railing == True && $Railing >= 1 ) {
            return Railing($Railing);
        }
        elseif($Posts == True && $Posts >= 2 ) {
            return Posts($Posts);
        }
        elseif($Length == True && $Length >= 1.70){
            return Length($Length);
        }
        else {
            return '<img src="please.jpg" alt="" width="326" height="400" />';
        }
    }
echo Execution($Railing, $Posts, $Length);