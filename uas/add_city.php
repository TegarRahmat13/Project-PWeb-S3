<!doctype html>
<?php
require 'load.php';
$codeGet = strip_tags($_GET['code']);
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
                    <h1 class="display-1 text-center">Add Country</h1><br>
                    <br>
                    <blockquote class="blockquote text-center">
                        <?php
                        $result = $process->load_CountryByCode('country',$codeGet);
                        foreach($result as $r){
                        ?>
                        <p class="mb-0">Add a city of <?php echo $r['Name']?>.</p>
                        <?php } ?>
                    </blockquote></div>
                    <form class="col-12" action="crud.php?act=addCity" method="POST">
                        <div class="form-group">
                            <label for="code">Country Code</label>
                            <input type="text" class="form-control " name="code" value="<?php echo $codeGet?>" readonly required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control " name="name" placeholder="Enter city name" required>
                        </div>
                        <div class="form-group">
                            <label for="district">District</label>
                            <input type="text" class="form-control " name="district" placeholder="Enter district name" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-4 mt-3"><i class="bi bi-plus"></i> Add</button>
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