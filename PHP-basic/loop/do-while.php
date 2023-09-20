<?php

do{
    $email = readline("Enter your mail: ");
    echo "Confirmation email send to $email\n";
    $confirmation = readline("Did you find the email? (Yes/No): ");
}while($confirmation != "Yes");