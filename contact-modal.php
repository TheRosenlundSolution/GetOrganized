<?php

echo '<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-8 w3-animate-top" style="margin-top: -6%;">
    <header class="w3-container w3-theme-l1 trs-dkblue"> 
      <span onclick="mailModal()" class="w3-closebtn w3-text-white"><i class="fa fa-remove"></i></span>
      <h4 class="w3-text-white">Have question or comment?</h4>
      <h4 class="w3-text-white">Please leave me a note:</h4>
    </header>
    <div class="w3-padding">
      <div id="contact" class="w3-container">
        <h3 class="trs-text-dkblue w3-padding-top">And Pretty pretty pretty please, no soliciting!  Thanks <i class="fa fa-smile-o"></i><br></h3>
        <form id="ajax-contact" method="post" action="mailer.php">
          <div class="w3-row-padding" style="margin:0 -16px -30px -16px">
            <div class="field w3-half">
              <input class="trs-border-green" type="text" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="field w3-half">
              <input class="trs-border-green" type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="field w3-input">
              <textarea class="trs-border-green" id="message" name="message" placeholder="Message" required style="height: 120px"></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="6Lf1jUgUAAAAAI0zOYdX0G3lB2RCFIwXBjPTzv6c" required></div>
            <button type="submit" class="msg-btn field w3-section w3-light-blue w3-text-white" style=""><i class="fa fa-paper-plane w3-text-white"></i> Send Message</button>
            <div id="form-messages" class="regdiv" required></div>
          </div>
        </form>
        
      </div>
    </div>
    <footer class="w3-container w3-theme-l1 trs-dkblue">
      <p class="w3-text-white">Thank you and have a good one!</p>
    </footer>
  </div>
</div>';

?>