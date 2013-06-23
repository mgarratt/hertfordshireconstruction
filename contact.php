<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb" xml:lang="en-gb">
    <head>

        <title>Hertfordshire Construction</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="en-GB" />
        <meta name="language" content="en-gb"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>

        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.lite.js"></script>
        <script type="text/javascript" src="/contact-files/contact-form.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#banner').cycle({
                    random: true
                });
            });
        </script>
    </head>

    <body>
        <div id="header" class="container">
            <div class="col8" id="logo">
                <img src="img/logo.png" alt="" />
            </div>
            <div class="col4" id="contact">
                <h3>Get In Touch</h3>
                <p><span>Phone:</span> 01462 434 761<br />
                    <span>Mobile:</span>  07725 081 240<br />
                    <span>Email:</span> <a href="mailto:info@hertfordshireconstruction.co.uk">info@hertfordshireconstruction.co.uk</a></p>
                <img src="img/city-guilds-qualified.png" alt="City &amp; Guilds Qualified" id="city-guilds" />
            </div>
        </div>
        <div class="container">
            <div class="col12">
                <ul id="nav" class="menu">
                    <li><a href="/" title="Home">Home</a></li>
                    <li><a href="about.html" title="About Us">About Us</a></li>
                    <li><a href="services.html" title="Our Services">Our Services</a></li>
                    <li class="active"><a href="testimonials.html" title="Testimonials">Testimonials</a></li>
                    <li><a href="contact.html" title="Get In Contact">Get In Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div id="banner" class="col12">
                <img src="img/banners/banner1.jpg" alt="" />
                <img src="img/banners/banner2.jpg" alt="" />
                <img src="img/banners/banner3.jpg" alt="" />
            </div>
        </div>
        <div class="container" id="content">
            <div class="col8">
                <h1>Get In Contact</h1>
                <p>Got a question or would like to receive a quote? Please don't hesitate to get in contact with Hertfordshire Construction either by filling in the form on the right or using our contact details below.</p>
                <p class="contact"><span>Phone:</span> 01462 434 761<br />
                    <span>Mobile:</span>  07725 081 240<br />
                    <span>Email:</span> <a href="mailto:info@hertfordshireconstruction.co.uk">info@hertfordshireconstruction.co.uk</a></p>
                <p>Hertfordshire Constructions services are available in Hitchin and surrounding areas<p>
                <img src="http://maps.google.com/maps/api/staticmap?size=690x410&path=fillcolor:0x00FF00|weight:1|color:0xFFFFFF|enc:g|g~Hjjv@nDs~FnOk}FjZ}zFbe@ewFvo@grF~y@elFbdA{dFzmAo|EbwAasE``BqhEnhBa}DjpBupDxwBmcDp~BkuCtdCofCdjCcwB~nC_gBdsCovApvCoeAdyCet@b{Csb@f|CyPt|C?f|CxPb{Crb@dyCdt@pvCneAdsCnvA~nC~fBdjCbwBtdCnfCp~BjuCxwBlcDjpBtpDnhB`}D``BphEbwA`sEzmAn|EbdAzdF~y@dlFvo@frFbe@dwFjZ|zFnOj}FnDr~FoDr~FoOj}FkZ|zFce@dwFwo@frF_z@blFcdA|dF{mAn|EcwA`sEa`BphEohB`}DkpBtpDywBlcDq~BhuCudCpfCejC`wB_oC`gBesCnvAqvCneAeyCdt@c{Cpb@g|CzPu|C?g|C{Pc{Cqb@eyCet@qvCoeAesCovA_oCagBejCawBudCqfCq~BiuCywBmcDkpBupDohBa}Da`BqhEcwAasE{mAo|EcdA}dF_z@clFwo@grFce@ewFkZ}zFoOk}FoDs~F&sensor=true" class="aligncenter" />
            </div>
            <div class="col4 box">
                <?php
                $contact_form = 1; // set desired form number.
                $contact_form_path = '/var/www/hertfordshireconstruction.co.uk/http/contact-files/'; // set path to /contact-files/ with slash on end.
                require $contact_form_path . 'contact-form-run.php';
                ?>
            </div>
        </div>
        <div class="container" id="footer">
            <div class="col4">
                <p class="copyright">&copy;2013 Hertfordshire Construction.</p>
            </div>
            <div class="col8">
                <ul class="menu">
                    <li><a href="/" title="">Home</a></li>
                    <li><a href="privacy.html" title="">Privacy Policy</a></li>
                    <li><a href="terms-conditions.html" title="">Terms &amp; Conditions</a></li>
                    <li><a href="contact.html" title="">Contact</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>