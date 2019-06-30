<footer id="footer" class="bg-dark border-0 mt-0">
    <div class="container py-5">
        <div class="row pt-4">
            <div class="col text-center">
                <a href="#"><img src="{{url('public/asset/theme')}}/img/logo-footer.png" class="img-fluid mb-3"
                        width="100" height="48" alt="" /></a>
                <ul class="list list-inline list-unstyled custom-list-style-1 mb-4">
                    <li class="list-inline-item"><a href="#" class="font-weight-semibold">About Us</a></li>
                    <li class="list-inline-item"><a href="#" class="font-weight-semibold">Reviews</a></li>
                    <li class="list-inline-item"><a href="#" class="font-weight-semibold">Contact Us</a></li>
                    <li class="list-inline-item"><a href="#" class="font-weight-semibold">Blog</a></li>
                </ul>
                <img src="{{url('public/asset/theme')}}/img/payment-icon.png" alt="Payment Cards"
                    class="img-fluid custom-filter-grayscale-1 pb-2 mb-4" />

                <div class="d-flex align-items-center justify-content-center">
                    <h4 class="text-color-light font-weight-normal ls-0 text-4 mb-0 mr-2">NEWSLETTER</h4>
                    <div>
                        <div class="alert alert-success d-none" id="newsletterSuccess">
                            <strong>Success!</strong> You've been added to our email list.
                        </div>
                        <div class="alert alert-danger d-none" id="newsletterError"></div>
                        <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST"
                            class="form-style-4 mw-100">
                            <div class="input-group input-group-rounded">
                                <input
                                    class="form-control form-control-sm px-2 text-3 border border-top-0 border-right-0 border-left-0 custom-border-color-2"
                                    placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail"
                                    type="text">
                                <span class="input-group-append">
                                    <button class="btn btn-primary text-color-light text-2 p-2"
                                        type="submit"><strong>GO</strong></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg-dark">
        <div class="container py-2">
            <hr class="bg-light opacity-1 m-0">
            <div class="row justify-content-between py-4">
                <div class="col-auto">
                    <p class="mb-0">© Copyright 2019. All Rights Reserved.</p>
                </div>
                <div class="col-auto">
                    <ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light mb-0">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                                title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                                title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
