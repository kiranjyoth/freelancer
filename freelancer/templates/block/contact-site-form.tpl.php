<?php 

// dsm($variables);
?>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
                	
        <form id= "contactForm" class="contact-form" action="/" method="post" id="contact-site-form" accept-charset="UTF-8">
        <div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Your Name</label>
                    <input class="form-control form-text requird" type="text" id="edit-name" name="name" size="60" maxlength="255" placeholder="Name" />
                    <p class="help-block text-danger"></p>
                </div>
            </div>    
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Your Email Address</label>
                    <input class="form-control form-text required" type="text" id="edit-mail" name="mail" size="60" maxlength="255" placeholder="Email" />
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label for="edit-subject">Subject</label>
                    <input class="form-control form-text required" type="text" id="edit-subject" name="subject" value="" size="60" maxlength="255" placeholder="Subject"/>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Message</label>
                     <div class="form-textarea-wrapper"><textarea class="form-control form-textarea required" id="edit-message" name="message" cols="60" rows="5" placeholder="Message"></textarea></div>
                    <p class="help-block text-danger"></p>
                </div>
            </div> 
            <br>  
            <div id="success"></div>
            <div class="row">
                <div class="form-group col-xs-12">
                    <input type="hidden" name="form_build_id" value="<?php print $form['form_build_id']['#id']; ?>">
                    <input type="hidden" name="form_token" value="<?php print $form['form_token']['#default_value'];?>">
                    <input type="hidden" name="form_id" value="contact_site_form">
                    <button class="btn btn-success btn-lg form-submit" id="edit-submit" name="op" value="Send message" type="submit">Send</button>
                </div>
            </div>
        </div>
        </form>
            </div>
    </div>
        </div>
    </section>

   