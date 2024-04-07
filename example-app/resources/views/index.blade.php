<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas de Camiones de Basura</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container"> 
        <h1>Rutas de Camiones de Basura</h1>
        <p>En esta página, encontrarás información sobre las rutas de los camiones de basura en nuestra ciudad. Nuestros camiones trabajan las 24 horas del día para recoger los residuos de forma selectiva y eficiente.</p>
        <p>Algunos aspectos destacados:</p>
        <ul>
            <li>Una flota de 13 camiones y 11 vehículos más pequeños cubren toda la ciudad.</li>
            <li>Los camiones no paran nunca, garantizando un servicio continuo.</li>
            <li>Recogemos residuos de forma selectiva, contenedor por contenedor.</li>
            <li>Los camiones se organizan según la cantidad de basura en los cubos para maximizar la sostenibilidad.</li>
        </ul>
        <p>¡Gracias por contribuir al cuidado del medio ambiente!</p>
    </div>

    <div class="container text-center">
  <div class="row">
    <div class="col-sm-8"><p>Además, hemos implementado un sistema de seguimiento en tiempo real para que los ciudadanos puedan conocer la ubicación actual de los camiones de basura. Esto ayuda a planificar mejor la disposición de los residuos y a evitar retrasos.</div>
    <div class="col-sm-4"><img src="css/OIG2.png" alt="" style="width: 100%"></div>
  </div>
</div>

<div class="container">
    <div class="d-flex justify-content-center">
        <button type="button" class="btn1" onclick="window.location='{{ route('aboutus') }}'">Sobre Nosotros</button>
    </div>
</div>


    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>