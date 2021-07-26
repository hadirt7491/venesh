 <section class="banner_part" id="home-section">
     <div class="img-logo-part"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="banner_img d-none d-lg-block">
                        <img src="../../public/default/css/index/images/banner_img.png" alt="">
                    </div>
                </div>


                <div class="col-lg-6 banner-t">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>ابر متمرکز خدمات عمومی</h1>
                            <p>ارائه OpenAPI برای استعلام اطلاعات مراکز اداری و دولتی</p>
                            <a href="#services-section" class="btn_2">سرویس های ما</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    <section class="ftco-section ftco-services-2 bg-light" id="workflow-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 heading-section ftco-animate">
                    <div class="media block-6 services text-center d-block pt-md-5 mt-md-5">
                        <div class="icon justify-content-center align-items-center d-flex"><span>3</span></div>
                        <div class="media-body p-md-3">

                                <?php

                                foreach ($listservice as $var)
                                {
                                    echo '<h3 class="heading mb-3">';
                                    if($var['sort']==3)
                                    {
                                        echo $var['title']."</h3>";
                                        echo "<p class='ser-title mb-5'>";
                                        echo $var['text']."</p>";

                                    }
                                    else
                                        echo "</h3>";
                                }
                                ?>


                                <hr>
                        </div>
                    </div>
                </div>

<style>
    .heading{
        color: #352961;
        text-decoration: none;
        background-color: transparent;
    }
</style>
                <div class="col-md-4 heading-section ftco-animate">
                    <div class="media block-6 services text-center d-block pt-md-5 mt-md-5">
                        <div class="icon justify-content-center align-items-center d-flex"><span>2</span></div>
                        <div class="media-body p-md-3">

                                <?php
                                foreach ($listservice as $var)
                                {
                                    echo '<h3  class="heading mb-3">';
                                    if($var['sort']==2)
                                    {
                                        echo $var['title']."</h3>"."<p class='mb-5'>";
                                        echo $var['text']."</p>";

                                    }
                                    else
                                        echo "</h3>";
                                }
                                ?>

                                <hr>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 heading-section ftco-animate">
                    <div class="media block-6 services text-center d-block pt-md-5 mt-md-5">
                        <div class="icon justify-content-center align-items-center d-flex"><span>1</span></div>
                        <div class="media-body p-md-3">

                                <?php
                                foreach ($listservice as $var)
                                {
                                    echo '<h3 class="heading mb-3">';

                                    if($var['sort']==1)
                                    {
                                        echo $var['title']."</h3>"."<p class='mb-5'>";
                                        echo $var['text']."</p>";

                                    }
                                    else
                                        echo "</h3>";
                                }
                                ?>

                                <hr>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <div class="site-section section-1">
        <div class="container">


            <?php

            foreach ($listproadmin as $val):
                ?>
                <div class="row">
                    <div class="col-lg-5 mr-auto mb-5"  data-aos="fade-up">

                        <div class="mb-5">
                            <h2 class="section-title">
                                <?php
                                echo $val['title'];
                                ?>
                            </h2>
                            <p class="mb-5">
                                <?php
                                echo $val['text'];
                                ?>
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
                        <div class="image-absolute-box">

                            <img src="<?php
                            $img2=str_replace('./','/',$val['img']);
                            echo $img2;?>" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

            <?php
            endforeach;
            ?>


            <!--
            <div class="row">
                <div class="col-lg-5 mr-auto mb-5"  data-aos="fade-up">

                    <div class="mb-5">
                        <h2 class="section-title">Love Our Works</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
                        <p class="mb-5">Aperiam neque id, illum laudantium autem vero quae debitis tempora modi. Ipsa molestias enim in rem et incidunt beatae fugit, ab quam optio atque maiores facere est quidem, veritatis commodi.</p>

                        <ul class="ul-check list-unstyled success">
                            <li>Aperiam neque id illum laudantium</li>
                            <li>Maiores facere est quidem</li>
                            <li>Laudantium autem vero</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
                    <div class="image-absolute-box">

                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 mr-auto mb-5"  data-aos="fade-up">

                    <div class="mb-5">
                        <h2 class="section-title">Love Our Works</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
                        <p class="mb-5">Aperiam neque id, illum laudantium autem vero quae debitis tempora modi. Ipsa molestias enim in rem et incidunt beatae fugit, ab quam optio atque maiores facere est quidem, veritatis commodi.</p>

                        <ul class="ul-check list-unstyled success">
                            <li>Aperiam neque id illum laudantium</li>
                            <li>Maiores facere est quidem</li>
                            <li>Laudantium autem vero</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
                    <div class="image-absolute-box">

                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
            -->
        </div>

    </div>

     <div class="site-section bg-light" id="services-section" data-aos="fade">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 mb-5">
                     <h2 class="section-title">سرویس ها</h2>
                     <p class="sec-p">تجمیعی از همه سرویس‌های خدماتی ، بانکی و ...</p>

                 </div>
             </div>
         </div>

         <div class="arrow-tabs ui-tabs ui-widget ui-widget-content ui-corner-all">

             <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                <?php
                $c=0;
                foreach ($listwork_flow as $var):
                    $c++;
                ?>
                 <li class="tab-li ui-state-default ui-corner-top<?php if($c==1){?> ui-tabs-active<?php } ?>" role="tab">
                     <a href="#tab<?php echo $c;?>" class="ui-tabs-anchor" role="presentation">
                        <div class=""><span class="tab-img"> <?php echo $var['title']?> <img class="img-tab" src="<?php echo $var['icon']?>" alt="" height="20px" width="20px"></span></div>
                     </a>
                 </li>
                 <?php endforeach; ?>

