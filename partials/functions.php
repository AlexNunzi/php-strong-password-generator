<?php

function generateNewPassword($length, $unique, $characters, $numbersCheck, $special){
    $uppercaseLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $lowercaseLetters = ['a', 'b','c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's','t', 'u', 'v', 'w', 'x', 'y', 'z'];
    $specialCharacters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '+', '-', '.', '~', '|', '<', '>', '=', '-', '_', '/', ':', ';', '?', '[', ']', '{', '}', '~'];
    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $filter = []; 
    if($characters){
        $filter = array_merge($filter, $uppercaseLetters, $lowercaseLetters);
    } 
    if($numbersCheck){
        $filter = array_merge($filter, $numbers);
    } 
    if($special){
        $filter = array_merge($filter, $specialCharacters);
    } 
    $newPassword = [];
    while(count($newPassword) < $length){
        $newChar = $filter[rand(0, (count($filter) - 1))];
        if($unique){
            if(!in_array($newChar, $newPassword) && count($newPassword) < count($filter)){
                $newPassword[] = $newChar;
            } else if(count($newPassword) >= count($filter)){
                $newPassword[] = $newChar;
            }
        } else {
            $newPassword[] = $newChar;
        }
    }
    return implode($newPassword);
}