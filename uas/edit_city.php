<!doctype html>
<?php
require 'load.php';
$idGet = strip_tags($_GET['id']);
$result = $process->load_CityByID('city',$idGet);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
        

        <title>KnownTry</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center" id="contentData">
                <div class="col-12">
                    <h1 class="display-1 text-center">Edit City</h1><br><br>

                    <form class="col-12" action="crud.php?act=editCity" method="POST">
                        <div class="form-group">
                            <label for="code">ID</label>
                            <input type="text" class="form-control " name="id" value="<?php echo $result['ID'];?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="district">Country code</label>
                            <input type="text" class="form-control " name="code" value="<?php echo $result['CountryCode'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control " name="name" placeholder="Enter city name" value="<?php echo $result['Name'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="name">District</label>
                            <input type="text" class="form-control " name="district" placeholder="Enter district name" value="<?php echo $result['District'];?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-4 mt-3"><i class="bi bi-plus"></i> Edit</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    </body>
</html>