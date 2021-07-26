<h1 class="pageLables">
    ویرایش منو
</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش منو <?php echo $result['title']; ?>
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="http://<?php echo $domain ?>/admin/?c=menu&a=edit&id=<?php echo $result['id']?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان منو</label>
                        <input type="text" name="frm2[title]" class="form-control" placeholder="عنوان منو را وارد کنید" value="<?php echo $result['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">آدرس منو</label>
                        <input type="text" name="frm2[url]" class="form-control" placeholder="لینک منو مورد نظر را وارد کنید" value="<?php echo $result['url']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="frm2[parent]">
                            <option value="0">سرگروه </option>
                        </select>
                    </div>
                    <label for="exampleInputPassword1">وضعیت نمایش</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm2[status]" id="optionsRadios1" value="1"  <?php if($result['status']==1){echo "checked";} ?> > فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm2[status]" id="optionsRadios1" value="0"  <?php if($result['status']==0){echo "checked";} ?> > غیر فعال
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input type="text" name="frm2[sort]" class="form-control" placeholder="ترتیب نمایش" value="<?php echo $result['sort']; ?>">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

