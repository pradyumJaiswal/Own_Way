<?php 
  require_once("../Action/Conn.php");
     if(isset($_POST['updatedata']))
    {   
        $id = $_POST['id'];
        
        $Cname = $_POST['countryname'];
        $CshortName = $_POST['shortname'];
        $CphoneCode = $_POST['phonecode'];
       

        $query = "UPDATE countries SET  name='$Cname', shortname='$CshortName', phonecode='$CphoneCode' WHERE id='$id'";
        $query_run = mysqli_query($conect,$query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:../AdminPages/Layout/viewcountry.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
    if(isset($_POST['deletedata']))
    {   
        $id = $_POST['delete_id'];
        $query = "UPDATE countries SET status='Disable' WHERE id='$id'";
        $query_run = mysqli_query($conect,$query);

        if($query_run)
        {
            echo '<script> alert("Data Remove"); </script>';
            header("Location:../AdminPages/Layout/viewcountry.php");
        }
        else
        {
            echo '<script> alert("Data Not Remove"); </script>';
        }
    }
    ?>