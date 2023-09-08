<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>

<div class="card">
    <div class="card-header text-success fw-bold d-flex flex-row justify-content-between align-items-center">
        <div>
            TOPBAR - CREATE
        </div>
        <div>
            <button type="submit" form="topbar_form" class="btn btn-outline-success">Create Topbar</button>
        </div>
    </div>
    <div class="card-body">
        <h1 class="h4 text-success">Visibility</h1>
        <form action="<?= base_url('topbar-create-action'); ?>" method="POST" enctype="application/json" id="topbar_form">
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item d-flex flex-row justify-content-between">
                    <div>Topbar</div>
                    <div class="form-check form-switch">
                        <input name="topbar_self" type="checkbox" class="form-check-input">
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between">
                    <div>Date</div>
                    <div class="form-check form-switch">
                        <input name="topbar_date" type="checkbox" class="form-check-input">
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between">
                    <div>Time</div>
                    <div class="form-check form-switch">
                        <input name="topbar_time" type="checkbox" class="form-check-input">
                    </div>
                </li>
                <li class="list-group-item d-flex flex-row justify-content-between">
                    <div>Weather</div>
                    <div class="form-check form-switch">
                        <input name="topbar_weather" type="checkbox" class="form-check-input">
                    </div>
                </li>
            </ul>
        </form>
    </div>
    <div class="card-arrow">
        <div class="card-arrow-top-left"></div>
        <div class="card-arrow-top-right"></div>
        <div class="card-arrow-bottom-left"></div>
        <div class="card-arrow-bottom-right"></div>
    </div>
</div>

<?php $this->load->view("admins/includes/FooterScripts"); ?>