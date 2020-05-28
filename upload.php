<?php

    if (isset($_FILES['upload']['name'])) :
        $file = $_FILES['upload']['tmp_name'];
        $fileName = $_FILES['upload']['name'];
        $fileNameArray = explode('.',$fileName);
        $extension = end($fileNameArray);
        $newImageNmae = rand(). '.'.$extension;
        chmod('upload',0777);
        $allowedExtension = array('jpg', 'jpeg', 'png','gif');
        if (in_array(strtolower($extension), $allowedExtension)) :
            move_uploaded_file($file,'upload/'.$newImageNmae);
            $functionNumber = $_GET['CKEditorFuncNum'];
            $imgURL = 'upload/'.$newImageNmae;
            $message = 'Image uploaded seucessfully';
            $script = "
            <script>
                window.parent.CKEDITOR.tools.callFunction($functionNumber, '$imgURL', '$message');
            </script>";
            echo $script;
        
        endif;
    endif;
?>