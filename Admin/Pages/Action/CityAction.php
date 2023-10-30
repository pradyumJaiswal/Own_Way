<?php 
  require_once("../Action/Conn.php");
     if(isset($_POST['CityUpdate']))
    {   
        $id = $_POST['cid'];
        $SName = $_POST['cityname'];
        $Sate_id = $_POST['state_id'];
        $query = "UPDATE cities SET  name='$SName',state_id='$Sate_id' WHERE id='$id'";
        $query_run = mysqli_query($conect,$query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:../AdminPages/Layout/viewstate.php");
            echo '<script> location.reload(); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
    if(isset($_POST['deletestate']))
    {   
        $id = $_POST['delete_id'];
        $query = "UPDATE states SET state_status='Disable' WHERE id='$id'";
        $query_run = mysqli_query($conect,$query);

        if($query_run)
        {
            echo '<script> alert("Data Remove"); </script>';
            header("Location:../AdminPages/Layout/viewstate.php");
            echo '<script> location.reload(); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Remove"); </script>';
        }
    }
    ?>