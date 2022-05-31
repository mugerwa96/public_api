<?php $page="contact";include('./includes/nav.php');?>
    <!-- landing page -->
    <div class="container " style="margin-top:5rem">
        <div class="row justify-content-center">
            
            <div class="col-md-9 mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <p>Contact Us</p>
                    </div>
                    <div class="col-md-8">
                    
                        <form>
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="text" class="form-control"style="padding-left:2rem" placeholder="Username" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-envelope"></i>
                            <input type="email" class="form-control" placeholder="Email Address"style="padding-left:2rem" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                        </div>
                        <div class="form-group">
           
                            <textarea class="form-control"style="padding-left:2rem" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                                            
                        <button type="submit" class="btn site-bg-color text-light"><i class="fa fa-telegram mx-2"></i>Send</button>
                        </form>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- landing page -->

   

    <?php include('./includes/footer.php');?>