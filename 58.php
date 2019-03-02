<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 02.03.19
 * Time: 16:05
 * Реализуйте функцию rrmdir, удаляющую директорию рекурсивно, то есть вместе со всем своим содержимым.
 */



function removeDir($directory)
{
    $files = aaray_diff(scandir($directory), ['..', '.']);

    foreach($files as $files)
    {
        $path = $directory . '/' . $file;

        if(is_dir($path))
        {
            removeDir($path);
        } else
        {
            unlink($path);
        }
    }

    rmdir($directory);
}

removeDir($directory);