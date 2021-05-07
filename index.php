<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $searchNumber = $_POST["Read"];
    $donvi = [
        "0" => "",
        "1" => "one",
        "2" => "two",
        "3" => "three",
        "4" => "four",
        "5" => "five",
        "6" => "six",
        "7" => "seven",
        "8" => "eight",
        "9" => "nine"
    ];
    $hangchuc = [
        "0" => "",
        "1" => "",
        "2" => "twenty",
        "3" => "thirty",
        "4" => "fourty",
        "5" => "fifty",
        "6" => "sixty",
        "7" => "seventy",
        "8" => "eighty",
        "9" => "ninety",

    ];
    $dacbiet = [
        "0" => "ten",
        "1" => "eleven",
        "2" => "twelve",
        "3" => "thirteen",
        "4" => "fourteen",
        "5" => "fifteen",
        "6" => "sixteen",
        "7" => "seventeen",
        "8" => "eighteen",
        "9" => "nineteen",
    ];
    if ($searchNumber < "20") {
        switch ($searchNumber) {
            case 0 :
                echo 'zero';
                break;
            case 1 :
                echo 'one';
                break;
            case 2 :
                echo 'two';
                break;
            case 3 :
                echo 'three';
                break;
            case 4 :
                echo 'four';
                break;
            case 5 :
                echo 'five';
                break;
            case 6 :
                echo 'six';
                break;
            case 7 :
                echo 'seven';
                break;
            case 8 :
                echo 'eight';
                break;
            case 9 :
                echo 'nine';
                break;
            case 10 :
                echo 'ten';
                break;
            case 11 :
                echo 'eleven';
                break;
            case 12 :
                echo 'twelve';
                break;
            case 13:
                echo 'thirteen';
                break;
            case 14:
                echo 'fourteen';
                break;
            case 15:
                echo 'fifteen';
                break;
            case 16:
                echo 'sixteen';
                break;
            case 17:
                echo 'seventeen';
                break;
            case 18:
                echo "eighteen";
                break;
            case 19:
                echo "nineteen";
                break;
        }
    } else if ($searchNumber < "100") {
        $a = "";
        $b = "";
        // hang don vi
        foreach ($donvi as $value1 => $speech1) {
            if ($value1 == $searchNumber[1]) {
                $a = $speech1;
            }
        }
        // hang chuc
        foreach ($hangchuc as $value2 => $speech2) {
            if ($value2 == $searchNumber[0]) {
                $b = $speech2;
            }
        }
        echo " $b $a";
    } else if ($searchNumber < "1000") {
        $c = "";
        $b = "";
        $a = "";

        // hang don vi
        foreach ($donvi as $value1 => $speech1) {
            if ($value1 == $searchNumber[2]) {
                $a = $speech1;
            }
        }
        // hang chuc
        foreach ($hangchuc as $value2 => $speech2) {
            if ($value2 == $searchNumber[1]) {
                if ($searchNumber[1] == "1"){
                    foreach ($dacbiet as $valueDacbiet => $speecDacbiet){
                        if ($valueDacbiet == $searchNumber[2] ){
                            $a = $speecDacbiet;
                            $b = "";
                        }
                    }
                }else{
                    $b = $speech2;
                }
            }
        }
        // hang tram
        foreach ($donvi as $value1 => $speech1) {
            if ($value1 == $searchNumber[0]) {
                $c = $speech1 . "hundred";
            }
        }
        echo "$c $b $a";
    }
}

?>
<form method="post">
<input type="text" name="Read" placeholder="Nhap so can doc"/>
<input type="submit" id="submit" value="Doc"/>
</form>
</body>
</html>
