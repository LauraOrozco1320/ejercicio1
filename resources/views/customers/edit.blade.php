<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Cliente</h1>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="domicilio">Domicilio:</label>
            <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{ $customer->domicilio }}" required>
        </div>
        <div class="form-group">
            <label for="tfno">Teléfono:</label>
            <input type="text" class="form-control" id="tfno" name="tfno" value="{{ $customer->tfno }}" required>
        </div>
        <div class="form-group">
            <label for="num_social">Número Social:</label>
            <input type="text" class="form-control" id="num_social" name="num_social" value="{{ $customer->num_social }}" required>
        </div>
        <div class="form-group">
            <label for="project_id">Proyecto:</label>
            <select class="form-control" id="project_id" name="project_id" required>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}" {{ $customer->project_id == $project->id ? 'selected' : '' }}>{{ $project->nombre }}</option> <!-- Ajusta según el nombre del atributo en el modelo Project -->
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
    </form>
</body>
</html>