<footer class="footer style-full style-fourth">
    <div class="footer-inner">
        <div class="footer-inner-wrap style-container">
            <div class="top-footer">
                <div class="logo-footer">
                    <a href="index.php">
                        <img id="logo-footer" src="{{ asset('/') }}frontend/images/logo/footer.png" alt="images" >
                    </a>
                </div>
                <div class="wg-social">
                    <span>Follow Us</span>
                    <ul class="list-social">
                        <li>
                            <a href="#">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-linkedin2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="center-footer">
                <div class="footer-cl-1">
                    <div class="ft-title">Subscribe</div>
                    <form class="form-subscribe style-line-bottom">
                        <fieldset class="email">
                            <input type="email" placeholder="Your e-mail" class="style-1" name="email" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="button-submit style-absolute-right">
                            <button class="tf-button-bg" type="submit">Send <i class="icon-arrow-right-add"></i></button>
                        </div>
                    </form>
                    <div class="text">Subscribe to our newsletter to receive our weekly feed.</div>
                </div>
                <div class="footer-cl-2">
                    <div class="ft-title">Discover</div>
                    <ul class="navigation-menu-footer">
                        <li><a href="#!">Mobile Apps</a></li>
                        <li><a href="#!">Our Services</a></li>
                        <li><a href="#!">Price Trends</a></li>
                        <li><a href="#!">Post your Property</a></li>
                        <li><a href="#">Real Estate Investments </a></li>
                        <li><a href="#">Builders in India</a></li>
                        <li><a href="#">Area Converter</a></li>
                        <li><a href="{{ route('blogs') }}">Blog</a></li>
                        <li><a href="#">Rent Receipt</a></li>
                        <li><a href="#">Customer Service</a></li>
                    </ul>
                </div>
                <div class="footer-cl-3">
                    <div class="ft-title">Quick Links</div>
                    <ul class="navigation-menu-footer">
                        <li><a href="bl#!">Article</a></li>
                        <li><a href="#!">Careers with us</a></li>
                        <li><a href="#!">Request Info</a></li>
                        <li><a href="#!">Feedback</a></li>
                        <li><a href="{{ route('testimonial') }}"">Testimonials</a></li>
                        <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
                        <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('terms.condition') }}">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="footer-cl-3">
                    <div class="ft-title">Network Sites</div>
                    <ul class="navigation-menu-footer">
                        <li><a href="#!">Housing.com</a></li>
                        <li><a href="#!">Indianrealestateforum.com</a></li>
                        <li><a href="#!">Proptiger.com</a></li>
                        <li><a href="bl#!">Realestate.com.au</a></li>
                        <li><a href="#!">Mansionglobal.com</a></li>
                        <li><a href="#!">Realtor.com</a></li>
                    </ul>
                </div>
                <div class="footer-cl-5">
                    <div class="ft-title">Contact Us</div>
                    <ul class="navigation-menu-footer">
                        <li><div class="text">info@patliputrapropertyhub.com <br> (123) 456-7890</div></li>
                    </ul>
                </div>
                <div class="footer-cl-6">
                    <div class="ft-title">Get the app</div>
                    <ul class="ft-download">
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <i class="icon-appleinc"></i>
                                </div>
                                <div class="app">
                                    <div>Download on the</div>
                                    <div>Apple Store</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <i class="icon-ch-play"></i>
                                </div>
                                <div class="app">
                                    <div>Get in on</div>
                                    <div>Google Play</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="text">Copyright © 2024. Patliputra Property Hub</div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<div class="progress-wrap active-progress">
<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
   <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
</svg>
</div>
<div class="modal fade modalCenter" id="modallogin">
<div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content modal-sm">
      <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
      <div class="image-left">
         <img src="{{ asset('/') }}frontend/images/section/login.jpg" alt="">
         <h3>Welcome to Patliputra Property Hub</h3>
      </div>
      <div class="content-right">
         <h4>Sign into your account</h4>
         <form class="form-login" id="loginForm" action="{{ url('login') }}" method="POST">
            @csrf
            <fieldset class="name">
               <input type="text" placeholder="Email" class="" name="email">
               <p class="text-danger" id="email"></p>
            </fieldset>
            <fieldset class="password">
               <input type="password" placeholder="Password" class="" name="password" tabindex="2" value="">
               <p class="text-danger" id="password"></p>
            </fieldset>
            <div class="flex items-center justify-between w-full">
               <div class="checkbox-item">
                  <label>
                     <p>Remember me</p>
                     <input type="checkbox" name="remember_me">
                     <span class="btn-checkbox"></span>
                  </label>
               </div>
               <a href="#" class="lost-password">Lost your password?</a>
            </div>
            <div class="button-submit w-full">
               <button class="tf-button-primary w-full" type="submit">Login<i class="icon-arrow-right-add"></i></button>
            </div>
         </form>
         <div class="flex items-center justify-center">
            <p>Not a member ?</p>
            <a href="#" class="btn-show-register" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalregister">Register here</a>
         </div>
         <ul class="wg-social-1">
            <li><a href="#"><i class="flaticon-google"></i></a></li>
            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
            <li><a href="#"><i class="flaticon-facebook"></i></a></li>
         </ul>
      </div>
   </div>
</div>
</div>
<div class="modal fade modalCenter" id="modalregister">
<div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content modal-sm">
      <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
      <div class="image-left">
         <img src="{{ asset('/') }}frontend/images/section/loginss.jpg" alt="">
         <h3>Welcome to Patliputra Property Hub</h3>
      </div>
      <div class="content-right">
         <h4>Create an account</h4>
         <form class="form-login" id="registerForm" action="{{ url('register') }}" method="POST">
            <fieldset class="name">
               <input type="text" placeholder="Firstname" class="" name="first_name">
               <p class="text-danger" id="first_names"></p>
            </fieldset>
            <fieldset class="name">
               <input type="text" placeholder="Lastname" class="" name="last_name">
            </fieldset>
            <fieldset class="email">
               <input type="email" placeholder="Email" class="" name="email">
               <p class="text-danger" id="emails"></p>
            </fieldset>
            <fieldset class="password">
               <input type="password" placeholder="Password" class="" name="password">
               <p class="text-danger" id="passwords"></p>
            </fieldset>
            <fieldset class="password">
               <input type="password" placeholder="Retype Password" class="" name="password_confirmation">
               <p class="text-danger" id="password_confirmations"></p>
            </fieldset>
            <div class="button-submit">
               <button class="tf-button-primary w-full final-submit-btn" type="submit">Register<i class="icon-arrow-right-add"></i></button>
            </div>
         </form>
         <div class="flex items-center justify-center">
            <p>Have an account?</p>
            <a href="#" class="btn-show-register" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modallogin">Log in</a>
         </div>
      </div>
   </div>
</div>
</div>
