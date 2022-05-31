<?php $page="home";include('./includes/nav.php');?>
    <!-- landing page -->
    <div class="container " style="margin-top:5rem">
        <div class="row justify-content-center">
            
            <div class="col-md-9">
                <section id="landing">
                  
                    <img src="./images/landing.jpg" class="img-fluid shadow" alt="">
                    <div class="title">
                        <p class="movie-title">First Blood </p>
                        <p class="movie-release-date">
                            <span> Release Date:2018-07-04</span><br>
                            <span> Original_language:English</span><br>   
                            <span> Popularity: 83.795</span><br>   
                           
                        </p>
                    </div>
                </section>
                <h3 class="my-2 site-primary-color font-weight-bold">Movies</h3>
                <section class="categories">
                    <ul class="list-unstyled d-flex justify-content-left align-items-center mx-2 border-top border-bottom p-2">
                        <li class="mr-2 current2 cat">Featured</li>
                        <li class="mx-2 cat">Popular</li>
                        <li><input class="form-control mx-sm-2" id="search-area" type="text" placeholder="Search">
                      </li>
                    
                    </ul>
                </section>

                
                <div class="row dynamic-area">
                   
                        
                    </div>

                

           
               
            </div>
        </div>
    </div>
    
    <!-- landing page -->

   

    <?php include('./includes/footer.php');?>
    <script>
        $(document).ready(function(){

            // movie likes
            $('.cat').click(function(){
               val2=$(this).text();
               $.ajax({
                    url:"./dynamic/search.php",
                    method:"POST",
                    data:{val2:val2},
                    success:function(response){
                        console.log(response);
                        $(".dynamic-area").html(response);
                    },error:function(){
                        console.log("Error in searching data");
                    }
                })

            })
            // movie likes

            // search button
            $('#search-area').keyup(function(){
             val=$(this).val();
             if(val.length=="")
             {
                 load();
             }
             else{
                $.ajax({
                    url:"./dynamic/search.php",
                    method:"POST",
                    data:{val:val},
                    success:function(response){
                        $(".dynamic-area").html(response);
                    },error:function(){
                        console.log("Error in searching data");
                    }
                })
            }
            })
        

            // search button
           load();
           function load(){
               $.ajax({
                   url:"./dynamic/dynamic-index.php",
                   method:"POST",
                   success:function(response){
                      $(".dynamic-area").html(response);
                   },error:function(){
                       console.log("Error in loading data");
                   }
               })
           }
        })
    </script>