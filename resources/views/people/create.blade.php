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
<h1>Add Person</h1>
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <!-- /.box-header -->
              <!-- form start -->
              @include('_errors')
              <form role="form" method="POST" action="{{ route('people.store') }}">
                @include('people._form')
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Add Person</button>
                  <a href="{{ route('people.index') }}" class="btn btn-default">Cancel</a>
                </div>
              </form>
            </div>
            <!-- /.box -->  
          </div>
    </div>
  </div>
</body>
</html>