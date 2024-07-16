<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalles del Proyecto</h1>

    <div>
        <p><strong>ID:</strong> {{ $project->id }}</p>
        <p><strong>Descripción:</strong> {{ $project->desc }}</p>
        <p><strong>Fecha de Inicio:</strong> {{ $project->fecha_inicio }}</p>
        <p><strong>Fecha de Fin:</strong> {{ $project->fecha_fin }}</p>
        <p><strong>Cuantía:</strong> {{ $project->cuantia }}</p>
    </div>
</body>
</html>