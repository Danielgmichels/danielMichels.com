<div class="row pt-5">
    <div class="col-sm-12 col-md-4">
        <img src="<?php echo URL_SITE?>img/shrek.jpg" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-8">
        <h2>Daniel Giraldi Michels</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad tenetur natus molestiae possimus amet ex dolore dicta ipsa, facere sit in nesciunt minus quibusdam repudiandae consequatur cumque tempora id quae.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam vel, fugit aperiam, enim voluptate assumenda et nesciunt modi beatae dolore ratione dolorum sed corrupti quo perspiciatis, quasi quibusdam quidem sequi?</p>
    </div>
</div>

<?php
$areasAtuacao = [
    [
        "title" => "PHP",
        "icon" => "bi-filetype-php",
        "text" => "experiência de 3 meses estudando com PHP orientado a objetos"
    ],
    [
        "title" => "Base de Dados",
        "icon" => "bi-database",
        "text" => "Ampla experiência com várias bases de dados como MYSQL, POSTGREE e ORACLE"
    ],
    [
        "title" => "JQUERY",
        "icon" => "bi-filetype-js",
        "text" => "Biblioteca  Javascript para frontEnd"
    ],
    [
        "title" => "JAVA",
        "icon" => "bi-filetype-java",
        "text" => "Não aprendi e nem uso essa merda"
    ],
];
?>

<div class="row mt-4">
    <?php
        foreach($areasAtuacao as $area){
            echo <<<HTML
            <div class="col-sm-12 col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi {$area['icon']} fs-1"></i>
                        <h3>{$area['title']}</h3>
                        <p>{$area['text']}</p>
                    </div>
                </div>
            </div>
            HTML;
        }
    ?>
</div>

<!-- <div class="row mt-4">
    <div class="col-sm-12 col-md-3">
        <div class="card">
            <div class="card-body text-center">
                <i class="bi bi-filetype-php fs-1"></i>
                <h3>PHP</h3>
                <p class="text-justify">experiência de 3 meses estudando com PHP orientado a objetos</p>
            </div>
        </div>
    </div>
</div> -->