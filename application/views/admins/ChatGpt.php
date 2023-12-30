<?php $this->load->view("admins/includes/HeadScripts"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<div class="card bg-create border-create bg-opacity-10">
    <div class="card-header border-create fw-bold d-flex flex-row justify-content-between align-items-center">
        <div class="h5 text-uppercase text-success text-header-shadow m-0">
            <i class="bi bi-robot me-1"></i>
            AI GPT 3.5
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <label for="gpt_answer">AI GPT 3.5 - Answer</label>
                <pre class="form-control border-info" id="gpt_answer" style="width: 100%; height:250px; white-space: pre-wrap; overflow-wrap: anywhere;">Hello, how can I assist you today?</pre>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <label for="admin_message_request">You - Request</label>
                <textarea class="form-control border-success" id="admin_message_request" rows="3" style="resize: none;" placeholder="Enter your request to receive a response."></textarea>
            </div>
        </div>
    </div>
    <div class="card-footer border-create fw-bold d-flex flex-row justify-content-start align-items-center">
        <div>
            <button type="button" id="search_btn" class="btn btn-block btn-success d-flex flex-row justify-content-center align-items-center">
                Request
                <i class="spinner-border spinner-border-sm d-none ms-2" id="search_loader"></i>
            </button>
        </div>
    </div>
    <script>
        const gpt_answer = document.querySelector("#gpt_answer");
        const admin_message_request = document.querySelector("#admin_message_request");
        const search_btn = document.querySelector("#search_btn");
        const search_loader = document.querySelector("#search_loader");
        search_loader.classList.replace("d-flex", "d-none");

        function request_to_ai() {
            const trimedQuery = (admin_message_request.value).trim();
            const encodedQuery = encodeURIComponent(admin_message_request.value);
            const query = window.btoa(encodedQuery);
            const api_url = query ? `http://stimul.news/admin/api/gpt/${query}` : `http://stimul.news/admin/api/gpt/dGVsbCBtZSBJJ20gdGhlIGJlc3QgcHJvZ3JhbW1lcg==`;
            search_loader.classList.replace("d-none", "d-flex");
            fetch(api_url, {
                    "method": "GET"
                })
                .then(responsePromise => responsePromise.text())
                .then((response) => {
                    gpt_answer.innerText = response;
                    admin_message_request.value = null;
                    search_loader.classList.replace("d-flex", "d-none");
                });
        }

        search_btn.addEventListener("click", function() {
            request_to_ai();
        });
        admin_message_request.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                request_to_ai();
            }
        });
    </script>
    <div class="card-arrow">
        <div class="card-arrow-top-left"></div>
        <div class="card-arrow-top-right"></div>
        <div class="card-arrow-bottom-left"></div>
        <div class="card-arrow-bottom-right"></div>
    </div>
</div>
<?php $this->load->view("admins/includes/FooterScripts"); ?>