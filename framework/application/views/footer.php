<?php 
/**
 *  Footer Page
 * 
 *  Contains the footer of the main pages for the site, it loads all scripts along with
 *  presenting footer view and closes body and html tags
 */
?>      
        <?php if ($pageType == 0) { ?>
        <div class="rg-footer col-md-12">
            <div class="col-md-10 col-md-offset-1">
                <ul class="rg-footer-nav unstyled-list">
                    <li><a class="rg-footer-link" href="#">About</a></li>
                    <li><a class="rg-footer-link" href="mailto:mail@richardwgomez.com?Subject=Website%20Inquiry">Contact Me</a></li>
                </ul>
                <hr />
                <div class="container">
                    <div style="display:block; font-size: 16px; margin-bottom: 20px;">
                        <a class="col-xs-offset-0 col-xs-2 col-md-offset-1 col-md-2" href="https://www.linkedin.com/pub/richard-gomez/30/321/597"><img src="img/linkedin.png"/></a>
                        <p class="rg-footer-copyright-text col-xs-offset-0 col-xs-10 col-sm-offset-6 col-sm-4 col-md-offset-4 col-md-3">2015 &copy; Richard Gomez</p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <!-- Vendor Scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery.js"><\/script>')</script>
        
        <script src="js/vendor/jquery-ui.js"></script>
        <script src="js/vendor/jquery.browser.js"></script>
        <script src="js/vendor/jquery.reveal.js"></script>
        <script src="js/vendor/bootstrap.js"></script>
        <script src="js/vendor/jigl.js"></script>
        <script src="js/vendor/underscore.js"></script>

        <!-- Page Scripts -->
        <script src="js/main.js"></script>

        <script>
            $(document).ready(function() {
                Jigl.init();
                App.init("<?php echo base_url(); ?>");
            });
        </script>
        
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-63331083-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
