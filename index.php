<?php
require_once "vendor/autoload.php";

use App\Helpers;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="<?php echo Helpers::base_url('public/node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
    </head>
    <body>
        <div class="container mt-5">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group" >
                    <input type="text" name="nome" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="file" name="nome" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary">enviar</button>
            </form>
        </div>
    </body>
</html>