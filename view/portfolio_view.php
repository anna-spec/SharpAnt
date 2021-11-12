<?php
include "includes/header.php";
?>
    <body>
<?php
include "includes/nav.php";
?>

<section class="seo-section">
    <div class="text">
        <div class="header-content">
            <h1>Portfolio</h1>
            <p>
                It is our pleasure to serve our worldwide clients to produce
                high quality websites and web apps. We have acquired clients
                across the globe of our reputation by providing best web development.
                Our websites are fast, secure and scalable. We are grateful for the
                faith and support of our clients in our services. SharpAnt LLC values
                all clients and takes pride in providing high quality services.</p>
            <p> We value our clients, understand their business, and pledge our
                commitment to contribute to their success and satisfaction.</p>
            <p>Below are the references of some of our work,
               which makes you understand our capabilities and delivery process.
                Contact our team for advanced technology and crafted strategies to create
                conversion friendly business solutions for your business needs and to create
                an impactful digital presence.</p>
            <p>We analyze and deliver each project with technical finesse,
                innovative, creative, and precise execution tailored to the
                specific needs of your business.</p>

            <button>Consult With Our Expert</button>
        </div>
    </div>
    <div class="img-head">
        <img src="images/portfolio-header.png" alt="">
    </div>
</section>

<!--<section class="our-works">-->
<!---->
<!--        <div id="" class="works">-->
<!--            <div class="tab">-->
<!--                <button class="tablinks  active-button" onmouseover="openWork(event, '1')">All</button>-->
<!--                <button class="tablinks" onmouseover="openWork(event, '2')">UI/UX Design</button>-->
<!--                <button class="tablinks" onmouseover="openWork(event, '3')">Logo Design</button>-->
<!--                <button class="tablinks" onmouseover="openWork(event, '4')">Websites</button>-->
<!--                <button class="tablinks" onmouseover="openWork(event, '5')">Web application</button>-->
<!--            </div>-->
<!---->
<!--            <div id="1" class="tabcontent  active-tab">-->
<!--                <div class="images">-->
<!--                    <div><img src="images/work1.png" alt=""></div>-->
<!--                    <div><img src="images/work2.png" alt=""></div>-->
<!--                    <div><img src="images/work3.png" alt=""></div>-->
<!--                    <div><img src="images/work4.png" alt=""></div>-->
<!--                    <div><img src="images/work5.png" alt=""></div>-->
<!--                    <div><img src="images/work6.png" alt=""></div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div id="2" class="tabcontent">-->
<!--                <div class="images">-->
<!--                    <div><img src="images/work1.png" alt=""></div>-->
<!--                    <div><img src="images/work4.png" alt=""></div>-->
<!--                    <div><img src="images/work5.png" alt=""></div>-->
<!--                    <div><img src="images/work6.png" alt=""></div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div id="3" class="tabcontent">-->
<!--                <div class="images">-->
<!--                    <div><img src="images/work1.png" alt=""></div>-->
<!--                    <div><img src="images/work2.png" alt=""></div>-->
<!--                    <div><img src="images/work3.png" alt=""></div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div id="4" class="tabcontent">-->
<!--                <div class="images">-->
<!--                    <div><img src="images/work1.png" alt=""></div>-->
<!--                    <div><img src="images/work3.png" alt=""></div>-->
<!--                    <div><img src="images/work4.png" alt=""></div>-->
<!--                    <div><img src="images/work5.png" alt=""></div>-->
<!--                    <div><img src="images/work6.png" alt=""></div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="5" class="tabcontent">-->
<!--                <div class="images">-->
<!--                    <div><img src="images/work1.png" alt=""></div>-->
<!--                    <div><img src="images/work2.png" alt=""></div>-->
<!--                    <div><img src="images/work4.png" alt=""></div>-->
<!--                    <div><img src="images/work6.png" alt=""></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<div class="portfolio">
    <?php
    include "includes/portfolio.php";
    ?>
</div>

