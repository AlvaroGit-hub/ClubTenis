<?php

/** @var yii\web\View $this */

$this->title = 'Club Barcenilla';
?>
<div class="site-index">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">¡Bienvenido al Club de Tenis Barcenilla!</h1>
        <p class="lead">¡Has llegado al sitio web oficial de nuestro club de tenis! Aquí encontrarás información sobre nuestros servicios, eventos y cómo unirte a nuestra comunidad.</p>
    </div>

    <div class="body-content">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h2>Servicios</h2>
                <p>En el Club de Tenis Barcenilla, ofrecemos una amplia gama de servicios para jugadores de todos los niveles. Desde canchas de tenis de última generación hasta entrenadores profesionales, estamos comprometidos en brindar la mejor experiencia de tenis.</p>
                <p>Tenemos programas de entrenamiento para principiantes, intermedios y avanzados. Además, ofrecemos servicios de alquiler de canchas, venta de equipos y organización de torneos regulares.</p>
                <p><a class="btn btn-outline-secondary" href="<?= Yii::$app->urlManager->createUrl(['reservas/index']) ?>">Más información sobre nuestros servicios &raquo;</a></p>
            </div>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h2>Instalaciones</h2>
                <p>Nuestro club cuenta con instalaciones de primera clase diseñadas específicamente para los amantes del tenis. Disponemos de múltiples canchas de tenis de superficie dura y arcilla, equipadas con iluminación para jugar de noche.</p>
                <p>Además, contamos con vestuarios modernos, una sala de estar cómoda y un pro shop donde puedes encontrar todo lo que necesitas para mejorar tu juego.</p>
                <p><a class="btn btn-outline-secondary" href="<?= Yii::$app->urlManager->createUrl(['pistas/index']) ?>">Explora nuestras instalaciones &raquo;</a></p>
            </div>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h2>Eventos</h2>
                <p>En el Club de Tenis Barcenilla, organizamos una amplia variedad de eventos para fomentar la competencia y el compañerismo entre nuestros miembros. Estos eventos incluyen torneos individuales y por parejas, ligas internas, clínicas de tenis y exhibiciones profesionales.</p>
                <p>¡No importa si eres un jugador casual o un competidor experimentado, siempre habrá una oportunidad para participar y disfrutar del tenis en un ambiente divertido y amistoso!</p>
                <p><a class="btn btn-outline-secondary" href="<?= Yii::$app->urlManager->createUrl(['torneos/index']) ?>">Descubre nuestros eventos &raquo;</a></p>
            </div>
        </div>

        <hr>

        
    </div>
</div>
