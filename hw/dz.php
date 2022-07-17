<?php

if ($_SERVER['REQUEST_METHOD']== 'POST'){
    if (!is_dir('upload')) {
    mkdir('upload');
    }
        
    $filePath = '';
        
    if(!empty($_FILES) && isset($_FILES['img'])){
        foreach (prup($_FILES['img']) as $file) {
            move_uploaded_file($file['tmp'], __DIR__ . "/" . 'upload' . '/' . $file['name']);
        }}
    }

    function prup($f){
    $return_data = [];
    $i = 0;
    foreach ($f['name'] as $k => $value) {
        $save_data = [
            'name' => checkname($value),
            'tmp' => $f['tmp_name'][$k]
        ];
        $return_data[$k] = $save_data;
    }
    return $return_data;
}
function checkname($stringi){
        if (file_exists('upload' . "/" . $stringi)) {
            $strarray = explode('.', $stringi);
         $kod = '';   
            for ($i = 1; $i <= 7; $i++){
                $kod .= chr(rand(65, 90));
            } 
        $new_name = $kod . '.' . $strarray[1];
        return checkname($new_name);
        $stringi = $new_name;
    }
    return $stringi;
}

$path = scandir('upload');

$sixp = [];
foreach ($path as $key => $k) {
    $info = [];
    if ($k != '.' && $k != '..') {
        $info['size'] = filesize('upload' . '/' . $k) . 'bytes';
        $info['path'] = __DIR__ . "/" . 'upload' . '/' . $k;
    }
    array_push($sixp , $info);
}
print_r($sixp);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <textarea name="content" id="editor"></textarea>
    <br>
    <input type="file" name="img[]" multiple>
    <br>
    <button type="submit">Send</button>
</form>
</body>
</html>