<section class="our-works-mob">
        <div class="filter-block">
            <div class="filter">
                <div>All</div>
                <div><button>
                        <img src="images/close.png" alt="">
                    </button>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class=" filter-button" data-toggle="modal" data-target="#exampleModalCenter">
                <img src="images/filter.png" alt="">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul class="modal-nav">
                            <li class="modal-nav-li nav-item active">
                                <a class="modal-nav-link" href="#">UI/UX Design <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="modal-nav-li nav-item">
                                <a class="modal-nav-link" href="#">Logo Design</a>
                            </li>
                            <li class="modal-nav-li nav-item">
                                <a class="modal-nav-link" href="#">Websites</a>
                            </li>
                            <li class="modal-nav-li nav-item">
                                <a class="modal-nav-link " href="#">Web application</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="slide">
                        <!-- Button trigger modal -->
                        <button type="button" class="slide-modal-item" data-toggle="modal" data-target="#modal1">
                            <img src="images/work1.png" alt="">
                        </button>

                        <!-- Modal -->
                        <div class="slide-modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <ul class="modal-nav">
                                        <li class="modal-nav-li nav-item active">
                                            <a class="modal-nav-link" href="#">UI/UX Design <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link" href="#">Logo Design</a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link" href="#">Websites</a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link " href="#">Web application</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <!-- Button trigger modal -->
                        <button type="button" class="slide-modal-item" data-toggle="modal" data-target="#modal2">
                            <img src="images/work2.png" alt="">
                        </button>

                        <!-- Modal -->
                        <div class="slide-modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="header">
                                        <div class="techno">Widgets</div>
                                        <div class="techno">Web servers</div>
                                    </div>
                                    <div>
                                        <div><img src="" alt=""><p></p></div>
                                        <div><img src="" alt=""><p></p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <!-- Button trigger modal -->
                        <button type="button" class="slide-modal-item" data-toggle="modal" data-target="#modal3">
                            <img src="images/work3.png" alt="">
                        </button>

                        <!-- Modal -->
                        <div class="slide-modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <ul class="modal-nav">
                                        <li class="modal-nav-li nav-item active">
                                            <a class="modal-nav-link" href="#">UI/UX Design <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link" href="#">Logo Design</a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link" href="#">Websites</a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link " href="#">Web application</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <!-- Button trigger modal -->
                        <button type="button" class="slide-modal-item" data-toggle="modal" data-target="#modal4">
                            <img src="images/work4.png" alt="">
                        </button>

                        <!-- Modal -->
                        <div class="slide-modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <ul class="modal-nav">
                                        <li class="modal-nav-li nav-item active">
                                            <a class="modal-nav-link" href="#">UI/UX Design <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link" href="#">Logo Design</a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link" href="#">Websites</a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link " href="#">Web application</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <!-- Button trigger modal -->
                        <button type="button" class="slide-modal-item" data-toggle="modal" data-target="#modal5">
                            <img src="images/work5.png" alt="">
                        </button>

                        <!-- Modal -->
                        <div class="slide-modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <ul class="modal-nav">
                                        <li class="modal-nav-li nav-item active">
                                            <a class="modal-nav-link" href="#">UI/UX Design <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link" href="#">Logo Design</a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link" href="#">Websites</a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link " href="#">Web application</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slide">
                        <!-- Button trigger modal -->
                        <button type="button" class="slide-modal-item" data-toggle="modal" data-target="#modal6">
                            <img src="images/work6.png" alt="">
                        </button>

                        <!-- Modal -->
                        <div class="slide-modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <ul class="modal-nav">
                                        <li class="modal-nav-li nav-item active">
                                            <a class="modal-nav-link" href="#">UI/UX Design <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link" href="#">Logo Design</a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link" href="#">Websites</a>
                                        </li>
                                        <li class="modal-nav-li nav-item">
                                            <a class="modal-nav-link " href="#">Web application</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
                <path d="M6.84169 8.825L3.02502 5L6.84169 1.175L5.66669 0L0.666687 5L5.66669 10L6.84169 8.825Z" fill="black"/>
                </svg>
            </span>

            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
                <path d="M0.15834 8.825L3.97501 5L0.15834 1.175L1.33334 0L6.33334 5L1.33334 10L0.15834 8.825Z" fill="black"/>
                </svg>
            </span>

            </a>
      </div>
</section>

<?php
include "includes/footer.php";
?>


<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<!-- stats.js lib -->
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<script src="js/app.js"></script>
<script src="particles.js-master/demo/js/app.js"></script>
<script src="particles.js-master/demo/js/lib/stats.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
