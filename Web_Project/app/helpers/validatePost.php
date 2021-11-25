<?php 

function validatePost($post)
{
    $errors = array();

    if(empty($post['title'])){
        array_push($errors, 'Tiêu đề là bắt buộc');
    }

    if(empty($post['body'])){
        array_push($errors, 'Body là bắt buộc');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if($existingPost) {
        if(isset($post['update-post']) && $existingPost['id'] != $post['id']){
            array_push($errors, "Tiêu đề đã tồn tại");
        }
        if(isset($post['add-post'])) {
            array_push($errors, "Tiêu đề đã tồn tại");
        }
    }

    return $errors;
}