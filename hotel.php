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
    <div class="container my-2">
      <div class="row g-3">
        <!-- Tambahkan row dan gap -->
        <!-- card start  -->
        <div class="col-md-6 col-xl-4">
          <!-- Setiap card dalam kolom -->
          <div class="card shadow p-2 pb-0 h-100">
            <!-- Overlay item -->
            <div
              class="position-absolute top-0 start-0 m-4"
              style="z-index: 100"
            >
              <div class="badge bg-danger text-white">30% Off</div>
            </div>
            <!-- Carousel START -->
            <div
              id="cardImageCarousel1"
              class="carousel slide rounded-2 overflow-hidden"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="01.jpg" class="d-block w-100" alt="Card image 1" />
                </div>
                <div class="carousel-item">
                  <img src="02.jpg" class="d-block w-100" alt="Card image 2" />
                </div>
                <div class="carousel-item">
                  <img src="03.jpg" class="d-block w-100" alt="Card image 3" />
                </div>
                <div class="carousel-item">
                  <img src="09.jpg" class="d-block w-100" alt="Card image 4" />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#cardImageCarousel1"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#cardImageCarousel1"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- Carousel END -->
            <!-- Card body START -->
            <div class="card-body px-3 pb-0">
              <div class="d-flex justify-content-between mb-3">
                <a href="#" class="badge bg-dark text-white"
                  ><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.5</a
                >
                <a href="#" class="h6 mb-0 z-index-2"
                  ><i class="bi fa-fw bi-bookmark"></i
                ></a>
              </div>
              <h5 class="card-title">
                <a href="hoteldetail.php">Hotel Baljees Regency</a>
              </h5>
              <ul class="d-flex list-inline justify-content-between mb-2 mb-sm-3">
                <li class="me-2 fw-semibold">Air Conditioning</li>
                <li class="me-2 fw-semibold">Wifi</li>
                <li class="me-2 fw-semibold">Kitchen</li>
                <li class="me-2 fw-semibold">Pool</li>
              </ul>
            </div>
            <!-- Card body END -->
            <!-- Card footer START-->
            <div class="card-footer pt-2">
              <div
                class="d-sm-flex justify-content-sm-between align-items-center"
              >
                <div class="d-flex align-items-center">
                  <h5 class="fw-normal text-success mb-0 me-1">$750</h5>
                  <span class="mb-0 me-2">/day</span>
                  <span class="text-decoration-line-through">$1000</span>
                </div>
                <div class="m-2 mt-sm-0">
                  <a
                    href="hoteldetail.php"
                    class="btn btn-sm btn-primary mb-0 w-100"
                    >View Detail <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- Card footer END -->
          </div>
        </div>
        <!-- card end -->

        <!-- card start -->
        <!-- Ulangi card di sini dengan mengganti id carousel -->
        <div class="col-md-6 col-xl-4">
          <div class="card shadow p-2 pb-0 h-100">
            <div
              class="position-absolute top-0 start-0 m-4"
              style="z-index: 100"
            >
              <div class="badge bg-danger text-white">30% Off</div>
            </div>
            <div
              id="cardImageCarousel2"
              class="carousel slide rounded-2 overflow-hidden"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="01.jpg" class="d-block w-100" alt="Card image 1" />
                </div>
                <div class="carousel-item">
                  <img src="02.jpg" class="d-block w-100" alt="Card image 2" />
                </div>
                <div class="carousel-item">
                  <img src="03.jpg" class="d-block w-100" alt="Card image 3" />
                </div>
                <div class="carousel-item">
                  <img src="09.jpg" class="d-block w-100" alt="Card image 4" />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#cardImageCarousel2"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#cardImageCarousel2"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body px-3 pb-0">
              <div class="d-flex justify-content-between mb-3">
                <a href="#" class="badge bg-dark text-white"
                  ><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.5</a
                >
                <a href="#" class="h6 mb-0 z-index-2"
                  ><i class="bi fa-fw bi-bookmark"></i
                ></a>
              </div>
              <h5 class="card-title">
                <a href="hoteldetail.php">Hotel Baljees Regency</a>
              </h5>
              <ul class="d-flex list-inline justify-content-between mb-2 mb-sm-3">
                <li class="me-2 fw-semibold">Air Conditioning</li>
                <li class="me-2 fw-semibold">Wifi</li>
                <li class="me-2 fw-semibold">Kitchen</li>
                <li class="me-2 fw-semibold">Pool</li>
              </ul>
            </div>
            <div class="card-footer pt-2">
              <div
                class="d-sm-flex justify-content-sm-between align-items-center"
              >
                <div class="d-flex align-items-center">
                  <h5 class="fw-normal text-success mb-0 me-1">$750</h5>
                  <span class="mb-0 me-2">/day</span>
                  <span class="text-decoration-line-through">$1000</span>
                </div>
                <div class="m-2 mt-sm-0">
                  <a
                    href="hoteldetail.php"
                    class="btn btn-sm btn-primary mb-0 w-100"
                    >View Detail <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card end -->

        <!-- Tambahkan card lainnya jika diperlukan -->

        <!-- card start -->
        <!-- Ulangi card di sini dengan mengganti id carousel -->
        <div class="col-md-6 col-xl-4">
          <div class="card shadow p-2 pb-0 h-100">
            <div
              class="position-absolute top-0 start-0 m-4"
              style="z-index: 100"
            >
              <div class="badge bg-danger text-white">30% Off</div>
            </div>
            <div
              id="cardImageCarousel3"
              class="carousel slide rounded-2 overflow-hidden"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="01.jpg" class="d-block w-100" alt="Card image 1" />
                </div>
                <div class="carousel-item">
                  <img src="02.jpg" class="d-block w-100" alt="Card image 2" />
                </div>
                <div class="carousel-item">
                  <img src="03.jpg" class="d-block w-100" alt="Card image 3" />
                </div>
                <div class="carousel-item">
                  <img src="09.jpg" class="d-block w-100" alt="Card image 4" />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#cardImageCarousel3"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#cardImageCarousel3"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body px-3 pb-0">
              <div class="d-flex justify-content-between mb-3">
                <a href="#" class="badge bg-dark text-white"
                  ><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.5</a
                >
                <a href="#" class="h6 mb-0 z-index-2"
                  ><i class="bi fa-fw bi-bookmark"></i
                ></a>
              </div>
              <h5 class="card-title">
                <a href="hoteldetail.php">Hotel Baljees Regency</a>
              </h5>
              <ul class="d-flex list-inline justify-content-between mb-2 mb-sm-3">
                <li class="me-2 fw-semibold">Air Conditioning</li>
                <li class="me-2 fw-semibold">Wifi</li>
                <li class="me-2 fw-semibold">Kitchen</li>
                <li class="me-2 fw-semibold">Pool</li>
              </ul>
            </div>
            <div class="card-footer pt-2">
              <div
                class="d-sm-flex justify-content-sm-between align-items-center"
              >
                <div class="d-flex align-items-center">
                  <h5 class="fw-normal text-success mb-0 me-1">$750</h5>
                  <span class="mb-0 me-2">/day</span>
                  <span class="text-decoration-line-through">$1000</span>
                </div>
                <div class="m-2 mt-sm-0">
                  <a
                    href="hoteldetail.php"
                    class="btn btn-sm btn-primary mb-0 w-100"
                    >View Detail <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card end -->
        <!-- card start -->
        <!-- Ulangi card di sini dengan mengganti id carousel -->
        <div class="col-md-6 col-xl-4">
          <div class="card shadow p-2 pb-0 h-100">
            <div
              class="position-absolute top-0 start-0 m-4"
              style="z-index: 100"
            >
              <div class="badge bg-danger text-white">30% Off</div>
            </div>
            <div
              id="cardImageCarousel4"
              class="carousel slide rounded-2 overflow-hidden"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="01.jpg" class="d-block w-100" alt="Card image 1" />
                </div>
                <div class="carousel-item">
                  <img src="02.jpg" class="d-block w-100" alt="Card image 2" />
                </div>
                <div class="carousel-item">
                  <img src="03.jpg" class="d-block w-100" alt="Card image 3" />
                </div>
                <div class="carousel-item">
                  <img src="09.jpg" class="d-block w-100" alt="Card image 4" />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#cardImageCarousel4"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#cardImageCarousel4"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body px-3 pb-0">
              <div class="d-flex justify-content-between mb-3">
                <a href="#" class="badge bg-dark text-white"
                  ><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.5</a
                >
                <a href="#" class="h6 mb-0 z-index-2"
                  ><i class="bi fa-fw bi-bookmark"></i
                ></a>
              </div>
              <h5 class="card-title">
                <a href="hoteldetail.php">Hotel Baljees Regency</a>
              </h5>
              <ul class="d-flex list-inline justify-content-between mb-2 mb-sm-3">
                <li class="me-2 fw-semibold">Air Conditioning</li>
                <li class="me-2 fw-semibold">Wifi</li>
                <li class="me-2 fw-semibold">Kitchen</li>
                <li class="me-2 fw-semibold">Pool</li>
              </ul>
            </div>
            <div class="card-footer pt-2">
              <div
                class="d-sm-flex justify-content-sm-between align-items-center"
              >
                <div class="d-flex align-items-center">
                  <h5 class="fw-normal text-success mb-0 me-1">$750</h5>
                  <span class="mb-0 me-2">/day</span>
                  <span class="text-decoration-line-through">$1000</span>
                </div>
                <div class="m-2 mt-sm-0">
                  <a
                    href="hoteldetail.php"
                    class="btn btn-sm btn-primary mb-0 w-100"
                    >View Detail <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card end -->
      </div>
      <!-- row end -->

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
    </div>
    <?php
      include('footer.php');
    ?>
  </body>
</html>
