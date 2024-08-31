<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>24 Travel | Flight</title>
    <?php
        include('bootstrap.php');
    ?>
  </head>
  <?php
        include('navbar.php');
    ?>
  <body>
    <div class="py-3"></div>
    <div class="container-fluid my-2">
      <!-- information text  start-->
      <div class="container">
        <div class="information-text">
          <h2 class="fw-bold">09 Flight Available</h2>
          <div class="d-flex align-items-center">
            <h5 class="fw-bold">5 Jan 2024</h5>
            <h4 class="fw-bold mx-2">-</h4>
            <h5 class="fw-bold">1 Stop</h5>
          </div>
        </div>
      </div>
      <!-- information text end  -->

      <!-- spacer -->
      <div class="py-3"></div>

      <!-- content start  -->
      <div class="container-fluid my-2 d-flex justify-content-between">
        <!-- form start  -->
        <div class="container-fluid col-3 shadow rounded-1 px-4">
          <form action="">
            <!-- popular filter start -->
            <div class="py-3">
              <p class="fw-bold fs-6">Popular Filters</p>
              <div
                class="item d-flex align-items-center justify-content-between"
              >
                <input
                  type="checkbox"
                  value="Refundable Fare"
                  name="popular"
                  id=""
                  class="form-check-input me-2"
                />
                <span class="text-secondary">Refundable Fare</span>
                <p class="text-secondary ms-auto mb-0">(41)</p>
              </div>
              <div
                class="item d-flex align-items-center justify-content-between"
              >
                <input
                  type="checkbox"
                  value="OneStop"
                  name="popular"
                  id=""
                  class="form-check-input me-2"
                />
                <span class="text-secondary">1 Stop</span>
                <p class="text-secondary ms-auto mb-0">(20)</p>
              </div>
              <div
                class="item d-flex align-items-center justify-content-between"
              >
                <input
                  type="checkbox"
                  value="Late_Depature"
                  name="popular"
                  id=""
                  class="form-check-input me-2"
                />
                <span class="text-secondary">Late Depature</span>
                <p class="text-secondary ms-auto mb-0">(2)</p>
              </div>
              <div
                class="item d-flex align-items-center justify-content-between"
              >
                <input
                  type="checkbox"
                  value="NonStop"
                  name="popular"
                  id=""
                  class="form-check-input me-2"
                />
                <span class="text-secondary">Non-Stop</span>
                <p class="text-secondary ms-auto mb-0">(0)</p>
              </div>
            </div>

            <!-- popular filter end -->

            <!-- divinder -->
            <hr class="my-0" /> 

            <!-- price filter start -->
                <div class="py-3">
                  <p class="fw-bold fs-6">Price Range</p>
                  <div class="">
                      <div class="item-1 my-2">
                          <p>Price Min</p>
                          <div class="d-flex align-items-center mx-2">
                              <span id="minRangeValue">50000.00</span>
                              <input type="range" class="form-range mx-2" name="min" id="rangeMin" min="50000" max="100000" value="50000" oninput="updateRange()">
                          </div>
                      </div>
                      <div class="item-2 my-2">
                          <p>Price Max</p>
                          <div class="d-flex align-items-center mx-2">
                              <input type="range" class="form-range mx-2" name="max"  id="rangeMax" min="50000" max="100000" value="75000" oninput="updateRange()">
                              <span id="maxRangeValue">75000.00</span>
                          </div>
                      </div>
                    </div>
                </div>
            <!-- price filter end -->

            <!-- divinder -->
            <hr class="my-0" /> 

            <!-- Onward Stops Filter -->

                <div class="py-3">
                  <p class="fw-bold fs-6">Onward Stops</p>
                  <!-- Onward stops group -->
									<ul class="list-inline mb-0 g-3">
										<!-- Item -->
										<li class="list-inline-item mb-0">
											<input type="checkbox" class="btn-check" value="Direct" id="btn-check-c4">
											<label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c4">Direct</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-0">
											<input type="checkbox" class="btn-check" value="OneStop" id="btn-check-c5">
											<label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c5">1 Stop</label>
										</li>
										<!-- Item -->
										<li class="list-inline-item mb-0">
											<input type="checkbox" class="btn-check" value="TwoStop" id="btn-check-c6">
											<label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c6">2+ Stops</label>
										</li>
									</ul>
                </div>

              <!-- Onward Stops End  -->

              <hr class="my-0" /> 

      <!-- Return Stops Filter -->

    <div class="py-3">
      <p class="fw-bold fs-6">Return Stops</p>
      <!-- Return stops group -->
      <ul class="list-inline mb-0 g-3">
        <!-- Item -->
        <li class="list-inline-item mb-0">
          <input type="checkbox" class="btn-check" id="btn-check-c1">
          <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c1">Direct</label>
        </li>
        <!-- Item -->
        <li class="list-inline-item mb-0">
          <input type="checkbox" class="btn-check" id="btn-check-c2">
          <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c2">1 Stop</label>
        </li>
        <!-- Item -->
        <li class="list-inline-item mb-0">
          <input type="checkbox" class="btn-check" id="btn-check-c3">
          <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c3">2+ Stops</label>
        </li>
      </ul>
    </div>
  <!-- Return Stops End  -->
          <hr class="my-0" /> 
            <div class="py-3 d-flex justify-content-between">
              <input type="reset" class="btn text-blue fw-semibold" value="Clear All">
              <input type="submit" class="btn btn-primary" value="Filter Result">
            </div>

          </form>
        </div>

        <div class="container col-8">
          <!-- flight card start  -->
          <div class="card p-3">

            <!-- head card section start  -->
             <div class="card-head d-flex align-items-center justify-content-between">
                <div class="airlane-section col-8 d-flex align-items-center">
                  <img src="13.svg" class="col-1" alt="" srcset="">
                  <p class="fw-semibold fs-5 ps-3">Nama Airlane (code - 123456)</p>
                </div>
                <div class="class-section col-4 d-flex align-items-center justify-content-end px-2">
                  <p class="fw-semibold fs-6 text-secondary">Travel Class : </p>
                  <p class="fw-semibold fs-6 px-1"> Economy</p>
                </div>
             </div>
            <!-- head card section end  -->

             <!-- body card section start  -->
              <div class="card-body">
              <!-- body-inti -->
              <div class="d-flex justify-content-between">

                <!-- waktu berangkat start  -->
                <div class="col-3 pe-2">
                  <h2 class="fw-bold">14.50</h2>
                  <h6 class="fw-bold">Sun, 30 Jan 2023</h6>
                    <p>Code - Terminal 2 Kota, Negara</p>
                  </div>
                  <!-- waktu berangkat end  -->
                  
                  <!-- lama perjalanan start  -->
                  <div class="col-3 px-2">
                    <h4 class="fw-bold text-center">9hr 50min</h4>
                    <div class="position-relative my-4">
                      <hr class="opacitiy-5 position-relative">
                      <div class="icon-md bg-primary p-2 rounded-circle position-absolute text-white top-50 start-50 translate-middle">
                        <i class="fa-solid fa-plane"></i>
                      </div>
                    </div>
                  </div>
                    <!-- lama perjalanan end  -->
                  <!-- waktu tiba start  -->
                  <div class="col-3 px-2">
                    <h2 class="fw-bold">14.50</h2>
                    <h6 class="fw-bold">Sun, 30 Jan 2023</h6>
                    <p>Code - Terminal 2 Kota, Negara</p>
                  </div>
                  <!-- waktu tiba end  -->

                  <!-- price & booking start -->
                   <div class="col-3 text-end px-1">
                    <h2 class="fw-bold">$18,500</h2>
                    <button class="btn btn-primary">Book Now</button>
                   </div>
                  <!-- price & booking end -->

                
              </div>
            </div>
             <!-- body card section end  -->

            </div>
            <!-- flight card end  -->
        
        </div>
      </div>
      <!-- content end  -->
    
    </div>
    <script src="script.js"></script>
    <!-- spacer -->
    <div class="py-3"></div>
  </body>
  <?php include('footer.php');?>
</html>
