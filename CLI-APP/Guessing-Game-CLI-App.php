<!-- shebang-->
<!--#! /usr/bin/env php-->
<!--#! /usr/bin/php-->
<?php
// web server max_execution_time = 30s (limited)
// CLI max_execution_time = 0s (unlimited)
$guessNumber = rand(1, 100);

while (true){
    $input_number = (int) readline("Enter a Number: ");
//    printf("Enter number :"); fscanf(STDIN, "%d", $input_number); // same up line
    if($input_number > $guessNumber){
        printf("TRy a lower number! \n");
    }else if($input_number < $guessNumber){
        printf("TRy a Bigger number! \n");
    }else{
        printf("Congrats! You guessed it right");
        break;
    }

}
