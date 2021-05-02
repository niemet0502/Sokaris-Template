<?php

use Illuminate\Contracts\Validation\Validator;

function errorsToArray (Validator $validation) {

    $errors = $validation->errors();
    $errors_list = [];

    foreach($errors->messages() as $key => $value){

        if (is_array($value)) {

            foreach ($value as $item) {
                array_push($errors_list, $item);
            }
        } else {
            array_push($errors_list, $value);
        }
    }

    return $errors_list;
}


