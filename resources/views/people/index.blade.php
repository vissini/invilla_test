<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <title>INVILLA - XML Files</title>
</head>
<body>
  <div class="container">
    <h1>List of People</h1>

    @include('_errors')
    <a class="btn btn-primary" href="{{ route('people.create') }}">Adicionar Person</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($people as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->name }}</td>
                    <td style="width:240px;">
                        <a class='btn btn-warning' href=" {{ route('people.edit',  ['person'=>$person->id]) }}">Editar</a>
                        <a class='btn btn-danger' href=" {{ route('people.destroy', ['person'=>$person->id]) }} " 
                            onclick="event.preventDefault(); if(confirm('Delete Person?')){document.getElementById('form-person-delete-{{ $person->id }}').submit();}"
                        >Deletar</a>
                        <form id="form-person-delete-{{ $person->id }}" style="display:none" action="{{ route('people.destroy', ['person'=>$person->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="2">Nenhum registro encontrado!</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $people->links() }}
  </div>
</body>
</html>
