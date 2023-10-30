<?php require_once("../../Action/Conn.php");
$quary="select * from states where 	state_status='Avail'";
$result= mysqli_query($conect,$quary);
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../AssestsMain/plugins/fontawesome-free/css/all.min.css">
  <!-- Css file for form -->
  <link rel="stylesheet" href="../../../AssestsMain/dist/css/country.css">
  <!--Data Table And Pagination -->
 <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
</head>
<body>
<?php require_once("./topnavbar.php");?>

<div class="container" style="border: 2px;">
  <h2>Country Data Table</h2>
  <p>VEIW STATE </p>            
  <table class="table" id="stDATATABLE">
    <thead>
      <tr>
        <th>unquie_id</th>
        <th>name</th>
        <th>country_id</th>
        <th>edit</th>
        <th>remove</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php while($row=mysqli_fetch_array($result)){?>
                      <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['country_id'];?></td>
                      <td><a data-id="<?php echo $row['id']?>" class="editstates" ><i class="fas fa-edit"></a></i></td>
                      <td><a data-id="<?php echo $row['id']?>" class="removestates"><i class="fa fa-trash" aria-hidden="true"></a></i></td>
                    </tr>
                    <?php } ?>
      </tr>
    </tbody>
  </table>
</div>
<!--  -->

<!-- The Modal -->
<div class="modal" id="SModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit States Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
       <?php
    ?>
      <div class="modal-body" >
      <form Action="../../Action/StateAction.php" method="POST" class="form-group" enctype="multipart/form-data"> 
      
                    <div class="row mt-3">
                    <div class="col-md-6"><label class="form-control" value="Name" placeholder="unique_id">unique_id</label></div>   
                    <div class="col-md-6"><input type="text" class="form-control"  name="id" id="id" ></div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-6"><label class="form-control" value="Name" placeholder="Name">Name</label></div>   
                    <div class="col-md-6"><input type="text" class="form-control" id="name"  name="statename"></div> 
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-6"><label class="form-control" value="Gmail" placeholder="Gmail">Gmail</label></div>   
                    <div class="col-md-6"><input type="text" class="form-control" id="country_id" name="Country_id" ></div>
                        
                    </div>
                 
                  <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit" name="StateUpdate">Edit Changes</button>   <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button></div>

                </div>
                </form>
      </div> 
      <!-- Modal footer -->
    </div>
  </div>
</div>
 <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletestatem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../Action/StateAction.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletestate" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

<!-- DELETE POP UP FORM (Bootstrap MODAL) -->
</body>
</html>
 <!--Data Table And Pagination -->
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function () {
            $('#stDATATABLE').DataTable({
              "pagingType":"full_numbers",
              "lenghthMenu":[
                [10,25,50,-1],
                [10,25,50,"All"]
              ],
              responsive:true,
              language: {
                search: "_INPUT_",
                searchPlaceholder:"Search records",
              }
            });
         }); 
    </script>
    <!-- Edit Country For Script-->
    <script>
       $(document).ready(function(){
        $('.editstates').on('click',function(){
            $('#SModal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#id').val(data[0]);
            $('#name').val(data[1]);
            $('#country_id').val(data[2]);
            // $('#phonecode').val(data[3]);


        });

       });
        </script>
         <!-- Remove  Country For Script-->
        <script>
        $(document).ready(function () {

            $('.removestates').on('click', function () {

                $('#deletestatem').modal('show');
                alert(5)

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>
    