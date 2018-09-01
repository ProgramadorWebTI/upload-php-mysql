<?php

require_once './vendor/autoload.php';

if (isset($_GET['q'])) {

    $parametro = $_GET['q'];

    switch ($parametro) {
        case 'add':

            $storage = new \Upload\Storage\FileSystem(ROOT.'/public/uploads/');
            $file = new \Upload\File('arquivo', $storage);

            // Optionally you can rename the file on upload
            $new_filename = uniqid();
            $file->setName($new_filename);

            // Access data about the file that has been uploaded
            $data = array(
                'name' => $file->getNameWithExtension(),
                'extension' => $file->getExtension(),
                'mime' => $file->getMimetype(),
                'size' => $file->getSize(),
                'md5' => $file->getMd5(),
                'dimensions' => $file->getDimensions()
            );

// Try to upload file
            try {
                // Success!
                $file->upload();
                if(isset($_POST['nome'])){
                    $nome = trim($_POST['nome']);
                    $file = $data['name'];
                    
                    $app = new \App\Models\Arquivos();
                    $app->add($nome, $file);
                    
                }
                
            } catch (\Exception $e) {
                // Fail!
                $errors = $file->getErrors();
            }

            break;
    }
}

