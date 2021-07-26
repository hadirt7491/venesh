
<section class="banner_part" id="home-section">
     <div class="img-logo-part"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="banner_img"></div>
                    <div class="banner_img d-none d-lg-block">
                        <img src="../../public/default/css/index/images/banner_img.png" alt="">
                    </div>
                </div>


                <div class="col-lg-6 banner-t">
                    <div class="banner_text">workflow-section
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





<div class="site-section bg-light" id="services-section" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <h2 class="section-title">خدمات</h2>
                <p>سایت لورم‌ساز علاوه بر تولید متن ساختگی لورم ایپسوم، انواع ابزارهای آنلاین در زمینه‌های طراحی وبسایت و گرافیک، حسابداری و اندازه‌گیری و دیگر ابزارهای کاربردی برای استفاده در کارهای مختلف ارائه می‌دهد.</p>
            </div>
        </div>

    </div>


    <div class="owl-carousel nonloop-block-14">

        <?php

        foreach ($listservice as $val):
        ?>
        <div class="service">
            <div>
                <span class="custom-icon-wrap"><span class="serviceSort"><?php echo $val['sort']?> </span></span></span>
                <h3>
                    <?php echo $val['title']; ?>
                </h3>
                <p>
                    <?php echo $val['text']; ?>
                </p>
            </div>
        </div>
        <?php
        endforeach;
        ?>

<!--        <div class="service">-->
<!--            <div>-->
<!--                <span class="custom-icon-wrap"><span class="flaticon-download"></span></span>-->
<!--                <h3>تجمیع انواع سرویس بانکی و پرداختی</h3>-->
<!--                <p>عتبارسنجی بانکی تنها با کدملی و همچنین استعلام چک صیادی و چک مفقودی با شماره چک</p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="service">-->
<!--            <div>-->
<!--                <span class="custom-icon-wrap"><span class="flaticon-monitor"></span></span>-->
<!--                <h3>از خلافی خودرو تا استعلام بیمه </h3>-->
<!--                <p>تجمیعی از انواع خدمات الکترونیک</p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="service">-->
<!--            <div>-->
<!--                <span class="custom-icon-wrap"><span class="flaticon-chat"></span></span>-->
<!--                <h3>ارائه سرویس‌های هوش مصنوعی و احراز هویت</h3>-->
<!--                <p> تجمیعی از انواع خدمات مبتنی بر هوش مصنوعی که علاوه بر کمک به خودکارسازی فرآیندها، با سرویس‌هایی همچون «احراز هویت» و «تطابق چهره» تلاش دارد قدمی در بالا بردن امنیت سامانه‌ها بردارد</p>-->
<!--            </div>-->
<!--        </div>-->


    </div>

</div>







<!--    <section class="ftco-section ftco-services-2 bg-light" id="workflow-section">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!---->
<!--                --><?php //foreach ($listservice as $var):
//                    ?>
<!--                <div class="col-md-4 heading-section ftco-animate">-->
<!--                    <div class="media block-6 services text-center d-block pt-md-5 mt-md-5">-->
<!--                        <div class="icon justify-content-center align-items-center d-flex"><span>--><?php //echo $var['sort']?><!--</span></div>-->
<!--                        <div class="media-body p-md-3">-->
<!--                            <h3 class="heading mb-3">--><?php //echo $var['title']?><!--</h3>-->
<!--                            <p class='ser-title mb-5'>--><?php //echo $var['text']?><!--</p>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--                <div class="facto-hr">-->
<!--                    <hr></div>-->
<!---->
<!--                --><?php //endforeach; ?>
<!--                <style>-->
<!--                    .facto-hr{-->
<!--                        margin-bottom: 0px;-->
<!--                    }-->
<!--                </style>-->
<!--            </div>-->
<!--    </section>-->



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
        </div>

    </div>

     <div class="site-section bg-light" id="services-section" data-aos="fade">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 mb-5">
                     <h2 class="ser-h">سرویس ها</h2>
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

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading"></span>
                    <h2 class="mb-4 contact-h">ارتباط با ما</h2>
                    <p>در هر کجا که باشید می توانید با ما در ارتباط باشید.</p>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-offset-2">
                        <div class="page-header">
                            <h2>jQuery Ajax Form Submit Example In PHP</h2>
                        </div>
                        <p>Please fill all fields in the form</p>
                        <p id="show_message" style="display: none">Form data sent. Thanks for your comments.We will update you within 24 hours. </p>
                        <span id="error" style="display: none"></span>
                        <form action="javascript:void(0)" method="post" id="ajax-form">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="" maxlength="50" >
                            </div>
                            <div class="form-group ">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="" maxlength="30" >
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control" value="" maxlength="12" >
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="submit">
                        </form>
                    </div>
                    <div class="col-lg-6 col-offset-2">
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
                                    <p>01132310716 <br> 01132326849 </p>
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
                                    <p>info@venesh.ir</p>
                                </div>
                                <div class="icon mr-3">
                                    <span class="icon-paper-plane"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function($){
// hide messages
                    $("#error").hide();
                    $("#show_message").hide();
// on submit...
                    $('#ajax-form').submit(function(e){
                        e.preventDefault();
                        $("#error").hide();
//name required
                        var name = $("input#name").val();
                        if(name == ""){
                            $("#error").fadeIn().text("Name required.");
                            $("input#name").focus();
                            return false;
                        }
// email required
                        var email = $("input#email").val();
                        if(email == ""){
                            $("#error").fadeIn().text("Email required");
                            $("input#email").focus();
                            return false;
                        }
// mobile number required
                        var mobile = $("input#mobile").val();
                        if(mobile == ""){
                            $("#error").fadeIn().text("Mobile number required");
                            $("input#mobile").focus();
                            return false;
                        }
// ajax
                        $.ajax({
                            type:"POST",
                            url: "view/ajaxForm/upload.php",
                            data: $(this).serialize(), // get all form field value in serialize form
                            success: function(){
                                $("#show_message").fadeIn();
//$("#ajax-form").fadeOut();
                            }
                        });
                    });
                    return false;
                });
            </script>

<!--            <script>-->
<!--                $(document).ready(function () {-->
<!--                    $('.btn-primary').click(function () {-->
<!---->
<!--                        var name = $("#name").val();-->
<!--                        var message = $("#txt").val();-->
<!---->
<!--                        $.ajax({-->
<!--                            type: "post",-->
<!--                            url: "upload.php",-->
<!--                            data: "name=" + name+' '+message,-->
<!--                            success: function (data) {-->
<!--                                alert(data);-->
<!--                            }-->
<!---->
<!--                        });-->
<!---->
<!--                    });-->
<!--                });-->
<!--            </script>-->

        </div>
    </section>


<!---->
<!-- <script type="text/javascript">-->
<!--     $(document).ready(function($){-->
<!---->
<!--         $('.btn-primary').click(function(){-->
<!--             $("#name").val('');-->
<!--             $("#mobile").val('');-->
<!--             $("#email").val('');-->
<!--         });-->
<!---->
<!--     });-->
<!---->
<!-- </script>-->





