<?php

function display_form_errors($validation, $field)
{
    if ($validation->hasError($field)) {
        # code...
        return $validation->getError($field);
    }else{

        return false ;

        return false;

    }

}