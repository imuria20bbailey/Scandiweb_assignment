<?php

function loadClass ( $class_name)
{

    $path_to_file = "classes/". $class_name .".php";

    if (file_exists($path_to_file))
    {
        require_once ($path_to_file);
    }

}




?>