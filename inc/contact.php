<div class="contact" id="contact">
            <div class="container">
                <div class="row">
                    <div class="columns six">
                        <h2 class="contact-title">Kontakt & <strong>Hilfe</strong></h2>
                        <p class="contact-subheading">Bitte teilen Sie uns mit, wie das Makler-Team Ihnen helfen kann.Wir freuen uns auf Ihren Kontakt.</p>
                        <ul class="contact-form">
                            <li>
                                <span class="contact-form-icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>+49 000-000-000
                            </li>
                            <li>
                                <span class="contact-form-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>immobilien@immobilien.de
                            </li>
                            <li>
                                <span class="contact-form-icon"><i class="fa fa-twitter"  aria-hidden="true"></i></span>@immobilien
                            </li>
                            <li>
                                <span class="contact-form-icon"><i class="fa fa-facebook-f" aria-hidden="true"></i></span>facebook.com
                            </li>
                            <li>
                                <span class="contact-form-icon"><i class="fa fa-google-plus" aria-hidden="true"></i></span>plus.gmail.com
                            </li>
                            <li>
                                <span class="contact-form-icon"><i class="fa fa-pinterest" aria-hidden="true"></i></span>pinterest
                            </li>
                        </ul>
                    </div>
                    <div class="columns six">
                      <?php if (isset($_GET['contacted'])): ?>
                        <p id="contact-success">Das Formular wurde erfolgreich verschickt.</p>
                     <?php endif; ?>
                     
                        <form action="form.php" class="formular-form" method="POST" >
                                <label for="contact-name" class="contact-label">Your Name*</label>
                                <input name ="name" id="contact-name" class="contact-input" type="text" placeholder="Your Name*" required="required"/>
                                
                                <label for="contact-email" class="contact-label">Your Email*</label>
                                <input mane="email" id="contact-email" class="contact-input" type="email" placeholder="Your E-mail*" required="required" />
                                
                                <label for="contact-message" class="contact-label">Your Message*</label>
                                <textarea mane="message" id="contact-message" class="contact-input" placeholder="Text"></textarea>
                                <input class="contact-submit"  type="submit" value="senden">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>