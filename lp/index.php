<html>
<?php 
  
    $sub = null;
    $phn = null;
    $lnk = "http://lp.garagedoorasapservice.com/";
    if(isset($_GET["s"])){
        $areas = explode("-",$_GET["s"]);
        $sub = "";
        foreach($areas as $area){
            $sub .= ucwords(htmlspecialchars($area))." ";
        }
        $sub = trim($sub);
    }
    if(isset($_GET["p"])){
        $phn = $_GET["p"];
        $phnFrmt = preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $phn). "";

    }
    if(!$sub){
        $sub = "Orlando";
    }
    if(!$phn){
        $phn = "4075356633";
        $phnFrmt = preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $phn). "";
    }
    
?>

<head>
    <!-- START META SECTION -->
    <base href="<?php echo $lnk;?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Garage Door ASAP Service</title>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content=" " />
    <meta name="description" content=" " />
    <link href="css/font.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <script type="text/javascript">
    (function(a,e,c,f,g,h,b,d){var k={ak:"871436987",cl:"oKkdCMf5gHEQu6XEnwM",autoreplace:"<?php echo $phnFrmt;?>"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]||(a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script");
    </script>
</head>

<body>
<!--  Clickcease.com tracking-->
<script type="text/javascript">
    var script = document.createElement("script");
    script.async = true; script.type = "text/javascript";
    var target = 'https://www.clickcease.com/monitor/stat.js';
    script.src = target;
    var elem = document.head;
    elem.appendChild(script);
</script>
<noscript><a href="https://www.clickcease.com"><img src="https://monitor.clickcease.com/stats/stats.aspx" alt="Click Fraud Protection" /></a></noscript>
<!--  Clickcease.com tracking-->
    <div id="header-cta">
        <div class="mobile-cta">
            <div class="col-md-12">
                <h3><span><i class="fa fa-phone" aria-hidden="true"></i> 24/7 Garage Door Service</span><a href="tel:<?php echo $phn; ?>"
                        class="btn btn-cta">Call <?php echo $phnFrmt; ?></a></h3>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="container color-inverse">
            <div class="row mt-50">
                <div class="col-md-12 text-center">
                    <img src="images/logo-header-blue.png" class="header-logo">
                    <h1><span>Fast, Affordable And Reliable Garage Door Service & Repair <?php echo $sub; ?>, FL</span></h1>
                    <div class="row">
                        <div class="col-md-6 no-padding-left">
                            <div class="drop-shadow curved text-center-vertically" onclick="scrollTo(document.body, document.getElementById('door-spring').offsetTop, 300);">
                                <p class="box-service">Garage Door Spring Replacement</p>
                            </div>
                        </div>
                        <div class="col-md-6 no-padding-left">
                            <div class="drop-shadow curved text-center-vertically" onclick="scrollTo(document.body, document.getElementById('door-opener').offsetTop, 300);">
                                <p class="box-service">Garage Door Opener Repair & Replacement</p>
                            </div>
                        </div>
                 
                    </div>
                    <h2 class="title-sub">We Specialize In All Types, Makes and Brands Of Garage Doors
                        <br>and Garage Door Openers.</h2>
                    <h3 class="header-cta"><i class="fa fa-phone" aria-hidden="true"></i> 24/7 Service - <a href="tel:<?php echo $phn; ?>" class="btn btn-cta">Call <?php echo $phnFrmt; ?></a></h3>
                </div>
            </div>
            <div class="row service-catalog">
                <div class="col-md-12">
                    <div class="col-sm-12">
                        <div class="col-md-offset-2 col-md-4 no-padding header-bullets">
                            <p class="header-description text-right-l">
                                <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Best Prices Guaranteed</p>
                                <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Same Day Service</p>
                                <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Fine Workmanship</p>
                                <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Guaranteed Parts</p>
                                <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Licensed, Bonded and Insured</p>
                            </p>
                        </div>
                        <div class="col-md-offset-1 col-md-4 no-padding header-bullets">
                            <p class="header-description text-right-l">
                                <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 24/7 Emergency Service</p>
                                <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Family Owned & Operated</p>
                                <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Unmatched Customer Service</p>
                                <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Professional Superior Service</p>
                                <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 100% Satisfaction Guaranteed</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <a href="https://www.google.com/maps/place/Garage+Door+ASAP+Service/@28.505861,-81.7689547,17z/data=!4m7!3m6!1s0x88e7894ff1fd8cc3:0x4bd696395a30e80b!8m2!3d28.505861!4d-81.766766!9m1!1b1"
                            target="_blank"><img src="images/5stargoogle.png" alt="" class="img-responsive header-img-sm"></a>
                            <a href="https://member.angieslist.com/member/store/24091134?ref=search&categoryId=68"
                            target="_blank"><img src="images/5s1.png" alt="" class="img-responsive header-img-sm"></a>
                            <a href="https://m.yelp.com/biz/garage-door-asap-service-clermont"
                            target="_blank"><img src="images/5s2.png" alt="" class="img-responsive header-img-sm"></a>
                            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="scroll-down"><i class="fa fa-chevron-down bounce" aria-hidden="true"></i></p>
                </div>
            </div>
        </div>
    </div>
    <div id="cta">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-testimonial">
                        <blockquote>Called Garage Door ASAP and they responded almost <b>immediately.</b> Service man, Rami was very
                            informative and polite. He did not push to sell. Job well done! Would I recommend? <b>ABSOLUTELY!!</b>
                            <span class="author">-Joann Deronda, <?php echo $sub; ?></span>
                        </blockquote>
                        <blockquote>
                            The house I bought had a broken garage door that wouldn’t open, it left us frustrated because we couldn’t get everything
                            we needed in the house. We called Garage door ASAP service <b>They came in two hours,</b>                            fixed the garage door and had the friendliest workers ever! Million thanks!!<b> Would recommend to anyone!</b>
                            <span class="author">-Carole Engels, <?php echo $sub; ?></span>
                        </blockquote>
                        <blockquote>
                            <b>True five Star service.</b> Garage door with multiple issues, called had the service truck
                            at my home within 2 hours, and I one hour later,
                            <b>fixed perfect!</b> thank you thank you.
                            <span class="author">-Douglas Abbott, <?php echo $sub; ?></span>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-container" id="callback">
                        <div class="pop-body">
                            <h4 class="title small">Request A Callback</h4>
                            <form action="form.php" method="POST" class="form-widget">
                                <div class="field-wrp">
                                    <div class="form-group">
                                        <label class="form-label">Your Name</label>
                                        <input class="form-control" data-label="Name" required="" data-msg="Please enter name." type="text" name="name" placeholder="Enter your name"
                                            aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Your Phone Number</label>
                                        <input class="form-control" data-label="Phone" required="" data-msg="Please phone number." type="text" name="phone" placeholder="Enter your phone number"
                                            aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">When Would You Like Us To Call You?</label>
                                        <input class="form-control" data-label="time" required="" type="text" name="time" placeholder="Please Enter When You'd Like Us To Call"
                                            aria-required="true">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-cta btn-uniform">Request My Callback</button>
                                    </div>
                                    <span class="cta-sub">*We will respond within minutes</span>
                                </div>

                            </form>
                            <div class="msg-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="why-us" class="color-inverse">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>We Are Here To Help!</h1>
                    <p>Garage door problems don’t always happen at convenient times. When you have a garage door emergency repair
                        need, you may not be able to wait until normal business hours to address it.
                        <br>That’s why we make our local technicians available 24 hours a day, 7 days per week. No matter
                        when your garage door stops working, you can trust us to provide prompt, efficient and professional
                        repairs.
                    </p>
                    <p>No matter what type of garage door repair you face, and what time you face it, our local repair professionals
                        are ready to help, have been thoroughly vetted for their professionalism and expertise and can be
                        at your home or business at any time of day.</p>
                    <h3>Expert Services, 24-Hours A Day, 7 Days A Week!</h3>
                    <p>Don’t call a less than adequate garage door repair company to service the door at your home or business
                        in
                        <?php echo $sub; ?>. You should only allow the best to service your garage door or garage door opener. <b>Available for your convenience 24/7</b>.</p>
                </div>
                <div class="col-md-5">
                    <h2>Garage Door ASAP Service</h2>
                    <div class="text-left value-p">
                        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 30+ Years Of Experience</p>
                        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Family Owned &amp; Operated</p>
                        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Same-Day, Local Service in
                            <?php echo $sub; ?>
                        </p>
                        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> No Additional Charges For Nights, Holidays
                            Or Weekends</p>
                        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Affordable &amp; Competitive Prices</p>
                        <!--<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 10% Discount For Senior Citizens</p>-->
                        <!--<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 10% discount for veterans</p>-->
                    </div>
                    <br>
                    <div class="text-center">
                        <a href="tel:<?php echo $phn; ?>" class="btn btn-cta">Call <?php echo $phnFrmt; ?> Now!</a>
                        <br>
                        <br>
                        <div onclick="document.getElementById('callback').scrollIntoView();" class="btn btn-cta">Request A Callback</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Call Us On <a href="tel:<?php echo $phn; ?>"><span><u><b><?php echo $phnFrmt; ?></b></u></span></a> &amp;
                        Get The Best Garage Door Service in
                        <?php echo $sub; ?> Now!</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="door-spring" class="color-inverse">
        <div class="overlay"></div>
        <div class="container">
            <div class="col-sm-8 pad-col">
                <h1>Garage Door Spring Replacement</h1>
                <p>
                    Got a broke spring on your garage door, We've got you covered, Get your Garage Door springs replaced Now!, At Garage Door
                    ASAP Service It we use the best quality of Garage door springs that lasts you up to 50,000 Cycles.
                    <!--Our Garage Door Springs come with a Life Time warranty, So with a one time Replacement , You're Set For Life!-->
                </p>
                <div class="text-padding value-p">
                    <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Up to 50,000 Cycles</p>
                    <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Best Price Guarantee</p>
                    <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Heavy - Duty Hardware</p>
                    <!--<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Life-Time Warranty</p>-->
                </div>
            </div>
            <div class="col-sm-4">
                <img src="images/SPRING-REPLACEMENT.jpg" alt="Spring Door Replacement" class="img-responsive margin-top-50">
            </div>
        </div>
    </div>
    <div id="door-opener">
        <div class="container">
            <div class="col-sm-4">
                <img src="images/Opener.jpg" alt="Doors Opener" class="img-responsive expert-bg">
            </div>
            <div class="col-sm-8 pad-col">
                <h2><span>Garage Door Opener Repair / Replacement</span></h2>
                <p>Having trouble with your garage door opener, Need Help in deciding whether to get it fixed or get it replaced,
                    <b>We've got you covered</b>, We have experience in fixing and installing all the different models and
                    brands of garage door openers, If your better off getting a new opener,
                    <b>We carry the best Garage Door Openers in the market</b>,</p>
                <div class="col-md-6">
                    <div class="text-padding">
                        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Best Price Guarantee</p>
                        <!--<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 5 Year Warranty</p>-->
                        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Heavy - Duty Hardware</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-padding">
                        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Latest Security and Connectivity features</p>
                        <!--<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Guaranteed Parts</p>-->
                        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> All Models and Brands</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-padding">
                        <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> High End Keypads for full Control and
                            Security
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div id="door-spring" class="color-inverse">
        <div class="overlay"></div>

        <div class="container">
            <div class="col-sm-4">
                <img src="images/TechRepair.jpg" alt="garage door maintenance" class="img-responsive expert-bg">
            </div>
            <div class="col-sm-8 pad-col">
                <h2><span>Garage Door ASAP Service</span></h2>
                <p>
                    <b>We Cater To All Your Garage Door Needs.</b>
                </p>
                <p>With <b>decades of experience</b>, we’re prepared to handle any situation, both commercial and residential.
                    Whether it’s new installations, broken spring replacement, or problems with cables and pulleys, <br><b><u>we do it all</u></b>!</p>

                <p>There’s <b>no extra charge</b> for Sunday service and we perform service and installations year round. When
                    you call, <b>we offer speedy and same-day service</b>. Our team of <b>highly trained technicians</b>                    arrives prepared to do the job right the first time. We’ll address your situation before and after the
                    work is done. That way you'll never need to call us back to fix a problem.</p>
                <br>
                <a href="tel:<?php echo $phn; ?>" class="btn btn-cta">Call <?php echo $phnFrmt; ?> Now!</a> -
                <div onclick="document.getElementById('callback').scrollIntoView();" class="btn btn-cta">Request A Callback</a>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <div class="col-sm-12 text-center">
                <p class="copyright">© 2017 Garage Door ASAP Service -
                    <a href="tel:<?php echo $phn; ?>">
                        <?php echo $phnFrmt; ?>
                    </a>
                </p>
            </div>
        </div>
    </div>
    <script>
        function scrollTo(element, to, duration) {
            if (duration <= 0) return;
            var difference = to - element.scrollTop;
            var perTick = difference / duration * 10;

            setTimeout(function () {
                element.scrollTop = element.scrollTop + perTick;
                if (element.scrollTop === to) return;
                scrollTo(element, to, duration - 10);
            }, 10);
        }
    </script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-102050287-1', 'auto');
        ga('send', 'pageview');
    </script>

</body>

</html>