<?php

function generateNewPassword($length){
    $uppercaseLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $lowercaseLetters = ['a', 'b','c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's','t', 'u', 'v', 'w', 'x', 'y', 'z'];
    $specialCharacters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '+', '-', '.', '~', '|', '<', '>', '=', '-', '_', '/', ':', ';', '?', '[', ']', '{', '}', '~'];
    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $filter = array_merge($uppercaseLetters, $lowercaseLetters, $specialCharacters, $numbers);
    $newPassword = [];
    while(count($newPassword) < $length){
        $newPassword[] = $filter[rand(0, (count($filter) - 1))];
    }
    return implode($newPassword);
}