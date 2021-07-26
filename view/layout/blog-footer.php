
<!-- Site footer -->
<footer id="colorlib-footer" role="contentinfo">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-4 col-md-push-1">
                <h2>همکاران</h2>
                <p class="tags">
                    <?php foreach ($customers as $val): ?>
                        <span><a href="#"><i class="icon-tag"></i> <?php echo $val['name']?></a></span>
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Fashion</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Life</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Blog</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Workout</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Vacation</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Travel</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Exercise</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Health</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> News</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Model</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Women</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Animals</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Nature</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Art</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Sea</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Ocean</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Office</a></span>-->
                        <!--                    <span><a href="#"><i class="icon-tag"></i> Home</a></span>-->
                    <?php endforeach; ?>
                </p>
            </div>
            <div class="col-md-4">
                <h2>لینک ها</h2>
                <p>
                <ul class="colorlib-footer-links">
                    <?php
                    foreach ($menu as $val):
                        ?>
                        <li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?><i class="icon-check"></i> </a></li>
                        <!--                    <li><a href="#"> About Me<i class="icon-check"></i></a></li>-->
                        <!--                    <li><a href="#">Blog<i class="icon-check"></i> </a></li>-->
                        <!--                    <li><a href="#">Travel<i class="icon-check"></i> </a></li>-->
                        <!--                    <li><a href="#">Lifestyle<i class="icon-check"></i> </a></li>-->
                        <!--                    <li><a href="#">Fashion<i class="icon-check"></i> </a></li>-->
                        <!--                    <li><a href="#">Health<i class="icon-check"></i> </a></li>-->
                    <?php endforeach;?>
                </ul>
                </p>
            </div>
            <div class="col-md-4">
                <h2>پست های اخیر</h2>
                <ul class="colorlib-footer-links">
                    <?php foreach ($listproadmin as $var): ?>
                        <li>
                            <span><?php echo $var['createdOn']?></span>
                            <a href="#"><?php echo $var['title']?></a>
                        </li>
                        <!--                    <li>-->
                        <!--                        <span>20 Jan, 2017</span>-->
                        <!--                        <a href="#">Popular Lifestyle with Fashion &amp; Modeling</a>-->
                        <!--                    </li>-->
                        <!--                    <li>-->
                        <!--                        <span>21 Jan, 2017</span>-->
                        <!--                        <a href="#">Video Post Travel with my Friends</a>-->
                        <!--                    </li>-->
                        <!--                    <li>-->
                        <!--                        <span>20 Jan, 2017</span>-->
                        <!--                        <a href="#">Popular Lifestyle with Fashion &amp; Modeling</a>-->
                        <!--                    </li>-->
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



</div> <!-- .site-wrap -->

<script src="../../public/default/css/index/js/jquery-3.3.1.min.js"></script>
<script src="../../public/default/css/index/js/jquery-ui.js"></script>
<script src="../../public/default/css/index/js/popper.min.js"></script>
<script src="../../public/default/css/index/js/bootstrap.min.js"></script>
<script src="../../public/default/css/index/js/owl.carousel.min.js"></script>
<script src="../../public/default/css/index/js/jquery.easing.1.3.js"></script>
<script src="../../public/default/css/index/js/aos.js"></script>
<script src="../../public/default/css/index/js/jquery.fancybox.min.js"></script>
<script src="../../public/default/css/index/js/jquery.waypoints.min.js"></script>
<script src="../../public/default/css/index/js/jquery.animateNumber.min.js"></script>
<script src="../../public/default/css/index/js/jquery.sticky.js"></script>
<script src="../../public/default/css/index/js/main.js"></script>


</body>
</html>
