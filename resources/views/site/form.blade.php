  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Google Drive Integration in Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
 <div class="container">
            <div class="row">
                <div class="col-12">
                    <br><br><br>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf 
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"  placeholder="name@example.com">
                         </div>
                        
                        <input type="submit" class = "btn btn-sm btn-block btn-danger" value="Enviar">
                    </form>
                </div>
            </div>
        </div>

