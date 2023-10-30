

            <div class="container-fluid booking mt-5 pb-5">
                <div class="container pb-5">
                    <div class="bg-light shadow" style="padding: 30px;">
                        <div class="row align-items-center" style="min-height: 60px;">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="mb-3 mb-md-0">
                                                <select id="v_city" class="custom-select px-4" style="height: 47px;" required>
                                                    <option>To Visit Place</option>
                                                    <option>Jabalpur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3 mb-md-0">
                                                <div>
                                                    <input type="date" pattern="\d{2}-\d{2}-\d{4}" id="dateStart"  class="form-control p-4 " placeholder="dd-mm-yyyy" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3 mb-md-0">
                                                <div>
                                                <input type="date" id="dateEnd" pattern="\d{2}-\d{2}-\d{4}" class="form-control p-4 " placeholder="dd-mm-yyyy" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3 mb-md-0">
                                                <div>
                                                <input type="text" id="no-person"  class="form-control p-4 " placeholder="Person" required>
                                                </div>
                                            </div>
                                        </div>
                                                        <?php
                                                            $insert="SELECT * FROM basicsubcription WHERE plan_type='Sliver'";
                                                            $result=mysqli_query($conect,$insert)or die("query failed");
                                                            while($to_silver = mysqli_fetch_assoc($result)){
                                                        ?>
                                                                                                                                <div class="col-md-3">
                                                                                                                                    <div class="mb-3 mb-md-0">
                                                                                                                                        <div>
                                                                                                                                            <input type="text" id="silver-amount"  value=" <?php echo $to_silver['sub_price']; ?>" class="form-control p-4 " placeholder="" hidden>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="mb-3 mb-md-0">
                                                                                                                                    <div>
                                                                                                                                    <input type="text" id="card-silver-amount"  value=" <?php echo $to_silver['package_amont']; ?>" class="form-control p-4 " placeholder="" hidden>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                    
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                            $insert1="SELECT * FROM basicsubcription WHERE plan_type='Gold'";
                                                            $result1=mysqli_query($conect,$insert1)or die("query failed");
                                                            while($to_gold = mysqli_fetch_assoc($result1)){
                                                        ?>

                                                                                                                            <div class="mb-3 mb-md-0">
                                                                                                                                <div>
                                                                                                                                    <input type="text" id="gold-amount"  value=" <?php echo $to_gold['sub_price']; ?>" class="form-control p-4 " placeholder="" hidden>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                    

                                                                                                                                <div class="mb-3 mb-md-0">
                                                                                                                                    <div>
                                                                                                                                    <input type="text" id="card-gold-amount"  value=" <?php echo $to_gold['package_amont']; ?>" class="form-control p-4 " placeholder="" hidden>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                            $insert2="SELECT * FROM basicsubcription WHERE plan_type='Paltnium'";
                                                            $result2=mysqli_query($conect,$insert2)or die("query failed");
                                                            while($to_plat = mysqli_fetch_assoc($result2)){
                                                        ?>

                                                                                        <div class="mb-3 mb-md-0">
                                                                                                <div>
                                                                                                <input type="text" id="plat-amount"  value=" <?php echo $to_plat['sub_price']; ?>" class="form-control p-4 " placeholder="" hidden>
                                                                                                </div>
                                                                                        </div>
                                                                                    
                                                                                
                                                                                        <div class="mb-3 mb-md-0">
                                                                                            <div>
                                                                                                <input type="text" id="card-plat-amount"  value=" <?php echo $to_plat['package_amont']; ?>" class="form-control p-4 " placeholder="" hidden>
                                                                                            </div>
                                                                                        </div>
                                                                                

                                                        <?php
                                                        }
                                                        ?>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <a href="package.php#custom-show-card_after"> <button class="btn btn-primary btn-block" id= "submit_butn" type="submit" style="height: 47px; margin-top: -2px;">Search</button></a>
                                </div>
                        </div>
                    </div>   
                </div>
           

   
   
    <script src="./lib/easing/easing.min.js"></script>
    <script src="./lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./lib/tempusdominus/js/moment.min.js"></script>
    <script src="./lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="./js/ajax.js"></script>