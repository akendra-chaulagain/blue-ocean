@extends('layouts.master')
    @section("content")
        
		






    <section id="pageCover" class="row">
        <img src="images/contactCover.png" alt="" class="pageCover">
        <div class="row pageTitle">Contact us</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
              <li><a href="index.html">home</a></li>
              <li class="active">contact us</li>
            </ol>
        </div>
    </section>
    
    <section id="contacts" class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row m0">
                        <h3>Get in touch!</h3>
                        <ul class="list-inline">
                            <li><i class="fa fa-home"></i> Tokha Rd, Tokha 44600</li>
                            <li><i class="fa fa-phone"></i> <a href="tel:977014351732">+977 (01) 4351732</a> / <a href="tel:977014365826">4365826</a></li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:info@blueocean.com.np">info@blueocean.com.np</a></li>
                        </ul>
                    </div>
                    <div class="row m0 commentForm">
                        <form action="{{route('contactstore')}}" method="POST" class="row m0" id="contactForm" method="post" name="contact" action="contact_process.php" enctype='multipart/form-data'>
							@csrf
                            <div class="col-sm-6 p0 commenterInfoInputs">
                                <div class="row m0">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="name" id="name"  placeholder="Name">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="e-mail">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="number"  name="number" id="number" class="form-control" placeholder="Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p0">
                                <div class="row m0">                                        
                                    <div class="input-group">
                                        <textarea placeholder="Message" name="message" id="message" class="form-control"></textarea>
                                    </div>
                                    <button class="btn btn-default" type="submit">send message</button>
                                </div>
                            </div>
                        </form>                        
                        <div id="success">
                            <span class="green textcenter">
                                <p>Your message was sent successfully! I will be in touch as soon as I can.</p>
                            </span>
                        </div>
                        <div id="error">
                            <span>
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </span>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-6">
                    <h3>Find us on Google Map</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14125.46814984318!2d85.31882!3d27.736823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5720ce5d1932f007!2sBlue%20Ocean%20Overseas!5e0!3m2!1sen!2snp!4v1659003560367!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>            
        </div>
    </section>






 
    @endsection
    

