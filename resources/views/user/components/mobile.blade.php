
    <!-- Mobile version of QuadQue Tech Laravel Vue version-->

    <!--------------- Mobile header section ----------------------->
    <div id="mobile-version">
            <section id="mobile-header">
                <div class="mobile-header d-flex justify-content-between">
                    <div class="mobile-icon">
                        <img src="{{asset('/assets/img/mobile-icon.svg') }}" />

                    </div>
                    <div class="mobile-hambergur" onclick="showMenuMobile()" show="off">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </section>

              <!--------------- Mobile menu section ----------------------->
            <section id="mobile-menu">
                <div class="mob-menu-item">
                    <p><a href="#mobile-caseStudy" onclick="showMenuMobile()">Work</a></p>
                    <p><a href="#mobile-aboutus" onclick="showMenuMobile()">About</a></p>
                    <p><a href="#mobile-service" onclick="showMenuMobile()">Service</a></p>
                    <p><a href="#mobile-blogs" onclick="showMenuMobile()">Blogs</a></p>
                    <p><a href="#mobile-contact" onclick="showMenuMobile()">Contact</a></p>
                </div>
            </section>

             <!--------------- Mobile home section ----------------------->
          


                <section id="mobile-home">
                    <div class="hero-text">
                        <h1>We Build Awesome Creation</h1>
                    </div>
                    <div class="hero-contact-us">
                        Contact Us<a href="#mobile-contact"><img src="{{ asset('assets/img/contact-icon.png') }}" /></a>

                    </div>
                    <div class="mobile-hero-video">
                        <video autoplay loop muted>
                            <source src="{{ asset('/assets/bg-video/header-video-3.mp4') }}" type="video/mp4" />

                        </video>
                    </div>
                    <div class="lower-section d-flex justify-content-between">
                        <div class="home-start-project"><a href="#">Start Project</a></div>
                        <div class="home-language"><a href="#">EN</a><a href="#">BN</a></div>
                    </div>
                </section>


    <!--  mobile service -->
        <section id="mobile-service" >

            <div class="mob-service-main-content">
                <div class="mob-carousel">
                    <div class="slick-service">
                        <div class="carousel-content">
                            <div class="lottie">
                                <img src="{{asset('assets/img/services-carousel/ux.gif')}}">
                            </div>

                            <h1>UI/UX</h1>
                            <div></div>

                            <p>
                                We create premium web design, thoughtful and user-friendly that
                                solve business problems We create premium web design, thoughtful
                                and user-friendly that solve business problems
                            </p>
                            <div class="slide-name row gx-3">
                                <div class="prev-page col-4">AI & IoT Solutions</div>
                                <div class="current-page col-4">UI/UX</div>
                                <div class="next-page col-4">digital marketing</div>
                            </div>
                           
                        
                        </div>
                        <div class="carousel-content">
                            <div class="lottie">
                                  <img src="{{asset('assets/img/services-carousel/dm.gif')}}">
                            </div>
                            <h1>Digital <br />Marketing</h1>
                            <p>
                                We create premium web design, thoughtful and user-friendly that
                                solve business problems We create premium web design, thoughtful
                                and user-friendly that solve business problems
                            </p>
                            <div class="slide-name row gx-3">
                                <div class="prev-page col-4">UI/UX</div>
                                <div class="current-page col-4">digital marketing</div>
                                <div class="next-page col-4">mobile app marketing</div>
                            </div>
                        </div>
                        <div class="carousel-content">
                            <div class="lottie">
                                  <img src="{{asset('assets/img/services-carousel/wd.gif')}}">
                            </div>
                            <h1>web development</h1>
                            <p>
                                We create premium web design, thoughtful and user-friendly that
                                solve business problems We create premium web design, thoughtful
                                and user-friendly that solve business problems
                            </p>

                            <div class="slide-name row gx-3">
                                <div class="prev-page col-4">digital markting</div>
                                <div class="current-page col-4">web development</div>
                                <div class="next-page col-4">software development</div>
                            </div>
                        </div>
                        <div class="carousel-content">
                            <div class="lottie">
                                  <img src="{{asset('assets/img/services-carousel/sd.gif')}}">
                            </div>
                            <h1>software development</h1>
                            <p>
                                We create premium web design, thoughtful and user-friendly that
                                solve business problems We create premium web design, thoughtful
                                and user-friendly that solve business problems
                            </p>
                            <div class="slide-name row gx-3">
                                <div class="prev-page col-4">web development</div>
                                <div class="current-page col-4">software development</div>
                                <div class="next-page col-4">AI & IoT Solutions</div>
                            </div>
                        </div>
                        <div class="carousel-content">
                            <div class="lottie">
                                  <img src="{{asset('assets/img/services-carousel/ai.gif')}}">
                            </div>
                            <h1>AI & IoT Solutions</h1>
                            <p>
                                We create premium web design, thoughtful and user-friendly that
                                solve business problems We create premium web design, thoughtful
                                and user-friendly that solve business problems
                            </p>
                            <div class="slide-name row gx-3">
                                <div class="prev-page col-4">software development</div>
                                <div class="current-page col-4">AI & IoT Solutions</div>
                                <div class="next-page col-4">UI/UX</div>
                            </div>
                        </div>

                       
                    </div>
                    <div class="d-flex justify-content-between carousel-controller">
                        <div><a href="#mobile-start-project">Start Project</a></div>
                        <div><button onclick="showNext(this)">Next</button></div>
                    </div>
                </div>
            </div>
        </section>

                <!--------------- Mobile customer section ----------------------->

                <section id="mobile-customers">

                    <div class="customer-text">
                        <h2>More then valuable <span>100</span>coustomers</h2>
                        <p>
                            We create premium web design, though and user-friendly that solve
                            business problems We create premium web design.
                        </p>
                    </div>
                    <div class="customer-gallery">
                        <div class="d-flex justify-content-between">
                            <div><img src="{{ asset('/assets/img/customers/atr.svg') }}" /></div>


                            <div><img src="{{ asset('/assets/img/customers/otobi.svg') }}" /></div>


                        </div>
                        <div class="d-flex justify-content-between">
                            <div><img src="{{ asset('/assets/img/customers/ibm.svg') }}" /></div>


                            <div><img src="{{ asset('/assets/img/customers/nta.svg') }}" /></div>


                        </div>
                        <div class="d-flex justify-content-between">
                            <div><img src="{{ asset('/assets/img/customers/officemate.svg') }}" /></div>


                            <div><img src="{{ asset('/assets/img/customers/toptrip.svg') }}" /></div>


                        </div>
                        <div class="d-flex justify-content-between">
                            <div><img src="{{ asset('/assets/img/customers/marriage.svg') }}" /></div>


                            <div><img src="{{ asset('/assets/img/customers/otobi.svg') }}" /></div>


                        </div>
                    </div>
                </section>

                <!--------------- Mobile case study section----------------------->

               <section id="mobile-caseStudy">

                    <div class="caseStudy-text">
                        <h1>Case study</h1>
                        <p>We create premium web design, though and user</p>
                        <a href="#">See More</a>
                    </div>
                    <div class="mob-casestudy-carousel">
                         
                            <!-- Set up your HTML -->
                            <div class="owl-carousel owl-theme">
                              <div class="item"> <img src="http://127.0.0.1:8000/assets/img/case_study/1661245065.png"> </div>
                              <div class="item"><img src="http://127.0.0.1:8000/assets/img/case_study/1661245283.png">  </div>
                              <div class="item"> <img src="http://127.0.0.1:8000/assets/img/case_study/1661245392.png"> </div>
                              <div class="item"> <img src="http://127.0.0.1:8000/assets/img/case_study/1661252794.png"> </div>
                              <div class="item"> <img src="http://127.0.0.1:8000/assets/img/case_study/1661252794.png">  </div>
                             
                            </div>

                      </div>

                    </div>
                </section>

                <!--------------- Mobile client section ----------------------->

                <section id="mobile-client">

                    <h1>Our clients speak</h1>
                     <div class="owl-carousel owl-theme">
                              <div class="item"> 
                                      <div class="mob-client-carousel">
                            <div class="client-details d-flex justify-content-between">
                                <p>Sourab Sen</p>
                                <p>Texlab CEO</p>
                            </div>
                            <div class="mob-client-img">
                                <img src="{{ asset('/assets/img/client_img.svg') }}" />

                            </div>
                            <div class="client-comment">
                                <p>
                                    We create premium web design, though and user Business Analytics
                                    is not based on rote memorization of equations or facts, but
                                    focuses on honing your understanding of key concepts, your
                                    managerial judgment, and your ability to apply course concepts to
                                    real business problems. This course begins with basic descriptive
                                    statistics and progresses to regression analysis.
                                </p>
                            </div>
                        </div>
                               </div>
                              <div class="item">  <div class="mob-client-carousel">
                            <div class="client-details d-flex justify-content-between">
                                <p>Sourab Sen</p>
                                <p>Texlab CEO</p>
                            </div>
                            <div class="mob-client-img">
                                <img src="{{ asset('/assets/img/client_img.svg') }}" />

                            </div>
                            <div class="client-comment">
                                <p>
                                    We create premium web design, though and user Business Analytics
                                    is not based on rote memorization of equations or facts, but
                                    focuses on honing your understanding of key concepts, your
                                    managerial judgment, and your ability to apply course concepts to
                                    real business problems. This course begins with basic descriptive
                                    statistics and progresses to regression analysis.
                                </p>
                            </div>
                        </div> </div>
                              <div class="item">   <div class="mob-client-carousel">
                            <div class="client-details d-flex justify-content-between">
                                <p>Sourab Sen</p>
                                <p>Texlab CEO</p>
                            </div>
                            <div class="mob-client-img">
                                <img src="{{ asset('/assets/img/client_img.svg') }}" />

                            </div>
                            <div class="client-comment">
                                <p>
                                    We create premium web design, though and user Business Analytics
                                    is not based on rote memorization of equations or facts, but
                                    focuses on honing your understanding of key concepts, your
                                    managerial judgment, and your ability to apply course concepts to
                                    real business problems. This course begins with basic descriptive
                                    statistics and progresses to regression analysis.
                                </p>
                            </div>
                        </div></div>
                              <div class="item">   <div class="mob-client-carousel">
                            <div class="client-details d-flex justify-content-between">
                                <p>Sourab Sen</p>
                                <p>Texlab CEO</p>
                            </div>
                            <div class="mob-client-img">
                                <img src="{{ asset('/assets/img/client_img.svg') }}" />

                            </div>
                            <div class="client-comment">
                                <p>
                                    We create premium web design, though and user Business Analytics
                                    is not based on rote memorization of equations or facts, but
                                    focuses on honing your understanding of key concepts, your
                                    managerial judgment, and your ability to apply course concepts to
                                    real business problems. This course begins with basic descriptive
                                    statistics and progresses to regression analysis.
                                </p>
                            </div>
                        </div> </div>
                              <div class="item">  <div class="mob-client-carousel">
                            <div class="client-details d-flex justify-content-between">
                                <p>Sourab Sen</p>
                                <p>Texlab CEO</p>
                            </div>
                            <div class="mob-client-img">
                                <img src="{{ asset('/assets/img/client_img.svg') }}" />

                            </div>
                            <div class="client-comment">
                                <p>
                                    We create premium web design, though and user Business Analytics
                                    is not based on rote memorization of equations or facts, but
                                    focuses on honing your understanding of key concepts, your
                                    managerial judgment, and your ability to apply course concepts to
                                    real business problems. This course begins with basic descriptive
                                    statistics and progresses to regression analysis.
                                </p>
                            </div>
                        </div> </div>
                             
                      </div>
                   
                </section>

                <!--------------- Mobile media buying section ----------------------->

                <section id="mobile-media">

                    <h1>Our Media Buying</h1>
                    <p class="mob-media-text">
                        Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                        ultricies tristique...
                    </p>
                    <div class="mob-media-img">
                        <img src="{{ asset('/assets/img/media_buying.svg') }}" />

                    </div>
                    <div class="mob-client-start-project">
                        <a href="#">Start Project</a>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                            ultricies tristique nulla enim tortor.
                        </p>
                    </div>
                </section>

                <!--------------- Mobile about us section ----------------------->

                <section id="mobile-aboutus">

                    <h1>About us</h1>
                    <div class="aboutus-img">
                        <img src="{{ asset('/assets/img/mob_about_us.svg') }}" />
                    </div>
                    <div class="aboutus-progressbar"></div>
                    <div class="aboutus-scrollbox">
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                    </div>
                </section>

                <!--------------- Mobile contact section ----------------------->
                <section id="mobile-contact">

                    <h1>Have a Good Web Designe Today</h1>
                    <div class="lets-talk">
                        <a href="#" class="btn btn-secondary">let's talk</a>
                    </div>
                    <div class="row">
                        <div class="col-6 mob-contact-product">
                            <h5>Product</h5>
                            <ul>
                                <li>Landing Page</li>
                                <li>Pricing</li>
                                <li>FAQ</li>
                                <li>Affiliate</li>
                            </ul>
                            <p>Level 1, 7 Greenfield Parade Bankstown, NSW 2200</p>
                            <p>
                                <img src="{{ asset('/assets/img/Vector.svg') }}" />

                                Quadque<br />
                                Technologies Pty Ltd<br />
                                LEVEL 1/7 Greenfield Parade,<br />
                                Bankstown NSW 2200
                            </p>
                        </div>
                        <div class="col-6 mob-contact-company">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Career</a></li>
                            </ul>
                            <p>+61405899496 info@quadque.tech</p>
                            <p>
                                <img src="{{ asset('/assets/img/Vector.svg') }}" />
                                Quadque<br />
                                Technologies Limited<br />
                                Level -7, 8/C, F.R Tower,<br />
                                Panthapath, Dhaka 1207
                            </p>
                        </div>
                    </div>
                    <div class="mob-social-icon">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/quadquetech/" target="_blank"><img src="{{ asset('/assets/img/facebook-current.svg') }}" /></a>

                            </li>
                            <li>
                                <a href="https://www.instagram.com/quadquetech/?hl=en" target="_blank"><img src="{{ asset('/assets/img/instagram-current.svg') }}" /></a>

                            </li>
                            <li>
                                <a href="https://twitter.com/quadquet?lang=en" target="_blank"><img src="{{ asset('/assets/img/twitter-current.svg') }}" /></a>

                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCXbnZTYKk6q82Hbux3ffILA/videos?view=0&sort=p" target="_blank"><img src="{{ asset('/assets/img/youtube-current.svg') }}" /></a>

                            </li>
                        </ul>
                    </div>
                    <div class="all-right">Quadque©2022, All rights reserved</div>
                </section>

                <!--------------- Mobile start project section ----------------------->
                <section id="mobile-start-project">

                    <h1 class="">
                        <span>Start</span>
                        <span>Project</span>
                    </h1>
                    <div class="row mob-start-project-menu">
                        <div class="col-6 mob-start-project-menu1">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" onclick="mobProjectStartMenu(this)">UI &UX</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="mobProjectStartMenu(this)">Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="mobProjectStartMenu(this)">Web Development</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 mob-start-project-menu2">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" onclick="mobProjectStartMenu(this)">AI & IoT Solutions</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="mobProjectStartMenu(this)">App Development</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="start-project-social-btn-group">
                        <div class="start-project-social-btn-group-first-row">
                            <input type="checkbox" id="digitalMarketing" name="digitalMarketing" />
                            <label for="digitalMarketing">Digital Marketing</label>
                            <input type="checkbox" id="cusGoogleAds" name="cusGoogleAds" />
                            <label for="cusGoogleAds">Google ADs</label>
                        </div>

                        <div class="start-project-social-btn-group-second-row">
                            <input type="checkbox" id="socialmediamarketing" name="socialmediamarketing" />
                            <label for="socialmediamarketing">Social Media Marketing</label><br />
                            <input type="checkbox" id="specificappsmarketing" name="specificappsmarketing" value="Car" />
                            <label for="specificappsmarketing"> Specific Apps Marketing</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <form class="start-project-form">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="How can we help you" />
                                </div>
                                <button class="btn btn-secondary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="start-project-info">
                        <div>+61405899496</div>
                        <div>info@quadque.tech</div>
                    </div>
                </section>

            <!--------------- Mobile blogs section ----------------------->
            <section id="mobile-blogs">

                <div class="mob-first-blog">
                        <img src="{{ asset('/assets/img/blogs/'.$blogs['firstBlogThumbnail']) }}" />


                        <span class="mob-blog-title" onclick="showBlogMobile(this)">{{
                $blogs['firstBlogTitle']

                }}</span>
                    <span class="mob-blog-date">{{ $blogs['firstBlogDate'] }}</span>

                </div>
                <div class="mob-second-blog">
                    <img src="{{ asset('/assets/img/blogs/'.$blogs['secondBlogThumbnail']) }}" />

                    <span class="mob-blog-title" onclick="showBlogMobile(this)">
                            {{$blogs['secondBlogTitle']}}
        
                   </span>
                   <span class="mob-blog-date">{{ $blogs['secondBlogDate'] }}</span>

                         </div>
                    <div class="row">
                        <div class="col-6 mob-third-blog">
                            <img src="{{ asset('/assets/img/blogs/'.$blogs['thirdBlogThumbnail']) }}" />


                            <span class="mob-blog-title" onclick="showBlogMobile(this)">{{
                    $blogs['thirdBlogTitle']

                  }}</span>
                            <span class="mob-blog-date">{{ $blogs['thirdBlogDate'] }}</span>

                        </div>
                <div class="col-6 mob-fourth-blog">
                    <img src="{{ asset('/assets/img/blogs/'.$blogs['fourthBlogThumbnail']) }}" />


                    <span class="mob-blog-title">See More</span>
                </div>
               </div>
            </section>

        <!--------------- Mobile careers section 
        <section id="mobile-career">

            <h1>
                Current Job<br />
                Openings
            </h1>
            <div class="career-section">
                <div class="career-item">
                    <div class="career-img-box">
                        <img src="{{ asset('/assets/img/career-img-1.svg') }}" />

                    </div>
                    <div class="career-position">Creative Graphic Designer</div>
                    <div class="deadline"><span>Deadline </span>19.022021</div>
                </div>
                <div class="career-item">
                    <div class="career-img-box">
                        <img src="{{ asset('/assets/img/career-img-2.svg') }}" />

                    </div>
                    <div class="career-position">Creative Graphic Designer</div>
                    <div class="deadline"><span>Deadline </span>19.022021</div>
                </div>
            </div>
        </section>----------------------->

        <!--------------- Mobile careers section 
        <section id="mobile-gallery">

            <div class="gallery-bg">
                <h1>Gallery</h1>
            </div>
            <div class="row gallery-section">
                <div class="col-6 gallery-first-col">
                    <div class="odd-item">
                        <img src="{{ asset('/assets/img/gallery-1.svg') }}" />

                    </div>
                    <div class="even-item">
                        <img src="{{ asset('/assets/img/gallery-3.svg') }}" />

                    </div>
                </div>
                <div class="col-6 gallery-second-col">
                    <div class="odd-item">
                        <img src="{{ asset('/assets/img/gallery-2.svg') }}" />

                    </div>
                    <div class="even-item">
                        <img src="{{ asset('/assets/img/gallery-4.svg') }}" />

                    </div>
                </div>
            </div>
        </section>----------------------->

        <!--------------- Mobile team section 
        <section id="mobile-team">

            <div class="mob-team-upper-content">
            
            
                <p>experience</p>
                <h1>
                    Skilled Team<br />
                    of creators
                </h1>
                <p><img src="/assets/img/team.svg" /></p>
                <p>
                    We are an experienced and diverse team of software engineers, mobile
                    application, Web developers, UI/UX designers, quality engineers,
                    digital marketing experts and business development/ analysts who work
                    closely to achieve the business goals. We love to solve complex
                    problems and always excited to turn ideas from whiteboard to reality.
                </p>
            </div>
            <div class="team-gallery" class="section">

                <div class="row">
                    <div class="col-6 team-col-1">
                        <div>
                            <img class="team-gallery-img" src="{{ asset('/assets/img/team-1.svg') }}" />

                        </div>
                        <div>
                            <img class="team-gallery-img" src="{{ asset('/assets/img/team-2.svg') }}" />


                        </div>
                    </div>
                    <div class="col-6 team-col-2">
                        <div>
                            <img class="team-gallery-img" src="{{ asset('/assets/img/team-3.svg') }}" />


                        </div>
                        <div>
                            <img class="team-gallery-img" src="{{ asset('/assets/img/team-4.svg') }}" />


                        </div>
                    </div>
                </div>
            </div>
        </section>----------------------->
      
        <!--------------- Mobile blog details section 
        <section id="mobile-blog-details">
            <div class="mob-blog-content">
                <div class="mob-blog-title-section">
                    <P>Ancient Maritime</P>
                    <h1>Alpha Training and Recognitions</h1>
                </div>
                <div class="mob-blog-text-section">
                    <img src="{{ asset('assets/img/blog-details.svg') }}" />

                </div>
            </div>
            <div class="mob-more-blog-content">
                <p>Other interesting post</p>
                <div class="row mob-more-post">
                    <div class="col-6">
                        <div class="mob-post-img">
                            <img src="{{ asset('assets/img/blog-details-1.png') }}" />

                        </div>
                        <span class="mob-post-title">Upper-body and core Sizzler 1</span>
                        <span class="mob-post-date">Sunday 19, Sept 2021</span>
                    </div>
                    <div class="col-6">
                        <div class="mob-post-img">
                            <img src="{{ asset('assets/img/blog-details-1.png') }}" />

                        </div>
                        <span class="mob-post-title">Upper-body and core Sizzler 1</span>
                        <span class="mob-post-date">Sunday 19, Sept 2021</span>
                    </div>
                    <div class="col-6">
                        <div class="mob-post-img">
                            <img src="{{ asset('assets/img/blog-details-1.png') }}" />

                        </div>
                        <span class="mob-post-title">Upper-body and core Sizzler 1</span>
                        <span class="mob-post-date">Sunday 19, Sept 2021</span>
                    </div>
                    <div class="col-6">
                        <div class="mob-post-img">
                            <img src="{{ asset('assets/img/blog-details-1.png') }}" />

                        </div>
                        <span class="mob-post-title">Upper-body and core Sizzler 1</span>
                        <span class="mob-post-date">Sunday 19, Sept 2021</span>
                    </div>
                </div>
            </div>
            <div></div>
        </section>----------------------->

        <!--------------- Mobile faq section 
        <section id="faq">

            <h1>FAQ's</h1>
            <div class="faq-img">
                <img src="{{ asset('/assets/img/faqs.svg') }}" />

            </div>
            <p>Most Popular Questions</p>
            <ul>
                <li>
                    <img src="{{ asset('assets/img/faqs-icon.svg') }}" /><span>Will you maintain my site for me?</span>

                </li>
                <li>
                    <img src="{{ asset('') }}/assets/img/faqs-icon.svg" /><span>Will my website be mobile-friendly?</span>
                </li>
                <li>
                    <img src="{{ asset('') }}/assets/img/faqs-icon.svg" /><span>What type of support do you provide my business on your products or

                        services?</span>
                </li>
            </ul>
        </section>----------------------->
      

        <!---------- mobile service details -->
        <!--------------- Mobile Service Detail section 
        <section id="mobile-service-detail" class="d-none">
            <div class="mob-team-service-detail">
             
               
                <h1 class="serv-detail-header">UI/UX<br /></h1>
                <h2 class="sd-mobile-header">
                    Create Your Business with Digital Design
                </h2>
               
                <p class="serv-detail-text">
                    We are a team of professionals who are passionate about UI & UX design
                    with any visual solutions. We focus on creating the right UI & UX
                    design for your brand, designing for all taste palettes from Concept
                    to Final Product. We have a team of designers and online art
                    developers who are skilled in delivering high-quality, custom-made
                    designs and more identical graphics that get results.
                </p>
                <h3 class="serv-detail-strt-proj">START PROJECT</h3>
                <div class="image-container">
                    <img class="serv-detail-mob-svg" src="/assets/img/Sing-in-1.svg" />
                </div>
            </div>

            <div class="serv-details-section">
                <p class="serv-detail-text2">IDENTITY DESIGN SERVICES</p>
                <h1 class="serv-detail-header2">How We Can Help?<br /></h1>
                <p class="serv-detail-paragraph">
                    We’ll help you finding a solution and solve your problems. We use
                    process design to create digital products. Besides that also helps
                    their business.
                </p>
                <div class="row id-design-service-menu">
                    <div class="col-6 id-design-service-menu1">
                        <ul>
                            <li class="how-to-help">
                                <img src="{{ asset('assets/img/usability-analysis.svg') }}" />

                                <a href=""> Usability Analyst</a>
                            </li>
                            <li class="how-to-help">
                                <img src="{{ asset('assets/img/prod-design.svg') }}" />


                                <a href=""> Product Design</a>
                            </li>
                            <li class="how-to-help">
                                <img src="{{ asset('assets/img/vis-design.svg') }}" />


                                <a href=""> Visual Design</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 id-design-service-menu2">
                        <ul>
                            <li class="how-to-help">
                                <a href="">User Research</a><img src="{{ asset('assets/img/usr-research.svg') }}" />


                            </li>
                            <li class="how-to-help">
                                <a href="">Web/App Design</a><img src="{{ asset('assets/img/web-design.svg') }}" />


                            </li>
                            <li class="how-to-help">
                                <a href="">Interaction Design</a><img src="{{ asset('assets/img/int-design.svg') }}" />


                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row proj-client-number-menu">
                    <div class="col-5 proj-number-menu1">
                        <ul>
                            <li>
                                <a class="project-number" href=""> 180+</a>
                            </li>
                            <li>
                                <a class="project-completed" href=""> Projects Completed</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-1">
                        <img src="{{ asset('assets/img/divider.svg') }}" alt="" />


                    </div>
                    <div class="col-5 client-number-menu2">
                        <ul>
                            <li>
                                <a class="client-number" href=""> 124+</a>
                            </li>
                            <li>
                                <a href=""> Happy Clients</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="serv-detail-text2">BEST FOR YOU</p>
                <h1 class="serv-detail-header2">We serve the best service<br /></h1>
                <div class="row best-services-menu">
                    <div class="col-4 best-services-menu1">
                        <ul>
                            <li>
                                <a href=""><img src="{{ asset('assets/img/img-11.png') }}" /></a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-8 best-services-menu2 mt-3">
                        <ul>
                            <li>
                                <a class="best-service-title" href="">
                                    Create A Strong Impression</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="best-service-paragraph">
                    A logo serves as a company's first touchpoint with consumers. If
                    created well, it may spark the public's attention and encourage them
                    to discover more about the company.
                </a>

                <div class="row best-services2-menu">
                    <div class="col-4 best-services2-menu1">
                        <ul>
                            <li>
                                <a href=""><img src="{{ asset('assets/img/img-22.png') }}" /></a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-8 best-services2-menu2 mt-3">
                        <ul>
                            <li>
                                <a class="best-service2-title" href="">
                                    Builds the Foundation</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="best-service2-paragraph">
                    Branding is about influencing customers' emotions. It's all about the
                    story you're attempting to tell, and your identity design sets the
                    setting for it.
                </a>

                <div class="row best-services3-menu">
                    <div class="col-4 best-services3-menu1">
                        <ul>
                            <li>
                                <a href=""><img src="{{ asset('assets/img/img-33.png') }}" /></a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-8 best-services3-menu2 mt-3">
                        <ul>
                            <li>
                                <a class="best-service3-title" href="">
                                    It Fosters Brand Loyalty</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="best-service3-paragraph">
                    As your brand expands, people will get more familiar with your
                    identity, creating the notion that you are trustworthy and
                    approachable.
                </a>

                <div class="row best-services4-menu">
                    <div class="col-4 best-services4-menu1">
                        <ul>
                            <li>
                                <a href=""><img src="{{ asset('assets/img/img-44.png') }}" /></a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-8 best-services4-menu2 mt-3">
                        <ul>
                            <li>
                                <a class="best-service4-title" href=""> Rememberable </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="best-service4-paragraph">
                    People remember your company by your attractive identity design. So,
                    this is very important to keep your company memorable.
                </a>
                <br />
                <p class="serv-detail-text2">WHY YOU CHOOSE US</p>
                <h1 class="serv-detail-header2">
                    Our Designers Paint Your Identity<br />
                </h1>
                <div class="designer-image-container">
                    <img class="designer-image" src="{{ asset('assets/img/img-90.png') }}" />


                </div>
                <p class="best-service-paragraph2">
                    We develop some of the most visually beautiful and eye-catching
                    designs, and our optimized designs significantly improve the quality
                    of the user experience. <br /><br />
                    We do great deal in design under a budgeted price to give best
                    experience for the users on the web and mobile platforms
                </p>
                <br />
                <br />
                <h1 class="serv-detail-header2">
                    OUR UI AND UX DESIGN SERVICES AND CAPABILITIES<br />
                </h1>
                <p class="best-service-paragraph2">
                    When you choose our services, you get everything to realise your
                    product idea properly, from the experience of working.
                </p>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">AR Experience Design</h1>
                </div>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">
                        Mobile app UX and UI Design Service
                    </h1>
                </div>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">
                        Cross-Platform Experience Design
                    </h1>
                </div>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">UI and UX Consulting</h1>
                </div>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">Design Workshops</h1>
                </div>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">Web Design Service</h1>
                </div>
                <br />
                <br />
                <h1 class="serv-detail-header2">
                    HOW WE DELIVER UI AND UX SERVICES<br />
                </h1>
                <p class="best-service-paragraph2">
                    A decade in design has allowed our team to perfect the process of
                    delivering UI and UX services. We follow established design standards,
                    workflows, and guidelines — you get the product you need, delivered by
                    expert designers within the set timeframe.
                </p>
                <br />
                <h1 class="serv-detail-header2">OUR LATEST WORK<br /></h1>
                <br />
                <img class="latestwork-image-container" src="{{ asset('assets/img/img-91.png') }}" />


                <h1 class="latestwork-image-name">OTOBI Bd lagest furniture Shop</h1>
                <br />
                <br />
                <h1 class="serv-detail-header2">People Talk About Us<br /></h1>
                <br />
                <div class="people-reviews-box">
                    <img class="reviews-image-container" src="{{ asset('assets/img/img-92.png') }}" />


                    <h1 class="people-reviews-boxtext">
                        A software development company in Dhaka. They also work related to
                        AI, IOT, Digital Marketing services.
                    </h1>
                    <h1 class="people-reviews-name">Md Antor Ahmed</h1>
                </div>
            </div>
        </section>----------------------->
    </div>

