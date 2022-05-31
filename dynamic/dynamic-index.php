
                <div class="row">
                    <?php
                    $movies=json_decode(file_get_contents("../movies.json"));
                    foreach($movies as $movie)
                    {
                        $id=$movie->id;
                        $image=$movie->image;
                        $title=$movie->title;
                        $release_date=$movie->release_date;
                        $description=$movie->description;
                        $language=$movie->language;
                        ?>
                              <div class="col-md-4">
                             <!-- movie cards -->
                                <section id="movie-card" class="py-3">
                                    <div class="card shadow">
                                        <img src="<?php echo $image;?>" alt="movie image loading">
                                        <div class="movie-card-title d-flex justify-content-center ">
                                            <p style="font-size:14px">
                                                <span><i class="fa fa-play mx-2"></i><?php echo strtoupper($title);?></span> <br>
                                                <span ><i class="fa fa-calendar  mx-2"></i><?php echo $release_date;?></span><br>
                                                <a href="details.php?id=<?php echo base64_encode($id);?>"class="btn btn-sm my-2 site-primary-color btn-light font-weight-bold"><i class="fa fa-eye mx-2"></i>WATCH NOW</button></a>
                                               
                                            </p> 
                                        </div>
                                    </div>
                                </section>
                         <!-- movie cards -->
                    </div>
               

                        <?php
                    }
                    
                    ?>
                  
                </div>