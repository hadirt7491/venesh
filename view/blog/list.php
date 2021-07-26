<aside id="colorlib-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumbs text-center">
                <h1 class="title">مقالات</h1>
            </div>
        </div>
    </div>
</aside>
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <?php

                    foreach ($posts as $var):
                    ?>
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="<?php echo $var['img']?>" alt="">
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="../../blog.php?c=blog&a=single-blog&id=<?php echo $var['id'] ?>">
                                <h2><?php echo $var['title']?></h2>
                            </a>
                            <p><?php

                                $text=$var['description'];
                                $words = explode(" ",$text);
                                $output = implode(" ",array_splice($words,0,40));
                                echo $output;

                                ?></p>
                            <ul class="blog-info-link">
                                <li><?php echo $var['author']?></li>
                            </ul>
                        </div>
                    </article>
                    <?php
                    endforeach;

                    ?>

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="http://<?php echo $domain ?>/blog.php/?<?php if($id>1): ?>c=blog&id=<?php echo $id;?>&<?php endif; ?>page=<?php

                                $page--;
                                echo $page;if($s!='0'){echo '&search='.$s; }?>" class="page-link Previous-link" aria-label="Previous">
                                    <i class="ti-angle-left" style="font-family: 'byekan'">قبلی</i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="http://<?php  echo $domain ?>/blog.php/?<?php if($id>1): ?>c=blog&id=<?php echo $id;?>&<?php endif; ?>page=1<?php if($s!='0'){echo '&search='.$s; } ?>" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="http://<?php echo $domain ?>/blog.php/?<?php if($id>1): ?>c=blog&id=<?php echo $id;?>&<?php endif; ?>page=2<?php if($s!='0'){echo '&search='.$s; } ?>" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="http://<?php echo $domain ?>/blog.php/?<?php if($id>1): ?>c=blog&id=<?php echo $id;?>&<?php endif; ?>page=<?php
                                $c=$count;
                                if($page!=0)
                                {
                                    $total=$c/$page+1;
                                    if($c>$total)
                                    {
                                        $page=3;
                                    }
                                    else
                                        $page+=2;

                                }
                                else
                                $page+=2;

                                echo $page;if($s!='0'){echo '&search='.$s; }?>" class="page-link Next-link" aria-label="Next">
                                    <i class="ti-angle-right" style="font-family: 'byekan'">بعدی</i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">


                <div class="row" style="direction: rtl;margin-bottom: 30px">
                    <div class="pos-relative bo11 of-hidden col-lg-8">
                        <input id="myText" class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="جستجو">
                    </div>
                    <a id="link2" style="margin-top: 10px" href="http://<?php echo $domain?>/blog.php?search="><button onclick="send()" style="margin-right: 4px" ><img style="margin-top: 0px" src="../../public/default/img/icons8-search-26.png" width="20px" alt=""></button>
                    </a>

                </div>
                    <script>
                        function send() {
                            var x = document.getElementById("myText").value;
                            document.getElementById("link2").setAttribute("href","http://<?php echo $domain?>/blog.php?search="+x);
                        }
                    </script>


                    <aside class="single_sidebar_widget post_category_widget">

                        <h4 class="widget_title">دسته بندی</h4>
                        <ul class="list cat-list">
                            <?php
                            foreach ($listCat as $var):
                            ?>
                            <li>
                                <a href="http://<?php echo $domain ?>/blog.php/?c=blog&id=<?php echo $var['id']?>" class="d-flex">
                                    <p><?php echo $var['title']?></p>
                                </a>
                            </li>
                            <?php
                            endforeach;

                            ?>
                        </ul>
                    </aside>

                </div>

                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget post_category_widget">
                        <!-- Featured Products -->
                        <h4 class="m-text23 p-t-65 p-b-34">
                            مقاله های اخیر
                        </h4>
                        <br><br>
                        <ul class="">
                            <?php
                            foreach ($lastArticles as $item):
                            ?>
                            <hr>
                            <li class="row" style="margin-bottom: 20px">
                                <a href="http://<?php echo $domain?>/blog.php?c=blog&a=single-blog&id=<?php echo $item['id']?>" class="col-lg-4">
                                    <img src="<?php echo $item['img']?>" width="72px" height="96px" style="margin-top: 0px" alt="IMG-PRODUCT">
                                </a>

                                <div class="col-lg-8" style="margin-top: 20px">

                                    <a href="http://<?php echo $domain?>/blog.php?c=blog&a=single-blog&id=<?php echo $item['id']?>" class="s-text20">
                                        <?php echo $item['title'] ?>
                                    </a>

                                </div>
                                <hr>

                            <?php
                            endforeach;
                            ?>



                        </ul>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>
