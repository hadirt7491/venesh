<section id="main-content">
    <section class="wrapper">
<h1 class="pageLables">
    ویرایش دسته بندی
</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش دسته بندی <?php $domain = $_SERVER['HTTP_HOST']; echo $result['title']; ?>
            </header>
            <div class="panel-body">

                <form role="form" method="post" action="http://<?php echo $domain ?>/admin/?c=services&a=edit&id=<?php echo $result['id']; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان دسته بندی</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید" value="<?php echo $result['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">متن</label>
                        <textarea name="frm[text]" id="" cols="30" rows="10"><?php
                            echo $result['text'];
                            ?></textarea>
                    </div>
                    <label for="exampleInputPassword1">وضعیت نمایش</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="1"  <?php if($result['status']==1){echo "checked";} ?> > فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="0"  <?php if($result['status']==0){echo "checked";} ?> > غیر فعال
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input type="text" name="frm[sort]" class="form-control" placeholder="ترتیب نمایش" value="<?php echo $result['sort']; ?>">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

    </section>
</section>