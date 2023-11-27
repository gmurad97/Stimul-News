<?php $this->load->view("users/includes/HeadScripts"); ?>
<?php $this->load->view("users/includes/PreLoader"); ?>
<?php $this->load->view("users/includes/HeaderNavbar"); ?>
<?php $this->load->view("users/includes/Breadcrumb"); ?>

<!-- START CONTACT -->
<div class="section pb_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon">
                        <i class="ti-location-pin"></i>
                    </div>
                    <div class="contact_text">
                        <span>Address</span>
                        <p>123 Street, Old Trafford, London, UK</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon">
                          <i class="ti-mobile"></i>
                    </div>
                    <div class="contact_text">
                        <span>Phone</span>
                        <p>+ 457 789 789 65</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon">
                        <i class="ti-email"></i>
                    </div>
                    <div class="contact_text">
                        <span>Email Address</span>
                        <a href="mailto:info@sitename.com">info@yourmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTACT -->

<!-- START SECTION MAP -->
<div class="section p-0">
	<div class="container-fluid p-0">
    	<div class="row no-gutters">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="map">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION MAP -->

<!-- START CONTACT -->
<div class="section">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-lg-6 col-md-9">
            	<div class="heading_s1 text-center">
                	<h2>Get In touch</h2>
                </div>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
            	<div class="field_form">
                    <form method="post" name="enq">
                        <div class="row">
                            <div class="form-group col-md-6">
                            	<label>Name<span class="required">*</span></label>
                                <input required="" placeholder="Enter Name" id="first-name" class="form-control" name="name" type="text">
                             </div>
                            <div class="form-group col-md-6">
                            	<label>Email<span class="required">*</span></label>
                                <input required="" placeholder="Enter Email" id="email" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-md-6">
                            	<label>Phone<span class="required">*</span></label>
                                <input required="" placeholder="Enter Phone No" id="phone" class="form-control" name="phone" type="text">
                            </div>
                            <div class="form-group col-md-6">
                            	<label>Subject</label>
                                <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="text">
                            </div>
                            <div class="form-group col-md-12">
                            	<label>Message<span class="required">*</span></label>
                                <textarea required="" placeholder="Enter Message" id="description" class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default" id="submitButton" name="submit" value="Submit">Send Message</button>
                            </div>
                            <div class="col-md-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>		
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START CONTACT -->


<?php $this->load->view("users/includes/NewsSubscribe"); ?>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>