<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab2" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> پست <img class="img-tab" src="../../public/default/img/assets/services/icon_post.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!---->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab3" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> قضایی <img class="img-tab" src="../../public/default/img/assets/services/icon_law.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!---->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab4" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> ثبت احوال و اسناد <img class="img-tab" src="../../public/default/img/assets/services/icon_government.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!---->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab5" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> بانکی <img class="img-tab" src="../../public/default/img/assets/services/icon_bank.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab6" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> راهور <img class="img-tab" src="../../public/default/img/assets/services/icon_police.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!---->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab1" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> قبض <img class="img-tab" src="../../public/default/img/assets/services/icon_bill.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->


             </ul>

             <div class="contents">
                 <div class="all-tab">
                     <?php
                     $i=0;
                     foreach ($listwork_flow as $var):
                         $i++;
                     ?>
                     <div id="tab<?php echo $i;?>" class="ui-tabs-panel ui-widget-content ui-corner-bottom" <?php if($i>1){ ?> style="display: none;" <?php } ?>
                          role="tabpanel">
                         <?php
                         $text=$var['text'];
                         $arr=explode('.',$text);
                         $j=0;
                         foreach ($arr as $item) :
                             $j++;
                         ?>

                        <div class="m-0 mt-2 row">
                             <div class="op-tbl col-lg-11">
                                 <p class="list-p" style="display: inline-block"><?php echo $item;?></p>
                                 <label><?php echo $j;?></label>
                          </div>
                        </div>
                         <?php endforeach; ?>

                     </div>
                    <?php endforeach; ?>
                 </div>

         </div>


     </div>
     </div>












<!--         <div class="arrow-tabs ui-tabs ui-widget ui-widget-content ui-corner-all">-->
<!---->
<!--             <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">-->
<!--                 <li class="ui-state-default ui-corner-top ui-tabs-active" role="tab">-->
<!--                     <a href="#tab1" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> بیمه <img class="img-tab" src="../../public/default/img/asset0s/services/icon_insurance.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab1" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> پست <img class="img-tab" src="../../public/default/img/assets/services/icon_post.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!---->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab1" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> قضایی <img class="img-tab" src="../../public/default/img/assets/services/icon_law.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!---->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab1" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> ثبت احوال و اسناد <img class="img-tab" src="../../public/default/img/assets/services/icon_government.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!---->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab1" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> بانکی <img class="img-tab" src="../../public/default/img/assets/services/icon_bank.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab1" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> راهور <img class="img-tab" src="../../public/default/img/assets/services/icon_police.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!---->
<!--                 <li class="ui-state-default ui-corner-top" role="tab">-->
<!--                     <a href="#tab1" class="ui-tabs-anchor" role="presentation">-->
<!--                         <span> قبض <img class="img-tab" src="../../public/default/img/assets/services/icon_bill.png" alt="" height="20px" width="20px"></span>-->
<!--                     </a>-->
<!--                 </li>-->
<!---->
<!---->
<!--             </ul>-->
<!---->
<!--             <div class="contents">-->
<!--                 <div class="all-tab">-->
<!--                     <div id="tab1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel">-->
<!---->
<!--                         <div class="m-0 mt-2 row">-->
<!--                             <div class="op-tbl col-lg-11">-->
<!--                                 <p style="display: inline-block">استعلام وضعیت کارشناس</p>-->
<!--                                 <label>1</label>-->
<!--                             </div>-->
<!--                         </div>-->
<!---->
<!---->
<!--                         <div class="m-0 mt-2 row">-->
<!--                             <div class="op-tbl col-lg-11">-->
<!--                                 <p style="display: inline-block">استعلام وضعیت وکیل</p>-->
<!--                                 <label>2</label>-->
<!--                             </div>-->
<!---->
<!--                         </div>-->
<!--                         <div class="m-0 mt-2 row">-->
<!--                             <div class="op-tbl col-lg-11">-->
<!--                                 <p style="display: inline-block">استعلام اصالت مدارک قضایی</p>-->
<!--                                 <label>3</label>-->
<!--                             </div>-->
<!---->
<!--                         </div>-->
<!--                         <div class="m-0 mt-2 row">-->
<!--                             <div class="op-tbl col-lg-11">-->
<!--                                 <p style="display: inline-block">استعلام وضعیت ثبت نام شخص در ثنا</p>-->
<!--                                 <label>4</label>-->
<!--                             </div>-->
<!--                         </div>-->
<!---->
<!---->
<!--                     </div>-->
<!--                 </div>-->
<!---->
<!--             </div>-->
<!---->
<!---->
<!--         </div>-->





         <!--    <div class="site-section bg-light" id="services-section" data-aos="fade">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 mb-5">-->
