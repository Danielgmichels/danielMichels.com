<?php
const URL_SITE = "http://localhost/danielMichels.com/";
require_once "mobile_device_detect.php";
require_once "conectadb.php";

$isMobile = mobile_device_detect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Michels Desenvolvedor - Bombinhas/SC</title>
    <link rel="stylesheet" href="<?php echo URL_SITE?>css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo URL_SITE?>css/app.css">
</head>
<body>
    <?php require_once "componentes/nav.php"?>
    <main class="pb-5">
        <div class="container<?php echo ($page == 'home') ? '-fluid p-0' : '' ?>">
            <div class="row">
                <?php
                require_once "views/{$page}.php"
                ?>
            </div>
        </div>
    </main>
    <?php require_once "componentes/footer.php"?>
    <script>
        const URL = '<?php echo URL_SITE?>'
    </script>
    <script src="<?php echo URL_SITE?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URL_SITE?>js/jquery-3.7.1.min.js"></script>
    <script scr="<?php echo URL_SITE?>js/app.js"></script>
</body>
</html>