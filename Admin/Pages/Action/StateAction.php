<?php 
  require_once("../Action/Conn.php");
     if(isset($_POST['StateUpdate']))
    {   
        $id = $_POST['id'];
        $SName = $_POST['statename'];
        $Country_id = $_POST['Country_id'];
        $query = "UPDATE states SET  name='$SName', country_id='$Country_id' WHERE id='$id'";
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