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
            <div class="row" id="contentData">
                <div class="col-12">
                    <button type="button" class="btn btn-add btn-primary mr-2" value="<?php echo $codeGet; ?>"><i class="bi bi-plus"></i> Add City</button>
                    <!-- <button type="button" class="btn btn-primary mr-2" ><i class="bi bi-pencil"></i> Edit Country</button>
                    <button type="button" class="btn btn-danger mr-2" ><i class="bi bi-trash"></i> Delete Country</button> -->
                    <h6 class="mt-5">City</h6>
                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Country Code</th>
                                <th>Name</th>
                                <th>District</th>
                                <th></th>  
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $process->load_dataByCode('city',$codeGet);
                            foreach($result as $r){
                            ?>
                            <tr>
                                <td><?php echo $r['CountryCode'];?></td>
                                <td><?php echo $r['Name'];?></td>
                                <td><?php echo $r['District'];?></td>
                                <td>
                                    <a href="edit_city.php?id=<?php echo $r['ID'];?>"><button type="button" class="btn btn-add btn-primary mr-2" ><i class="bi bi-pencil"></i></button></a>
                                    <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="crud.php?act=deleteCity&id=<?php echo $r['ID'];?>"><button type="button" class="btn btn-add btn-danger mr-2"><i class="bi bi-trash"></i></button></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example2').DataTable( {
                    "paging":   true,
                    "ordering": false,
                    "info":     false
                } );

            } );
            $(".btn-add").click(function() {
                var value = $(this).val();
                location.href="add_city.php?code="+value;
            });
        </script>
    </body>
</html>