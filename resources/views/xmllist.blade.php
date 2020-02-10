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
    <h1>XML FILES</h1>
    <a href="{{ route('upload')}}" class="btn btn-primary">Add XML</a>
    <table class="table table-striped table-bordered table-responsive" style="margin-top:5px;">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($files as $file)
        <tr>
          <td>{{ $file->id }}</td>
          <td>{{ $file->path }}</td>
          <td>
            <form action="{{ route('fileGet', $file->id)}}" method="post">
              @csrf
              <button class="btn btn-info" type="submit">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Process
              </button>
            </form>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>