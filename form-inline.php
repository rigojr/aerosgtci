<div class="modal-overlay">
      <div class="modal">
        
        <a class="close-modal">
          <svg viewBox="0 0 20 20">
            <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg>
        </a><!-- close modal -->

        <!--<div class="modal-content">-->
        <div class="form-login">
          <div class="contact">
            <h2> Contact Us </h2>
          </div>
        <form action="mail_to_glo.php" method="post">
          <div class="form-group">
            <input id="name-contact-1" name="name-contact-1" class="form-control" type="text" placeholder="Full Name" required>
          </div>
          <div class="form-group">
            <input id="mail-contact-1" name="mail-contact-1"  class="form-control" type="email" placeholder="E-Mail" required>
          </div>


          <div class="form-group inlineB">
            <input id="phone-contact" name="phone-contact"  class="form-control" type="tel" placeholder="Phone Number">
          </div>
          <div id="pull" class="form-group inlineB">
            <select id=interest-contact class="form-control">
              <option>Select Your Interest</option>
              <option>Information</option>
              <option>Offers</option>
            </select>
          </div>


          <div class="form-group">
            <TEXTAREA id="text-contact-1" name="text-contact-1"  class="form-control" type="text" placeholder="Your Comments..." required></TEXTAREA> 
          </div>
          <div class="g-recaptcha form-group espacio" data-sitekey="6LcGqEUUAAAAALEQnO-QVgI6orvow86_D9vI-87-"></div>
         <center> <input id="submit" type="submit" name="submit"></input> </center>
        </form>
        <br><p>Lorem ipsum dolor sit amet</p>
        </div>
       <!-- </div> content -->
        
      </div><!-- modal -->
    </div><!-- overlay -->