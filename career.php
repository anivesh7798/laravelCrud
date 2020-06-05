<!DOCTYPE html>
<html lang="en">
<?php require_once('link.php'); ?>

<body>

  <div id="wrapper">

    <!-- start header -->
    <?php require_once('header.php'); ?>
    <!-- end header -->

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Career</li>
              </ul>
              <h2>Career</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
    <!--   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->

      <div class="container">
        <div class="row">
          <div class="span12">
            <h4>Get in touch with us by filling contact form below</h4>

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="row">
                <div class="span6 form-group field">
                  <input type="text" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="span6 form-group">
                  <input type="email" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span12 form-group">
                  <input type="text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span12 form-group">
                  <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                    placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <div class="text-center">
                    <button class="btn btn-theme btn-medium margintop10" type="submit">Send a message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        
        </div>
      </div>
    </section>

    <?php require_once('footer.php'); ?>
  </div>
 <?php require_once('script.php'); ?>

</body>

</html>
