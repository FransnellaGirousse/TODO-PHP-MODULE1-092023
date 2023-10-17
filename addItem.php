<?php
    include('config/app.php');
    include('fct/request.php');


    $intitule = post('intitule');
    var_dump($intitule);
    if(!file_exists(FILE_NAME)){
        file_put_contents(FILE_NAME, serialize([]));
    }


    $items = unserialize(file_get_contents(FILE_NAME));
    $intems[] = [
        'checked'=>false,
        'intitule'=>$intitule
    ];
    file_put_contents(FILE_NAME, serialize([$items]));
   
    header('Location:index.php');