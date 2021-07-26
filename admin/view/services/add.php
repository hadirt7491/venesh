<section id="main-content">
    <section class="wrapper">
<h1 class="pageLables">افزودن کتگوری</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="https://<?php echo $domain ?>/admin/?c=services&a=edit">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">متن</label>
                        <textarea name="frm[text]" id="" cols="30" rows="10"></textarea>
                    </div>
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
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input type="text" name="frm[sort]" class="form-control" placeholder="ترتیب نمایش">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
    </section>
</section>