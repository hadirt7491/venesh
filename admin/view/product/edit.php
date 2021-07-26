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
                <form role="form" method="post" action="http://<?php echo $domain ?>/admin/?c=product&a=edit&id=<?php echo $result['id']?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان محصول</label>
                        <input type="text" name="frm2[title]" class="form-control" value="<?php echo $result['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm2[text]" class="form-control ckeditor" rows="8"><?php echo $result['text']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm2[procat]">
                            <option value="0">سرگروه </option>
                            <?php
                            echo $result['img'];
                            $procat=$class->procat();
                            foreach ($procat as $val){
                                echo "<option value=\"$val[id]\" ";
                                if($result['procat']==$val['id']){
                                    echo " selected";
                                }
                                echo ">$val[title] </option>";
                            }
                            ?>


                        </select>

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