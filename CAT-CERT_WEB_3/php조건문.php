<?php
    $num1 = 10;
    $num2 = 4;

    if($num1 < $num2) {
        echo "A<B";
    }
    else if($num1 == $num2) {
        echo "A=B";
    }
    else{
        echo "A>B";
    }
?>

<?php
    $number = 1;
    switch($number) {
        case 0:
            echo "Number is 0";
            break;
        case 1:
            echo "Number is 1";
            break;
        default:
            echo "Number is not 0,1";
    }

?>
