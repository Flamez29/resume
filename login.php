<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.cs">
</head>
<body>
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="title-box-2">
                        <h5 class="title-left">
                          Send us a message 
                        </h5>
                      </div>
                      <div>
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                              </div>
                            </div>
                            <div class="col-md-12 text-center my-3">
                              <div class="loading">Loading</div>
                              <div class="error-message"></div>
                              <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="col-md-12 text-center">
                              <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="title-box-2 pt-4 pt-md-0">
                        <h5 class="title-left">
                          Get in Touch
                        </h5>
                      </div>
                      <div class="more-info">
                        <p class="lead">
                          You can Get in touch with me through the informations provided below:
                        </p>
                        <ul class="list-ico">
                          <li><span class="bi bi-geo-alt"></span> 2A, Alaafia street, oluwo-kekere Bashorun, Ibadan</li>
                          <li><span class="bi bi-phone"></span><a href="tel://08121476646">(234) 812-147-6646</a></li>
                          <li><span class="bi bi-envelope">&nbsp;&nbsp;&nbsp;<em><a href="mailto:">flameztech001@gmail.com</a></em></span> </li>
                        </ul>
                      </div>
                      <div class="socials">
                        <ul>
                          <li><a href="https://web.facebook.com/profile.php?id=100087058522450"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                          <li><a href="https://www.instagram.com/flamez_tech/"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                          <li><a href="https://twitter.com/FLAMEZ_TECH"><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                          <li><a href=""><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->
</body>
</html>