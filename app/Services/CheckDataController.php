<?php

namespace App\Services;

class CheckDataController{
    public static function checkGender($contact){
        if( $contact->gender === 0 ){
            $gender = 'Male';
        } elseif ( $contact->gender === 1 ){
            $gender = 'Female';
        } else {
            $gender = 'Unisex';
        }
        return $gender;
    }
    public static function checkAge($contact){
        if( $contact->age === 0 ){
            $age = '1~9';
        } elseif ( $contact->age === 1 ){
            $age = '10~19';
        } else {
            $age = '20~29';
        }

        return $age;
    }
}