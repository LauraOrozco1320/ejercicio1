<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Nuevo Cliente</h1>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="domicilio">Domicilio:</label>
            <input type="text" class="form-control" id="domicilio" name="domicilio" required>
        </div>
        <div class="form-group">
            <label for="tfno">Teléfono:</label>
            <input type="text" class="form-control" id="tfno" name="tfno" required>
        </div>
        <div class="form-group">
            <label for="num_social">Número Social:</label>
            <input type="text" class="form-control" id="num_social" name="num_social" required>
        </div>
        <div class="form-group">
            <label for="project_id">Proyecto:</label>
            <select class="form-control" id="project_id" name="project_id" required>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->id }}</option> 
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear Cliente</button>
    </form>
</body>
</html>