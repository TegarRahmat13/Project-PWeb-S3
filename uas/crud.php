<?php
require 'load.php';
include 'connection.php';
if(!empty($_GET['act'] == 'addCity')){   
    $code = strip_tags($_POST['code']);
    $name = strip_tags($_POST['name']);
    $district = strip_tags($_POST['district']);

    $data[] = array(
        'CountryCode'		=>$code,
        'Name'		=>$name,
        'District'	=>$district
    );

    $tabel = 'city';
    $process->add_dataCity($tabel,$data);
    echo '<script>alert("Success");window.location="index.php"</script>';
}
if(!empty($_GET['act'] == 'deleteCity'))
    {
        $id = strip_tags($_GET['id']);
        $process->delete_City('city',$id);
        echo '<script>alert("Hapus Data Berhasil");window.location="index.php"</script>';
    }
if(!empty($_GET['act'] == 'editCity')){   
    $id = strip_tags($_POST['id']); 
    $code = strip_tags($_POST['code']);
    $name = strip_tags($_POST['name']);
    $district = strip_tags($_POST['district']);

    $query = mysqli_query($conn, "UPDATE city SET Name='$name', District='$district' WHERE ID=$id");
    if ($query)
    {
        echo "Edit Data Berhasil";
    }
    else
    {
        echo "Edit Data Gagal :" . mysqli_error($conn);
    }
    // $data[] = array(
    //     'CountryCode'		=>$code,
    //     'Name'		        =>$name,
    //     'District'	        =>$district
    // );

    // $tabel = 'city';
    // $process->edit_dataCity($tabel,$data,$id);
    echo '<script>alert("Edited");window.location="index.php"</script>';
}
?>