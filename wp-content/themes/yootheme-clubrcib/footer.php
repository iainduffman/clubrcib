
        <?php if (!$theme->get('builder')) : ?>

                        <?php if (is_active_sidebar('sidebar')) : ?>
                        </div>

                        <?= get_view('sidebar') ?>

                    </div>
                     <?php endif ?>

                </div>
            </div>
            <?php endif ?>

            <?php dynamic_sidebar("bottom:section") ?>
        </div>

        <?php if ($site['layout'] == 'boxed') : ?>
        </div>
        <?php endif ?>

        <div class="footer uk-section uk-section-primary tm-section-primary uk-section-xlarge uk-padding-remove-bottom uk-padding-remove-top" style="background: #323232;">
    <div class="uk-container uk-text-center">
        <div class="uk-margin-top uk-margin-bottom">
            <div uk-grid="" class="uk-child-width-auto@m uk-flex-middle uk-grid">
                <div class="uk-first-column uk-hidden">
                    <ul class="uk-navbar-nav uk-navbar-nav footer-left uk-visible@l">
                        <li><a class="uk-text-bold" href="#"><span class="uk-margin-small-right uk-icon" uk-icon="receiver" style="color: #fff;"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="receiver"><path fill="none" stroke="#000" stroke-width="1.01" d="M6.189,13.611C8.134,15.525 11.097,18.239 13.867,18.257C16.47,18.275 18.2,16.241 18.2,16.241L14.509,12.551L11.539,13.639L6.189,8.29L7.313,5.355L3.76,1.8C3.76,1.8 1.732,3.537 1.7,6.092C1.667,8.809 4.347,11.738 6.189,13.611"></path></svg></span><p>Call Us <?php the_field('phone_number', 533); ?></p> <span style="font-weight: 400;"></span></a></li>
                    </ul>
                </div>
                <div class="uk-flex-1 uk-margin-auto uk-visible@m">
                    <div uk-margin="" class="uk-flex-around uk-flex-center uk-margin-top uk-subnav footer-nav">
                        <ul>
                        <li><h4>Products</h4>
                        <li><a href="<?php echo get_site_url(); ?>/compare-breakdown-services">Eurorescue Breakdown Cover</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/uk-breakdown-cover">UK Breakdown Cover</a></li>
                        </ul>

                        <ul>
                        <li><h4>About</h4>
                        <li><a href="<?php echo get_site_url(); ?>/why-choose-us">Why Choose Us?</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/document-downloads">Document Downloads</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/faq">FAQ's</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/contact">Contact</a></li>
                        </ul>

                        <ul>
                        <li><h4>Members</h4>
                        <li><a href="https://eurorescue.co.uk/ChangeYourDetails.aspx">Change Details</a></li>
                        <li><a href="https://eurorescue.co.uk/ChangeVehicle.aspx">Change Vehicle</a></li>
                        </ul>

                        <ul>
                        <li><h4>Legal</h4>
                        <li><a href="<?php echo get_site_url(); ?>/terms-conditions">Terms &amp Conditions</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/privacy-policy">Privacy Policy</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/cookie-policy">Cookie Policy</a></li>
                        </ul>

                        <ul>
                        <li><h4>Social</h4>
                        <li><a href="https://www.facebook.com/eurorescuebreakdown/" target="_blank"><span uk-icon="icon: facebook; ratio: 2"></a></li>
                        </ul>

                    </div>
                </div>
                <div>
                    <div class="uk-text-right@m uk-text-center uk-hidden">
                        <div uk-grid="" class="uk-child-width-auto uk-grid-small uk-flex-center uk-grid">
                            <div class="uk-hidden uk-first-column"><a href="https://twitter.com/#" uk-icon="icon: twitter" class="uk-icon-link uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="twitter">
                                        <path d="M19,4.74 C18.339,5.029 17.626,5.229 16.881,5.32 C17.644,4.86 18.227,4.139 18.503,3.28 C17.79,3.7 17.001,4.009 16.159,4.17 C15.485,3.45 14.526,3 13.464,3 C11.423,3 9.771,4.66 9.771,6.7 C9.771,6.99 9.804,7.269 9.868,7.539 C6.795,7.38 4.076,5.919 2.254,3.679 C1.936,4.219 1.754,4.86 1.754,5.539 C1.754,6.82 2.405,7.95 3.397,8.61 C2.79,8.589 2.22,8.429 1.723,8.149 L1.723,8.189 C1.723,9.978 2.997,11.478 4.686,11.82 C4.376,11.899 4.049,11.939 3.713,11.939 C3.475,11.939 3.245,11.919 3.018,11.88 C3.49,13.349 4.852,14.419 6.469,14.449 C5.205,15.429 3.612,16.019 1.882,16.019 C1.583,16.019 1.29,16.009 1,15.969 C2.635,17.019 4.576,17.629 6.662,17.629 C13.454,17.629 17.17,12 17.17,7.129 C17.17,6.969 17.166,6.809 17.157,6.649 C17.879,6.129 18.504,5.478 19,4.74">
                                        </path>
                                    </svg></a></div>
                            <div><a href="https://www.facebook.com/eurorescuebreakdown" target="_blank" uk-icon="icon: facebook" class="uk-icon-link uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="facebook">
                                        <path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z">
                                        </path>
                                    </svg></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div uk-grid="" class="uk-child-width-auto@m uk-flex-middle uk-grid">
                <div class="uk-margin-auto">

                <div class="uk-width-medium-1-1 copyright-text">
                <p>This Website is made available to you by Right Choice Insurance Brokers Limited. Registered Office: St James House, 27-43 Eastern Road, Romford, Essex, RM1 3NH. Registered in England & Wales No. 6423401. EuroRescue is arranged and administered by Right Choice Insurance Brokers Limited which is authorised and regulated by the Financial Conduct Authority under reference number 475620.</p>

                <div class="uk-hidden uk-width-medium-1-1">
                <p><a href="https://www.facebook.com/eurorescuebreakdown/" target="_blank"><span uk-icon="icon: facebook; ratio: 2"></a></span></p>

                </div>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
