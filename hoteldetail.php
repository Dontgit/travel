<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>24 Hotel | Nama Hotel</title>
    <?php
        include('bootstrap.php');
    ?>
  </head>
  <?php
        include('navbar.php');
    ?>
<body>
    <!-- body start -->
        <div class="container my-2"> 
            <!-- spacer -->
             <div class="my-5"></div>
            <!-- title start -->
                <h1>Nama Hotel By 24 Travel</h1>
                <!-- location start  -->
                    <p class="fw-semibold text-secondary"><i class="fa-solid fa-location-dot m-1 mx-2"></i>5855 W Century Blvd, Los Angeles - 90045</p>
                <!-- location end  -->
            <!-- title end -->
            <!-- Image gallery START -->
                    <section class="card-grid pt-0">
                        <div class="container">
                            <div class="row g-3">
                                <!-- Gambar pertama -->
                                <div class="col-md-4">
                                    <a data-glightbox data-gallery="gallery" href="01.jpg">
                                        <div class="card overflow-hidden" style="background-image:url(01.jpg); background-position: center; background-size: cover; height: 200px;">
                                        </div>
                                    </a>
                                </div>

                                <!-- Gambar kedua -->
                                <div class="col-md-4">
                                    <a data-glightbox data-gallery="gallery" href="02.jpg">
                                        <div class="card overflow-hidden" style="background-image:url(02.jpg); background-position: center; background-size: cover; height: 200px;">
                                        </div>
                                    </a>
                                </div>

                                <!-- Gambar ketiga -->
                                <div class="col-md-4">
                                    <a data-glightbox data-gallery="gallery" href="03.jpg">
                                        <div class="card overflow-hidden" style="background-image:url(03.jpg); background-position: center; background-size: cover; height: 200px;">
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- View All Button -->
                            <div class="row g-3 mt-3">
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#galleryModal">View All</button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Modal Carousel -->
                    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="galleryModalLabel">Gallery</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <!-- Carousel Item 1 -->
                                            <div class="carousel-item active">
                                                <img src="01.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <!-- Carousel Item 2 -->
                                            <div class="carousel-item">
                                                <img src="02.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <!-- Carousel Item 3 -->
                                            <div class="carousel-item">
                                                <img src="03.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <!-- Tambahkan lebih banyak item carousel jika ada gambar tambahan -->
                                            <div class="carousel-item">
                                                <img src="01.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="01.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <!-- Controls -->
                                        <a class="carousel-control-prev" href="#carouselGallery" role="button" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselGallery" role="button" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- Image gallery END -->
            <!-- spacer  -->
                <div class="my-5"></div>
            <!-- content start -->
                <div class="row-g-4 g-xl-5 d-flex">
                    <!-- left section start  --> 
                        <div class="col-xl-7 pe-5">   
                            <!-- title section start-->
                                <h3 class="mb-0">About this hotel</h3>
                                <hr class="my-4">
                            <!-- title section start-->
                            <!-- main higthlight start -->
                                <h5 class="fs-se">Main Highlight</h5>
                                <div class="d-flex my-3">
                                    <div class="bg-darklight p-3 rounded-2 mx-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Free wifi">
                                        <i class="fa-solid fa-wifi"></i>
                                    </div>
                                    <div class="bg-darklight p-3 rounded-2 mx-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Swimming Pool">
                                        <i class="fa-solid fa-water-ladder"></i>
                                    </div>
                                    <div class="bg-darklight p-3 rounded-2 mx-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Air Conditioiner">
                                        <i class="fa-solid fa-wind"></i>
                                    </div>
                                    <div class="bg-darklight p-3 rounded-2 mx-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Free Service">
                                        <i class="fa-solid fa-bell-concierge"></i>
                                    </div>
                                </div>
                                
                                <!-- Konten yang muncul -->
                                <p class="fw-medium text-secondary">
                                    This is some initial content that is always visible. It gives a brief overview of the section.
                                </p>
                                
                                <!-- Konten tambahan yang bisa disembunyikan -->
                                <div id="collapseContent" class="collapse text-secondary">
                                    <p>
                                        This is additional content that is hidden by default. It will be shown when the "See More" button is clicked. 
                                        You can add as much content here as you like. This part will be revealed upon expanding.
                                    </p>
                                    <p>
                                        More hidden content can go here. This allows you to provide extra details or information without overwhelming the user upfront.
                                    </p>
                                </div>
                                
                                <!-- Tombol See More / See Less -->
                                <button class="btn text-blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent" aria-expanded="false" aria-controls="collapseContent" id="toggleButton">
                                    <i class="fa-solid fa-angle-right"></i> See More
                                </button>
                            <!-- main higthlight end -->
                            <!-- spacer -->
                                <div class="my-5"></div>
                            <!-- advantages start -->
                                <h5 class="fs-se">Advantages</h5>
                                <ul class="list-inline">
                                    <li><p class="my-2 fw-semibold text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Hotel staff ensures to maintain social distancing at all times.</p></li>
                                    <li><p class="my-2 fw-semibold text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Hotel staff ensures to maintain social distancing at all times.</p></li>
                                    <li><p class="my-2 fw-semibold text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Hotel staff ensures to maintain social distancing at all times.</p></li>
                                    <li><p class="my-2 fw-semibold text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Hotel staff ensures to maintain social distancing at all times.</p></li>    
                                </ul>
                            <!-- advantages end -->
                            <!-- spacer  -->
                                <div class="my-5"></div>
                            <!-- Aminities title section start-->
                                <h3 class="mb-0">Aminities</h3>
                                <hr class="my-4">
                            <!-- Aminities title section end -->
                            <!-- Aminities list start -->
                                <div class="d-flex">
                                    <!-- list left start  -->
                                        <div class="col-6">
                                            <!-- list section start  -->
                                                <h6><i class="fa-solid fa-person-biking mx-2 mt-2"></i>Activities</h6>
                                                <ul class="list-inline">
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Swimming Pool</p></li>
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Swimming Pool</p></li>
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Swimming Pool</p></li>
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Swimming Pool</p></li>    
                                                </ul>
                                            <!-- list section end -->
                                            <!-- list section start  -->
                                                <h6><i class="fa-solid fa-bell-concierge mx-2 mt-2"></i>Services</h6>
                                                <ul class="list-inline">
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Dry cleaning</p></li>
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Dry cleaning</p></li>
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Dry cleaning</p></li>
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Dry cleaning</p></li>    
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Dry cleaning</p></li>    
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Dry cleaning</p></li>    
                                                    <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Dry cleaning</p></li>    
                                                </ul>
                                                <!-- list section end -->
                                        </div>
                                    <!-- list left end  -->
                                    <!-- list right start  -->
                                        <div class="col-6">
                                            <!-- list section start  -->
                                                    <h6><i class="fa-regular fa-credit-card mx-2 mt-2"></i>Payment Method</h6>
                                                    <ul class="list-inline">
                                                        <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Credit card (Visa, Master card)</p></li>
                                                        <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Credit card (Visa, Master card)</p></li>
                                                        <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Credit card (Visa, Master card)</p></li>                                                </ul>
                                            <!-- list section end -->
                                            <!-- list section start  -->
                                                    <h6><i class="fa-solid fa-shield-heart mx-2 mt-2"></i>Safety & Security</h6>
                                                    <ul class="list-inline">
                                                        <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> Dry cleaning</p></li>
                                                    </ul>
                                            <!-- list section end -->
                                            <!-- list section start  -->
                                                 <h6><i class="fa-solid fa-language mx-2 mt-2"></i>Staff Language</h6>
                                                    <ul class="list-inline">
                                                        <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> English</p></li>
                                                        <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> English</p></li>
                                                        <li><p class="my-2 fw-normal text-secondary"><i class="fa-solid fa-circle-check mx-2 text-success"></i> English</p></li>
                                                    </ul>
                                            <!-- list section end -->
                                        </div>
                                    <!-- list right end  -->
                                </div>
                            <!-- Aminities list end -->
                            <!-- spacer -->
                                <div class="my-5"></div>
                            <!-- room list start  -->
                                <!-- room title section start -->
                                    <h3 class="mb-0">Room Options</h3>
                                    <hr class="my-4">
                                <!-- room title section end -->
                                <!-- list section start -->
                                    <div class="card p-4 d-flex">
                                        <div class="col-5">
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
                                            <a class="text-blue fw-semibold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                 <i class="fa-solid fa-circle-info"></i> See Details
                                            </a>
                                            <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Room Detail</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body p-3">
                                                                <!-- Carousel START -->
                                                                    <div
                                                                    id="cardImageCarouseldetail1"
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
                                                                        data-bs-target="#cardImageCarouseldetail1"
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
                                                                        data-bs-target="#cardImageCarouseldetail1"
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
                                                                    <h4 class="my-2">Nama Room</h4>
                                                                     
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                    </div>
                                <!-- list section end -->
                            <!-- room list end -->
                        </div>
                    <!-- left section end --> 
                    <!-- right section start  --> 
                        <div class="col-xl-5">
                            <div class="card">
                                <h3 class="mb-0">About this hotel</h3>
                            </div>
                        </div>
                    <!-- right section end --> 
                   
                </div>
            <!-- content end -->

        </div>
    <!-- body end -->
    <script src="script.js"></script>
</body>
    <?php
        include('footer.php');
    ?>
 
</html>