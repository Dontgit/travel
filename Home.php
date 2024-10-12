<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>24 Travel | Hotel</title>
    <?php 
      include('bootstrap.php');
    ?>
  </head>
  <body>
    <?php
      include('navbar.php');
    ?>
    <div class="container-fluid px-5 my-2">
        <!-- spacer -->
        <div class="my-5"></div>
        <div class="row">
            <div class="col-6  px-5">
                <!-- spacer -->
                <div class="my-5"></div>
                <h1 class="mb-4 mt-md-5 display-3 fw-bold">Find the top <span class="position-relative z-index-9">Hotels nearby<span></h1>
                <p class="text-secondary fw-semibold fs-5 my-5" >We bring you not only a stay option, but an experience in your budget to enjoy the luxury.</p>
                <div class="btn btn-primary fw-semibold rounded-2 px-3 py-2 mt-2">Discover Now</div>
            </div>
            <div class="col-6  p-3 px-5">
                <img src="06.jpg" class="col-12 rounded-4" alt="" srcset="">
            </div>
            <div class="col-xl-10 position-relative custom-margin">
                <form class="card position-relative shadow rounded-4 p-4">
                    <div class="row">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <i class="fa-solid fa-location-dot fs-2 me-3"></i>        
                                <select name="" id="" class="form-select my-2" >
                                    <option value="" disabled selected> Location</option>
                                    <option value="Las Vegas">Las Vegas, USA</option>
                                    <option value="New York"> New York, USA</option>
                                    <option value="Texas">Texas, USA</option>
                                </select>
                        </div>
                        <div class="col-lg-6 d-flex">
                            <i class="fa-regular fa-calendar fs-2 me-3">
                            </i>
                            <div class="">
                                <p class="text-secondary p-0 m-0">check in</p>
                                <input type="date" name="" id="" class="form-control" placeholder="checkim">
                            </div>
                            <p class="mx-2 text-center">to</p>
                            <div class="">
                                <p class="text-secondary p-0 m-0">checkout</p> 
                                <input type="date" name="" id="" class="form-control" placeholder="checkout">
                            </div>
                      
                                
                           
                        </div>
                        
                        <div class="col-lg-3 d-flex">
                        <i class="fa-solid fa-user fs-2 me-3"></i>
                            <input type="number" name="guest" class="my-2 form-control" placeholder="Guest" id="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
      include('footer.php');
    ?>
  </body>
</html>
