<?php

namespace app\models;

class Product extends AppModel
{
    public function loadImg($id)
    {
        $uploaddir = WWW . '/img/';

        $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
        for ($i = 1; $i < 4; $i++){
            if (!empty($_FILES['img'.$i]['name'])){
                $img_name = $_FILES['img'.$i]['name'];
                if($_FILES['img'.$i]['size'] > 512000){
                    $_SESSION['size'.$i] = "Картинка '" . $img_name . "' не добавлена. Размер не должен превышать 500 kb";
                    continue;
                }
                if(!in_array($_FILES['img'.$i]['type'], $types)){
                    $_SESSION['type'.$i] = "Картинка '" . $img_name . "' не добавлена. Допустимые расширения - .gif, .jpg, .png";
                    continue;
                }
                $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['img'.$i]['name'])); // расширение картинки
                $new_img_name = md5(time()).$i.".$ext";
                $uploadfile = $uploaddir.$new_img_name;
                $image = \R::dispense('img');
                $image->title = $new_img_name;
                $image->product_id = $id;
                \R::store($image);
                move_uploaded_file($_FILES['img'.$i]['tmp_name'], $uploadfile);
            }
        }
    }
}