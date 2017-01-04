<section class="section p-b-3 p-t-3" id="contact">
    <h1 class="section-heading custom-section-heading">Contact me</h1>
    <p class="section-description">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s 
    </p>
    <form action="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="container col-lg-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form center">
                        <input type="text" id="form41" class="form-control" />
                        <label for="form41" class="">Your Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form51" class="form-control" />
                        <label for="form52" class="">Your Email</label>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="md-form">
                        <input type="text" id="form52" class="form-control" />
                        <label for="form52" class="">Subject</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md-form">
                        <textarea type="text" id="form76" class="md-textarea"></textarea>
                        <label for="form76" class="">Your Message</label>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </form>
    <div class="center-on-small-only">
        <a class="btn btn-ins dark-blue">Send</a>
    </div>
    
</section>