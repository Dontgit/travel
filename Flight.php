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
    <div class="container my-2">
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
      <div class="container my-2 d-flex justify-content-between">
        <!-- form start  -->
        <div class="container col-4 shadow rounded-1 px-4">
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
          </form>
        </div>

        <div class="container col-7">p</div>
      </div>
      <!-- content end  -->
    </div>
    <script src="script.js"></script>
    <!-- spacer -->
    <div class="py-3"></div>
  </body>
  <?php include('footer.php');?>
</html>
