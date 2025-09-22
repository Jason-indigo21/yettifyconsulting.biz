<!--== Start Contact Page Area Wrapper ==-->
<div class="contact-page-area-wrapper sp-y">
    <div class="container">
        <div class="contact-content-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-area contact-method">
                        <h3>Send us a Message</h3>

                        <div class="contact-form-wrap">
                            <form action="mailFunction.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="firstname" placeholder="First Name *" required/="">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="lastname" placeholder="Last Name *" required/="">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="email" name="email" placeholder="Email address *" required/="">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="phoneno" placeholder="Your Phone">
                                            </label>
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <div class="single-input-item">
                                            <label for="con_message" class="sr-only m-0"></label>
                                            <textarea name="message" id="con_message" cols="30" rows="7" placeholder="Message *" required=""></textarea>
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <input type="text" id="captcha_mail" name="captcha" hidden>
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group ">
                                                            <input type="text" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" id="submit"
                                                                placeholder="Captcha" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 mt-2 text-center">
                                                        <div onclick="generate()">
                                                            <i class="fa fa-refresh"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                                                style="text-decoration:line-through;text-align:center; font-style: italic;"
                                                                id="captchandler" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="button" id="btnCheck" class="btn-outline w-100"
                                                            onclick="printmsg()">
                                                            Check </button>
                                                    </div>
                                                </div>
                                                <p id="key" style="color:green; font-weight:bold; padding:10px 5px;"></p>
                                            </div>
                                        </div>

                                        <div class="single-input-item mb-0 mt-40">
                                            <button class="btn-outline">Send Message</button>
                                        </div>

                                        <div class="form-message"></div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-information contact-method">
                        <div class="contact-info-con">
                            <h3>Contact Info</h3>

                            <div class="widget-item m-0">
                                <address>
                                    <p><strong>Address:</strong>
                                        <br>
                                        AXA Tower 36 floor, Unit 5-6 Kuningan City Jl. Pr
                                        Jakarta Selatan, Indonesia
                                    </p>
                                    <br>
                                    <p><strong>Email:</strong>
                                        <a class="text-white" href="mailto:itservices@yettifyconsulting.biz">itservices@yettifyconsulting.biz</a>
                                    </p>
                                    <br>
                                    <p><strong>Phone:</strong>
                                        (+62) 2150334985</p>
                                </address>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if ($_REQUEST['email-sent'] == 'success') {
    echo '<script>
				Swal.fire({
				icon: "success",
				title: "Message sent",
				showConfirmButton: false,
				timer: 2000    })
     		 </script>';
}
?>
<!--== End Contact Page Area Wrapper ==-->