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
    <!-- spacer -->
      <div class="py-3"></div>
    <div class="container-fluid my-2">
      <!-- information text  start-->
        <div class="container">
          <div class="information-text">
            <h3 class="fw-bold">09 Flight Available</h3>
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
     
            <div class="container-fluid col-3">

              <div class="py-3 shadow rounded-1 px-4">
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
                          <input
                            type="range"
                            class="form-range mx-2"
                            name="min"
                            id="rangeMin"
                            min="50000"
                            max="100000"
                            value="50000"
                            oninput="updateRange()"
                          />
                        </div>
                      </div>
                      <div class="item-2 my-2">
                        <p>Price Max</p>
                        <div class="d-flex align-items-center mx-2">
                          <input
                            type="range"
                            class="form-range mx-2"
                            name="max"
                            id="rangeMax"
                            min="50000"
                            max="100000"
                            value="75000"
                            oninput="updateRange()"
                          />
                          <span id="maxRangeValue">75000.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- price filter end -->

                <!-- divinder -->
                  <hr class="my-0" />

                <!-- Onward Stops Filter Start -->

                  <div class="py-3">
                    <p class="fw-bold fs-6">Onward Stops</p>
                    <!-- Onward stops group -->
                    <ul class="list-inline mb-0 g-3">
                      <!-- Item -->
                        <li class="list-inline-item mb-0">
                          <input
                            type="checkbox"
                            class="btn-check"
                            value="Direct"
                            id="btn-check-c4"
                          />
                          <label
                            class="btn btn-sm btn-light btn-primary-soft-check"
                            for="btn-check-c4"
                            >Direct</label
                          >
                        </li>
                      <!-- Item -->
                        <li class="list-inline-item mb-0">
                          <input
                            type="checkbox"
                            class="btn-check"
                            value="OneStop"
                            id="btn-check-c5"
                          />
                          <label
                            class="btn btn-sm btn-light btn-primary-soft-check"
                            for="btn-check-c5"
                            >1 Stop</label
                          >
                        </li>
                      <!-- Item -->
                        <li class="list-inline-item mb-0">
                          <input
                            type="checkbox"
                            class="btn-check"
                            value="TwoStop"
                            id="btn-check-c6"
                          />
                          <label
                            class="btn btn-sm btn-light btn-primary-soft-check"
                            for="btn-check-c6"
                            >2+ Stops</label
                          >
                        </li>
                    </ul>
                  </div>

                <!-- Onward Stops End  -->
                
                <!-- divinder -->
                  <hr class="my-0" />

                <!-- Return Stops Filter Start -->

                  <div class="py-3">
                    <p class="fw-bold fs-6">Return Stops</p>
                    <!-- Return stops group -->
                      <ul class="list-inline mb-0 g-3">
                        <!-- Item -->
                          <li class="list-inline-item mb-0">
                            <input type="checkbox" class="btn-check" id="btn-check-c1" />
                            <label
                              class="btn btn-sm btn-light btn-primary-soft-check"
                              for="btn-check-c1"
                              >Direct</label
                            >
                          </li>
                        <!-- Item -->
                          <li class="list-inline-item mb-0">
                            <input type="checkbox" class="btn-check" id="btn-check-c2" />
                            <label
                              class="btn btn-sm btn-light btn-primary-soft-check"
                              for="btn-check-c2"
                              >1 Stop</label
                            >
                          </li>
                        <!-- Item -->
                          <li class="list-inline-item mb-0">
                            <input type="checkbox" class="btn-check" id="btn-check-c3" />
                            <label
                              class="btn btn-sm btn-light btn-primary-soft-check"
                              for="btn-check-c3"
                              >2+ Stops</label
                            >
                          </li>
                      </ul>
                  </div>
                <!-- Return Stops End  -->

              </div>
              <!-- button form start  -->
                  <div class="py-3 d-flex justify-content-between">
                    <input
                    type="reset"
                      class="btn text-blue fw-semibold"
                      value="Clear All"
                      />
                      <input
                      type="submit"
                      class="btn btn-primary"
                      value="Filter Result"
                    />
                  </div>
              
              <!-- button form end  -->
            </div>
              </form>
          <!-- form end  -->
          <!-- flight content start -->
            <div class="container col-8">
              <!-- flight card start  -->
                <div class="card p-3 mb-4">
                  <!-- head card section start  -->
                    <div
                      class="card-head d-flex align-items-center justify-content-between"
                    >
                      <div class="airlane-section col-8 d-flex align-items-center">
                        <img src="13.svg" class="col-1" alt="" srcset="" />
                        <p class="fw-semibold fs-5 ps-3">
                          Nama Airlane (code - 123456)
                        </p>
                      </div>
                      <div
                        class="class-section col-4 d-flex align-items-center justify-content-end px-2"
                      >
                        <p class="fw-semibold fs-6 text-secondary">Travel Class :</p>
                        <p class="fw-semibold fs-6 px-1">Economy</p>
                      </div>
                    </div>
                  <!-- head card section end  -->

                  <!-- body card section start  -->
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <!-- waktu berangkat start  -->
                            <div class="col-3 pe-2">
                              <h3 class="fw-bold">14.50</h3>
                              <h6 class="fw-bold">Sun, 30 Jan 2023</h6>
                              <p>Code - Terminal 2 Kota, Negara</p>
                            </div>
                            <!-- waktu berangkat end  -->
                            
                          <!-- lama perjalanan start  -->
                            <div class="col-3 px-2">
                              <h4 class="fw-bold text-center">9hr 50min</h4>
                              <div class="position-relative my-4">
                                <hr class="opacitiy-5 position-relative" />
                                <div
                                class="icon-md bg-primary p-2 rounded-circle position-absolute text-white top-50 start-50 translate-middle"
                                >
                                  <i class="fa-solid fa-plane"></i>
                                </div>
                              </div>
                            </div>
                          <!-- lama perjalanan end  -->
                          
                          <!-- waktu tiba start  -->
                            <div class="col-3 px-2">
                              <h3 class="fw-bold">14.50</h3>
                              <h6 class="fw-bold">Sun, 30 Jan 2023</h6>
                              <p>Code - Terminal 2 Kota, Negara</p>
                            </div>
                          <!-- waktu tiba end  -->

                          <!-- price & booking start -->
                            <div class="col-3 text-end px-1">
                              <h3 class="fw-bold">$18,500</h3>
                              <button class="btn btn-primary">Book Now</button>
                            </div>
                          <!-- price & booking end -->
                        </div>
                     
                    </div>
                  <!-- body card section end  -->
                  <!-- footer card section start  -->
                    <div class="card-footer bg-light border-0">
                        <ul class="bg-darklight rounded-2 list-inline d-sm-flex justify-content-sm-between mb-0 text-center py-2 px-4">
                          <li class="list-inline text-danger">
                            Only 10 Left
                          </li>
                          <li class="list-inline text-success">
                            Refundable
                          </li>
                          <li class="list-inline text-danger">
                            Non Refundable
                          </li>
                        </ul>
                      </div>
                      <!-- footer card section end  -->
                    
                </div>
             
                <!-- flight card end  -->
                <!-- flight card start  -->
                  <div class="card p-3 mb-4">
                    <!-- head card section start  -->
                      <div
                        class="card-head d-flex align-items-center justify-content-between"
                      >
                        <div class="airlane-section col-8 d-flex align-items-center">
                          <img src="13.svg" class="col-1" alt="" srcset="" />
                          <p class="fw-semibold fs-5 ps-3">
                            Nama Airlane (code - 123456)
                          </p>
                        </div>
                        <div
                          class="class-section col-4 d-flex align-items-center justify-content-end px-2"
                        >
                          <p class="fw-semibold fs-6 text-secondary">Travel Class :</p>
                          <p class="fw-semibold fs-6 px-1">Economy</p>
                        </div>
                      </div>
                    <!-- head card section end  -->

                    <!-- body card section start  -->
                      <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <!-- waktu berangkat start  -->
                              <div class="col-3 pe-2">
                                <h3 class="fw-bold">14.50</h3>
                                <h6 class="fw-bold">Sun, 30 Jan 2023</h6>
                                <p>Code - Terminal 2 Kota, Negara</p>
                              </div>
                            <!-- waktu berangkat end  -->

                            <!-- lama perjalanan start  -->
                              <div class="col-3 px-2">
                                <h4 class="fw-bold text-center">9hr 50min</h4>
                                <div class="position-relative my-4">
                                  <hr class="opacitiy-5 position-relative" />
                                  <div
                                    class="icon-md bg-primary p-2 rounded-circle position-absolute text-white top-50 start-50 translate-middle"
                                  >
                                    <i class="fa-solid fa-plane"></i>
                                  </div>
                                </div>
                              </div>
                            <!-- lama perjalanan end  -->
                            
                            <!-- waktu tiba start  -->
                              <div class="col-3 px-2">
                                <h3 class="fw-bold">14.50</h3>
                                <h6 class="fw-bold">Sun, 30 Jan 2023</h6>
                                <p>Code - Terminal 2 Kota, Negara</p>
                              </div>
                            <!-- waktu tiba end  -->

                            <!-- price & booking start -->
                              <div class="col-3 text-end px-1">
                                <h3 class="fw-bold">$18,500</h3>
                                <button class="btn btn-primary">Book Now</button>
                              </div>
                            <!-- price & booking end -->
                          </div>
                      
                      </div>
                    <!-- body card section end  -->
                    <!-- footer card section start  -->
                      <div class="card-footer bg-light border-0">
                          <ul class="bg-darklight rounded-2 list-inline d-sm-flex justify-content-sm-between mb-0 text-center py-2 px-4">
                            <li class="list-inline text-danger">
                              Only 10 Left
                            </li>
                            <li class="list-inline text-success">
                              Refundable
                            </li>
                            <li class="list-inline text-danger">
                              Non Refundable
                            </li>
                          </ul>
                        </div>
                    <!-- footer card section end  -->
                  </div>
             
                <!-- flight card end  -->
                <!-- flight card start  -->
                  <div class="card p-3 mb-4">
                      <!-- head card section start  -->
                        <div
                          class="card-head d-flex align-items-center justify-content-between"
                        >
                          <div class="airlane-section col-8 d-flex align-items-center">
                            <img src="13.svg" class="col-1" alt="" srcset="" />
                            <p class="fw-semibold fs-5 ps-3">
                              Nama Airlane (code - 123456)
                            </p>
                          </div>
                          <div
                            class="class-section col-4 d-flex align-items-center justify-content-end px-2"
                          >
                            <p class="fw-semibold fs-6 text-secondary">Travel Class :</p>
                            <p class="fw-semibold fs-6 px-1">Economy</p>
                          </div>
                        </div>
                      <!-- head card section end  -->

                      <!-- body card section start  -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                              <!-- waktu berangkat start  -->
                                <div class="col-3 pe-2">
                                  <h3 class="fw-bold">14.50</h3>
                                  <h6 class="fw-bold">Sun, 30 Jan 2023</h6>
                                  <p>Code - Terminal 2 Kota, Negara</p>
                                </div>
                              <!-- waktu berangkat end  -->

                              <!-- lama perjalanan start  -->
                                <div class="col-3 px-2">
                                  <h4 class="fw-bold text-center">9hr 50min</h4>
                                  <div class="position-relative my-4">
                                    <hr class="opacitiy-5 position-relative" />
                                    <div
                                      class="icon-md bg-primary p-2 rounded-circle position-absolute text-white top-50 start-50 translate-middle"
                                    >
                                      <i class="fa-solid fa-plane"></i>
                                    </div>
                                  </div>
                                </div>
                              <!-- lama perjalanan end  -->
                              
                              <!-- waktu tiba start  -->
                                <div class="col-3 px-2">
                                  <h3 class="fw-bold">14.50</h3>
                                  <h6 class="fw-bold">Sun, 30 Jan 2023</h6>
                                  <p>Code - Terminal 2 Kota, Negara</p>
                                </div>
                              <!-- waktu tiba end  -->

                              <!-- price & booking start -->
                                <div class="col-3 text-end px-1">
                                  <h3 class="fw-bold">$18,500</h3>
                                  <button class="btn btn-primary">Book Now</button>
                                </div>
                              <!-- price & booking end -->
                            </div>
                        
                        </div>
                      <!-- body card section end  -->
                      <!-- footer card section start  -->
                        <div class="card-footer bg-light border-0">
                            <ul class="bg-darklight rounded-2 list-inline d-sm-flex justify-content-sm-between mb-0 text-center py-2 px-4">
                              <li class="list-inline text-danger">
                                Only 10 Left
                              </li>
                              <li class="list-inline text-success">
                                Refundable
                              </li>
                              <li class="list-inline text-danger">
                                Non Refundable
                              </li>
                            </ul>
                          </div>
                      <!-- footer card section end  -->
                    </div>  
              
                <!-- flight card end  -->
                <!-- flight pagination start  -->
                  <!-- pagination -->
                  <nav
                      class="mt-4 d-flex justify-content-center"
                      aria-label="navigation"
                    >
                    <ul
                      id="pagination"
                      class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0"
                    > 
                        <li class="page-item mb-0">
                          <a class="page-link" href="#" id="prev-page" onclick="changePage(-1)">
                            <i class="fa-solid fa-angle-left"></i>
                          </a>
                        </li>
                        <li class="page-item mb-0"><a class="page-link" href="#" onclick="updatePageParam(1)">1</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#" onclick="updatePageParam(2)">2</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#" onclick="updatePageParam(3)">3</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#" onclick="updatePageParam(4)">4</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#" onclick="updatePageParam(5)">5</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#" onclick="updatePageParam(6)">6</a></li>
                        <li class="page-item mb-0">
                          <a class="page-link" href="#" id="next-page" onclick="changePage(1)">
                            <i class="fa-solid fa-angle-right"></i>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <script>
                      const maxPages = 6;

                      function getCurrentPage() {
                        const urlParams = new URLSearchParams(window.location.search);
                        return parseInt(urlParams.get('page')) || 1; // Default to 1 if no page param
                      }

                      function updatePageParam(pageNumber) {
                        const url = new URL(window.location);
                        url.searchParams.set('page', pageNumber);
                        history.pushState(null, '', url);

                        highlightCurrentPage(pageNumber);
                        showRelevantPages(pageNumber);
                      }

                      function changePage(change) {
                        const currentPage = getCurrentPage();
                        const newPage = currentPage + change;

                        if (newPage >= 1 && newPage <= maxPages) {
                          updatePageParam(newPage);
                        }
                      }

                      function highlightCurrentPage(pageNumber) {
                        const paginationItems = document.querySelectorAll('#pagination .page-item');
                        paginationItems.forEach(item => {
                          item.classList.remove('active');
                        });
                        paginationItems[pageNumber].classList.add('active');
                      }

                      function showRelevantPages(pageNumber) {
                        const paginationItems = document.querySelectorAll('#pagination .page-item');

                        paginationItems.forEach((item, index) => {
                          if (index > 0 && index <= maxPages) { // Skip the first and last items (< and >)
                            if (index < pageNumber - 1 || index > pageNumber + 1) {
                              item.style.display = 'none';
                            } else {
                              item.style.display = '';
                            }
                          }
                        });

                        // Show first and last pages if near the edges
                        if (pageNumber === 1) {
                          paginationItems[2].style.display = '';
                        } else if (pageNumber === maxPages) {
                          paginationItems[maxPages - 1].style.display = '';
                        }
                      }

                      // Initialize pagination on page load
                      document.addEventListener('DOMContentLoaded', () => {
                        const currentPage = getCurrentPage();
                        highlightCurrentPage(currentPage);
                        showRelevantPages(currentPage);
                      });
                    </script>
                  <!-- end pagination  --> 
                <!-- flight pagination end  -->
              </div>
            
          <!-- flight content end  -->
        </div>
        
      <!-- content end  -->
    </div>
    <script src="script.js"></script>
    <!-- spacer -->
    <div class="py-3"></div>
  </body>
  <?php include('footer.php');?>
</html>
