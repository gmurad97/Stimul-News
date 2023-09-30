<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="row">
    <div class="col-xl-3 col-lg-6">
        <div class="card mb-3">
            <div class="card-body">


                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">CRYPTOCURRENCY PRICE</span>
                    <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                </div>





                <div class="small text-inverse text-opacity-50 text-truncate">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Pairs</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($crypto_price as $price) : ?>
                                <tr>
                                    <td><?= $price->symbol; ?></td>
                                    <td><?= round((float)$price->price, 3); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>

            </div>


            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>

        </div>

    </div>


    <div class="col-xl-3 col-lg-6">

        <div class="card mb-3">

            <div class="card-body">

                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">FIAT</span>
                    <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                </div>


                <div class="row align-items-center mb-2">
                    <div class="col-7">
<!--                         <h3 class="mb-0">TEST EXAMPLE FIAT</h3> -->
                    </div>
                    <div class="col-5">
                        <div class="mt-n2" data-render="apexchart" data-type="line" data-title="Visitors" data-height="30"></div>
                    </div>
                </div>


                <div class="small text-inverse text-opacity-50 text-truncate">
                <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Pairs</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($fiat_price as $pricekey => $price) : ?>
                                <tr>
                                    <td><?= $pricekey; ?></td>
                                    <td><?= $price; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>


            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>

        </div>

    </div>


    <div class="col-xl-3 col-lg-6">

        <div class="card mb-3">

            <div class="card-body">

                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">NEW MEMBERS</span>
                    <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                </div>


                <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0">4,490</h3>
                    </div>
                    <div class="col-5">
                        <div class="mt-n3 mb-n2" data-render="apexchart" data-type="pie" data-title="Visitors" data-height="45"></div>
                    </div>
                </div>


                <div class="small text-inverse text-opacity-50 text-truncate">
                    <i class="fa fa-chevron-up fa-fw me-1"></i> 59.5% more than last week<br>
                    <i class="fab fa-facebook-f fa-fw me-1"></i> 45.5% from facebook<br>
                    <i class="fab fa-youtube fa-fw me-1"></i> 15.25% from youtube
                </div>

            </div>


            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>

        </div>

    </div>


    <div class="col-xl-3 col-lg-6">

        <div class="card mb-3">

            <div class="card-body">

                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">BANDWIDTH</span>
                    <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                </div>


                <div class="row align-items-center mb-2">
                    <div class="col-7">
                        <h3 class="mb-0">4.5TB</h3>
                    </div>
                    <div class="col-5">
                        <div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
                    </div>
                </div>


                <div class="small text-inverse text-opacity-50 text-truncate">
                    <i class="fa fa-chevron-up fa-fw me-1"></i> 5.3% more than last week<br>
                    <i class="far fa-hdd fa-fw me-1"></i> 10.5% from total usage<br>
                    <i class="far fa-hand-point-up fa-fw me-1"></i> 2MB per visit
                </div>

            </div>


            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>

        </div>

    </div>


    <!--     <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">LAYOUT</a></li>
            <li class="breadcrumb-item active">STARTER PAGE</li>
        </ul>
        <h1 class="page-header">
            Starter Page <small>page header description goes here...</small>
        </h1>
        <p>
            Start build your page here
        </p> -->







    <?php $this->load->view("admins/includes/FooterScripts"); ?>