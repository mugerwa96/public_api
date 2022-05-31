<?php $page="home";include('./includes/nav.php');?>
    <!-- landing page -->
 
    <div class="container " style="margin-top:5rem">
        <div class="row justify-content-center">
            
            <div class="col-md-9">
                <h1>DETAILS</h1>
                <?php
                 $id=base64_decode($_GET['id']);
                 $is_found=false;
                 $movies=json_decode(file_get_contents("movies.json"));
                foreach($movies as $movie)
                {
                    if($movie->id==$id)
                    {
                        $is_found=true;
                    }
                }
            if($is_found==false){
                header("location:index.php");
            }
    ?>
            </div>
        </div>
    </div>
    
    <!-- landing page -->

   

    <?php include('./includes/footer.php');?>