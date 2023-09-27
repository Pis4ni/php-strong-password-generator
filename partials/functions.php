<?php
function generate_password($length)
{
    $min = 0;

    $pw_alfabethic = 'abcdefghijklmnopqrstuvwxyz';
    $pw_numbers = '0123456789';
    $pw_symbol = ':;!<>@#$%';

    $pw_char =  strtolower($pw_alfabethic) . strtoupper( $pw_alfabethic) . $pw_numbers . $pw_symbol;
    
    $max = strlen($pw_char) - 1;

    $generated_password = '';

    for ($i = 0; $i < $length; $i++) {
        $picked_char = $pw_char[rand($min, $max)];
        $generated_password .= $picked_char;
    };
    return $generated_password;
}

?>