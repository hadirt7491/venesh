<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>ونش</h2>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog_area single-post-area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 posts-list">
                <?php
                foreach ($article as $var)
                    echo $var['description'];
                ?>
            </div>
        </div>
    </div>
</section>