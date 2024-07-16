<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalles del Cliente</h1>

    <p><strong>ID:</strong> {{ $customer->id }}</p>
    <p><strong>Domicilio:</strong> {{ $customer->domicilio }}</p>
    <p><strong>Teléfono:</strong> {{ $customer->tfno }}</p>
    <p><strong>Número Social:</strong> {{ $customer->num_social }}</p>
    <p><strong>Proyecto:</strong> {{ $customer->project->nombre }}</p> <!-- Ajusta según el nombre del atributo en el modelo Project -->
    
    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Editar</a>

    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
    </form>
</body>
</html>