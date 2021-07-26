<section id="main-content">
    <section class="wrapper">
<h1 class="pageLables">افزودن</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن همکار جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="http://<?php echo $domain ?>/admin/?c=customers&a=add" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">نام </label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="نام را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="img" id="exampleInputFile">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
    </section>
</section>