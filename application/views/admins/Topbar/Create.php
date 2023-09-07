<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>

<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">

                    <div class="col-xl-6">
                        <h4>Default</h4>
                    </div>
                    <div class="col-xl-6">
                        <button class="btn btn-outline-danger">Danger</button>
                    </div>
                </div>

            </div>






            <div class="widget-content widget-content-area">
                <div class="row">
                <div class="col-6">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon5">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-5">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon6">@example.com</span>
                        </div>
                    </div>
                </div>
                </div>


                <label for="basic-url">Your vanity URL</label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon7">https://</span>
                    </div>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="example.com/users/">
                </div>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">With textarea</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>

            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admins/includes/Footer"); ?>
<?php $this->load->view("admins/includes/FooterScripts"); ?>