<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Aplikasi Data Hp</title>
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
                    <span class="h2">Edit Data Hp</span>
                    <a href="index.php" class="btn btn-primary btn-sm" style="float: right;">Kembali</a>
                </div>
                <?php
                require_once('config.php');
                $id = $_GET['id'];
                $query = "SELECT * FROM dat WHERE id = $id";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
                <form action="update.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="merk" value="<?= $row['merk']; ?>" class="form-control" placeholder="merk hp*" aria-label="merk" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="tipe" value="<?= $row['tipe']; ?>" class="form-control" placeholder="tipe hp" aria-label="tipe" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="tahun" value="<?= $row['tahun']; ?>" class="form-control" placeholder="tahun produksi" aria-label="tahun" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="hidden" value="<?= $row['id']; ?>" name="id">
                        <input type="reset" class="btn btn-warning btn-sm">&nbsp;&nbsp;
                        <input type="submit" name="update" class="btn btn-primary btn-sm" value="Update">
                    </div>
                </form>

            </div>
        </div>

        
</body>

</html>