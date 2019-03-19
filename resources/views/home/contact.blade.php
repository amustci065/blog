@extends ('layouts.main')

@section ('content')

<!-- Start Search Popup Area -->
<div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- End Search Popup Area -->
    
    <!-- Start Page Title Area -->
    <div class="page-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h3>Contact Us</h3>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    
    <!-- Start Contact Area -->
    <section class="contact-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="contact-info">
                                <i class="fa fa-map-marker"></i>
                                <h3>Visit Our Office</h3>
                                <p>7, Awolowo Way, Ikeja,Lagos</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="contact-info">
                                <i class="fa fa-envelope"></i>
                                <h3>Mail us</h3>
                                <p><a href="#">info@hrdac.com.ng</a></p>
                                <p><a href="#">mail@hrdac.com.ng</a></p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="contact-info">
                                <i class="fa fa-phone"></i>
                                <h3>Call us</h3>
                                <p><a href="#">+234 803 320 0138</a></p>
                                <p><a href="#">+234 802 822 5548</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="contact-form">
                                    <form id="contactForm">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required data-error="Please enter your name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required data-error="Please enter your email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="number" id="number" placeholder="Your Phone Number" required data-error="Please enter your phone number">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required data-error="Please enter your subject">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message" required data-error="Write your message"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <button type="submit" class="btn btn-primary">Send Message</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div> 
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <!-- Start Map Area -->
                                <div id="map"><iframe width="100%" height="550px" id="gmap_canvas" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=7%2C%20Awolowo%20Way%2C%20Ikeja%2CLagos+(human%20right%20defenders%20and%20advocacy%20centre)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create a route on google maps</a></iframe></div>
                                <!-- End Map Area -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
    
    <!-- Start Partner Area -->
    <section class="partner-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h3>Client</h3>
                <h2>Our <span>Partner</span></h2>
            </div>
            <div class="row">
                <div class="partner-slider">
                    <div class="item">
                        <a href="https://icpc.gov.ng/"><img src="assets/img/partner-icpc.png" alt="ICPC"></a>
                    </div>
                    
                    <div class="item">
                        <a href="https://www.nigeriarights.gov.ng/"><img src="assets/img/partner-nhrc.png" alt="National Human Right Commission"></a>
                    </div>
                    
                    <div class="item">
                        <a href="http://lagosministryofjustice.org/"><img src="assets/img/partner-ministry-of-justice.png" alt="Lagos State Ministry of Justice"></a>
                    </div>
                    
                    <div class="item">
                        <a href="https://www.naptip.gov.ng/"><img src="assets/img/partner-naptip.png" alt="National Agency for the Prohibition of Trafficking in Persons"></a>
                    </div>
                    
                    <div class="item">
                        <a href="https://icpc.gov.ng/"><img src="assets/img/partner-icpc.png" alt="partner"></a>
                    </div>
                    
                    <div class="item">
                        <a href="https://www.nigeriarights.gov.ng/"><img src="assets/img/partner-nhrc.png" alt="partner"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Partner Area -->

    @endsection