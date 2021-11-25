<?php

function validateUser($user)
{
    $errors = array();

    if(empty($user['username'])){
        array_push($errors, 'Username là bắt buộc');
    }

    if(empty($user['email'])){
        array_push($errors, 'Email là bắt buộc');
    }

    if(empty($user['password'])){
        array_push($errors, 'Password là bắt buộc');
    }

    if($user['passwordConf'] !== $user['password']){
        array_push($errors, 'Password không trùng khớp');
    }

    // $existingUser = selectOne('users', ['email' => $user['email']]);
    // if($existingUser) {
    //     array_push($errors, "Email đã tồn tại");
    // }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if($existingUser) {
        if(isset($user['update-user']) && $existingUser['id'] != $user['id']){
            array_push($errors, "Email đã tồn tại");
        }
        if(isset($user['create-admin'])) {
            array_push($errors, "Email đã tồn tại");
        }
    }

    return $errors;
}

function validateLogin($user)
{
    $errors = array();

    if(empty($user['username'])){
        array_push($errors, 'Username là bắt buộc');
    }

    if(empty($user['password'])){
        array_push($errors, 'Password is là bắt buộc');
    }

    return $errors;
}