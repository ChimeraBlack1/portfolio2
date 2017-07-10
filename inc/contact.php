<section class="section p-b-3 p-t-3" id="contact">
    <h2 class="section-heading custom-section-heading">Contact me</h2>
    <p class="section-description">
   Thanks for coming! It was great having you! If you'd like to get in touch with me for a project or a position, please let me know by either emailing me or filling out the below contact form.  You can find my email on the footer of the page.  Cheers! 
    </p>
	
	
    <form method="POST" action="#">
        <script>document.querySelector("form").setAttribute("action", "<?php echo htmlspecialchars($_SERVER["inc/process.php"]); ?>")</script>
        <div class="container col-lg-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form center">
                        <input type="text" id="form41" name="name" class="form-control"/>
                        <label for="form41" class="">Your Name</label>
                    </div>
					<span id="nameErr" class="errorTxt"></span>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form51" name="email" class="form-control"/>
                        <label for="form52" class="">Your Email</label>
                    </div>
					<span id="emailErr" class="errorTxt"></span>
                </div>

                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="form52" name="subject" class="form-control"/>
                        <label for="form52" class="">Subject</label>
                    </div>
					<span id="subjectErr" class="errorTxt"></span>
                </div>
                <div class="col-md-12">
                    <div class="md-form">
                        <textarea id="form76" name="message" class="md-textarea"></textarea>
                        <label for="form76" class="">Your Message</label>
                    </div>
					<span id="messageErr" class="errorTxt"></span>
                </div>
            </div>
        </div>
        <br />
        <div class="center-on-small-only">
            <button type="submit" name="submit" class="btn btn-ins dark-blue custom-button">Send</button>
        </div>
    </form>   
	
	<div id="successMessage" class="center-text success"></div>
	
</section>