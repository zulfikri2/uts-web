<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Aplikasi DATA HP</title>
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    </div>
                </div>
            </div>
        </nav>

        <div class="card">
            <div class="card-body">
                <div class="mb-2">
                    <span class="h2">Tambah Data Hp</span>
                    <a href="index.php" class="btn btn-primary btn-sm" style="float: right;">Kembali</a>
                </div>
                <form action="save.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="merk" class="form-control" placeholder="Merk Hp*" aria-label="merk" aria-describedby="basic-addon1" required autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="tipe" class="form-control" placeholder="Tipe Hp" aria-label="tipe" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="tahun" class="form-control" placeholder="Tahun Produksi" aria-label="tahun" aria-describedby="basic-addon1" >
                    </div>

                    <div class="input-group mb-3">
                        <input type="reset" class="btn btn-warning btn-sm">&nbsp;&nbsp;
                        <input type="submit" name="simpan" class="btn btn-primary btn-sm" value="Simpan">
                    </div>
                </form>

            </div>
        </div>

       
</body>

</html>