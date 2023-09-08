<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>

<div class="card">
    <div class="card-header text-warning fw-bold">TOPBAR - EDIT</div>
    <div class="card-body">
        <h1 class="h4 text-warning">Visibility</h1>
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item d-flex flex-row justify-content-between">
                <div>Topbar</div>
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input">
                </div>
            </li>
            <li class="list-group-item d-flex flex-row justify-content-between">
                <div>Date</div>
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input">
                </div>
            </li>
            <li class="list-group-item d-flex flex-row justify-content-between">
                <div>Time</div>
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input">
                </div>
            </li>
            <li class="list-group-item d-flex flex-row justify-content-between">
                <div>Weather</div>
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input">
                </div>
            </li>
        </ul>
    </div>
    <div class="card-arrow">
        <div class="card-arrow-top-left"></div>
        <div class="card-arrow-top-right"></div>
        <div class="card-arrow-bottom-left"></div>
        <div class="card-arrow-bottom-right"></div>
    </div>
</div>

<?php $this->load->view("admins/includes/FooterScripts"); ?>