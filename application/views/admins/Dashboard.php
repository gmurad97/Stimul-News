<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="row">
    <div class="col-md-6">
        <div class="card bg-theme border-theme bg-opacity-10 mb-3">
            <div class="card-body">
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1 text-success">FIAT PRICE - USD</span>
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
                            <?php foreach ($fiat_price as $fiat_item_symbol => $fiat_item_price) : ?>
                                <tr>
                                    <td><?= $fiat_item_symbol; ?></td>
                                    <td><?= $fiat_item_price; ?></td>
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
    <div class="col-md-6">
        <div class="card bg-theme border-theme bg-opacity-10 mb-3">
            <div class="card-body">
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1 text-success">CRYPTOCURRENCY PRICE</span>
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
                            <?php foreach ($crypto_price as $crypto_item_price) : ?>
                                <tr>
                                    <td><?= $crypto_item_price->symbol; ?></td>
                                    <td><?= round((float)$crypto_item_price->price, 3); ?></td>
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
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>