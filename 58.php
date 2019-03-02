<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 02.03.19
 * Time: 16:05
 * Реализуйте функцию rrmdir, удаляющую директорию рекурсивно, то есть вместе со всем своим содержимым.
 *
 * @param $directory
 */


function removeDir($directory)
{
    $files = array_diff(scandir($directory, SCANDIR_SORT_NONE), ['..', '.']);

    foreach ($files as $file) {
        $path = $directory . '/' . $file;

        if (is_dir($path)) {
            removeDir($path);
        } else {
            unlink($path);
        }
    }

    rmdir($directory);
}

removeDir('pm');