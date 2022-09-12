<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registrasi Users</title>
  </head>
  <body>
    <!-- ini form Registrasi -->
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
               <h1 class="text-center">Form Registrasi</h1>
                <hr>
                <div class="card">
                   <div class="card-body">
                       <form action="proses_register.php" method="post">
                           <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Username</label>
                              <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username">
                            </div>
                           <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password">
                            </div>
                           <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                              <input type="text" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                    <label>Pas Foto</label>
                                    <input type="file" accept="image/*" name="gambar" required="required">
                                </div>
                            <div class="mb-5">
                                <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-sm">Register</button>
                            </div>
                       </form>
                   </div>
                </div>
            </div>
        </div>
       
    </div>

    <!-- ini akhir form registrasi -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>