<!--                    <h2 class="section-title">سرویس ها</h2>-->
<!--                    <p>مکان دریافت قبض بدون دریافت قبض کاغذی نیازی بود که جدا از سادگی فرایند دریافت قبض ، راهکاری کارآمد برای حفظ طبیعت است. اکنون با سامانه ونش ، تنها با استفاده از شناسه قبض می‌توانید هر قبضی از هر جای ایران را استعلام کنید و آخرین قبض دوره را دریافت کنید. این قبض‌ها علاوه بر امکان سازی پرداخت الکترونیک ، تمامی ریز اطلاعات از انشعاب‌ها استعلام شده را ارائه می‌دهند</p>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        -->
<!---->
<!---->
<!--ok-->
<!--        <div class="owl-carousel nonloop-block-14">-->
<!--            --><?php
//            foreach ($listwork_flow as $item):
////                if($item['parent']==1)
////                {
////            ?>
<!--            <div class="service">-->
<!--                <div>-->
<!--                    <span class="custom-icon-wrap"><span class="icon"><img class="img-ser" src="--><?php //echo $item['icon']?><!--" alt=""></span></span>-->
<!--                    --><?php
//                    echo "<h3>".$item['title']."</h3>";
////                    echo "<p>".$item['text']."</p>";
////                 }
////                    ?>
<!--                </div>-->
<!--            </div>-->
<!--            --><?php
//            endforeach;
////            ?>
<!---->
<!--            --><?php
//            foreach ($listwork_flow as $var):
//            ?>
<!--            <div class="service">-->
<!--                <div>-->
<!--                    <span class="custom-icon-wrap"><span class="icon"><img class="img-ser" src="--><?php //echo $var['icon']?><!--" alt=""></span></span>-->
<!---->
<!--                    <h3>--><?php //echo $var['title'] ?><!--</h3>-->
<!--                    <p>--><?php //echo $var['text']; ?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            --><?php
//            endforeach;
//            ?>
<!--        </div>-->
<!--    </div>-->


<!--    <div class="owl-carousel nonloop-block-14">-->
<!--        --><?php
//        foreach ($listwork_flow as $item):
//            if($item['parent']==1)
//            {
//                ?>
<!--                <div class="service">-->
<!--                <div>-->
<!--                <span class="custom-icon-wrap"><span class="flaticon-reload"></span></span>-->
<!--                --><?php
//                echo "<h3>".$item['title']."</h3>";
//                echo "<p>".$item['text']."</p>";
//            }
//            ?>
<!--            </div>-->
<!--            </div>-->
<!--        --><?php
//        endforeach;
//        ?>
<!--    </div>-->

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading"></span>
                    <h2 class="mb-4 contact-h">ارتباط با ما</h2>
                    <p>در هر کجا که باشید می توانید با ما در ارتباط باشید.</p>
                </div>
            </div>

            <div class="row block-9">
                <div class="col-md-7">

                    <form class="bg-light p-4 p-md-5 contact-form" method="post" action="http://<?php echo $domain ?>?c=messages&a=send">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="نام" name="frm[name]">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="پست الکترونیک" name="frm[email]">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="موضوع" name="frm[subject]">
                        </div>
                        <div class="form-group">
                            <textarea name="frm[text]" id="" cols="30" rows="7" class="form-control" placeholder="متن"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="ارسال" class="btn btn-primary py-3 px-5" name="btn_send">
                        </div>
                    </form>




                </div>
                <div class="col-md-5 d-flex">
                    <div class="row d-flex contact-info mb-5">
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">

                                <div>
                                    <h3 class="mb-3 address">آدرس</h3>
                                    <p class="address-p">مازندران - بابل - کمربندی غربی - چهارراه توحید - <br>حدفاصل توحید 21 و 23</p>
                                </div>
                                <div class="icon mr-3">
                                    <span class="icon-map-signs"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">

                                <div>
                                    <h3 class="mb-3 address">شماره تلفن</h3>
                                    <p><a href="">01132310716 <br> 01132326849 </a></p>
                                </div>
                                <div class="icon mr-3">
                                    <span class="icon-phone2"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">

                                <div>
                                    <h3 class="mb-3 address">پست الکترونیکی</h3>
                                    <p><a href="mailto:info@yoursite.com">info@venesh.ir</a></p>
                                </div>
                                <div class="icon mr-3">
                                    <span class="icon-paper-plane"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


