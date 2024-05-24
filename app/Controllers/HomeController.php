<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index(): View
    {
        return View::make('index');
    }

    public function upload(): void
    {
        $filePath = STORAGE_PATH.'/'.$_FILES['transactions']['name'];
        echo '<pre>';
        var_dump($_FILES);
        echo '</pre>';

        // $csvAsArray = array_map('str_getcsv', file($_FILES['transactions']['tmp_name']));

        foreach ($_FILES['transactions']['tmp_name'] as $tmp_name) {
            // move_uploaded_file($_FILES['transaction']['tmp_name'], $filePath);
            // $contents = array_map('str_getcsv', file_get_contents($tmp_name));
            $contents = str_getcsv(file_get_contents($tmp_name));
            echo '<pre>';
            var_dump($contents);
            echo '</pre>';
            // $csvAsArray = array_map('str_getcsv', file($_FILES['transactions']['tmp_name']));
            // $csvAsArray = array_map('str_getcsv', file($name));
            // echo $csvAsArray;
        }

        // header('Location: /');
        exit;
    }
}
