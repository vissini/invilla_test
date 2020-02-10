<!DOCTYPE html>
<html>
<head>
    <title>INVILLA - XML Upload</title>
    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
</head>
<body>
<div class="container">
       
    <h3 class="jumbotron">INVILLA - XML Files Upload</h3>
    <form method="post" action="{{url('upload/store')}}" enctype="multipart/form-data" 
                  class="dropzone" id="dropzone">
    @csrf
</form>  

<script type="text/javascript">
  Dropzone.options.dropzone =
   {
      maxFilesize: 12,
      //previewsContainer: false,
      renameFile: function(file) {
          var dt = new Date();
          var time = dt.getTime();
         return time+file.name;
      },
      acceptedFiles: ".xml",
      timeout: 5000,
      success: function(file, response) 
      {
        window.location.href = "./";
      }
};
</script>
</body>
</html>