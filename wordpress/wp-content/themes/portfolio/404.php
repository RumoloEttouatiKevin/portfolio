<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404</title>
        <style>
            body {
                margin: 0;
            }

            .error404 {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                width: 100vw;
            }
        </style>
    </head>
    <body>
        <div class="error404">
            <img src="<?= get_template_directory_uri() ?>/assets/image/error404.gif" alt="">
        </div>
    </body>
</html>