<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Clientes</h1>

    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Crear Cliente</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Domicilio</th>
                <th>Teléfono</th>
                <th>Número Social</th>
                <th>Proyecto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->domicilio }}</td>
                    <td>{{ $customer->tfno }}</td>
                    <td>{{ $customer->num_social }}</td>
                    <td>{{ $customer->project->nombre }}</td> <!-- Ajusta según el nombre del atributo en el modelo Project -->
                    <td>
                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>