<section id="main-content">
    <section class="wrapper">
<h1 class="pageLables">ویرایش محصولات </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش محصول
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="http://<?php echo $domain ?>/admin/?c=customers&a=edit&id=<?php echo $result['id']?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">نام محصول</label>
                        <input type="text" name="frm2[title]" class="form-control" value="<?php echo $result['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="img" id="exampleInputFile">
                        <img src="<?php echo $result['img']; ?>" width="60" />
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

    </section>
</section>