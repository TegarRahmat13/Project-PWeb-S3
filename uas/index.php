<!doctype html>
<?php
require 'load.php'
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
                <div class="col-12 text-center">
                    <h1 class="display-1">KnownTry</h1><br>
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Website to knows the city of a country.</p>
                    </blockquote></div>
                    <form class="col-12" action="search_data.php" method="GET">
                        <div class="form-group text-center">
                            <select class="form-control" name="code" id="Country">
                                <?php
                                $result = $process->load_data('country');
                                foreach($result as $r){
                                ?>
                                <option value="<?php echo $r['Code']?>"><?php echo $r['Name']?></option>
                                <?php } ?>
                            </select>
                            <button type="submit" class="btn btn-primary mr-4 mt-3"><i class="bi bi-search"></i> Search</button>
                        </div>
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