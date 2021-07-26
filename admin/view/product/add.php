<section id="main-content">
    <section class="wrapper">
<h1 class="pageLables">افزودن محصول جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن محصول جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="http://<?php echo $domain ?>/admin/?c=product&a=add" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان محصول</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm[text]" class="form-control ckeditor" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[procat]">
                            <option value="0">سرگروه </option>
                            <?php
                            foreach ($procat as $val){
                                echo "<option value=\"$val[id]\">$val[title] </option>";
                            }
                            ?>


                        </select>
                        <label for="exampleInputPassword1">وضعیت نمایش</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="frm[status]" id="optionsRadios1" value="1">فعال
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="frm[status]" id="optionsRadios1" value="0"> غیر فعال
                            </label>
                        </div>
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