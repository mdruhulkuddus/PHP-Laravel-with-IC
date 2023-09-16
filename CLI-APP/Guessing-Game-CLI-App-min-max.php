<?php
$options = getopt('h::', ['min::', 'max::']);
$min = (int)(isset($options['min']) ? $options['min'] : 1);
$max = (int)(isset($options['max']) ? $options['max'] : 100);
//var_dump($min, $max);
$guessNumber = rand($min, $max);

if(isset($options['h'])){
    printf("This a guessing game application!");
}else{
    while (true){
        $input_number = (int) readline("Enter a Number: ");
        if($input_number > $guessNumber){
            printf("TRy a lower number! \n");
        }else if($input_number < $guessNumber){
            printf("TRy a Bigger number! \n");
        }else{
            printf("Congrats! You guessed it right");
            break;
        }

    }
}


