<section id="main-content">
    <section class="wrapper">
<h1 class="pageLables">معرفی سرویس ها</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data" action="http://<?php echo $domain ?>/admin/?c=service_flow&a=edit&id=<?php echo $result['id']?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان </label>
                        <input type="text" name="frm2[title]" class="form-control" placeholder="عنوان منو را وارد کنید" value="<?php
                        echo $result['title'];
                        ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">متن </label>
                        <textarea name="frm2[txt]" id="" cols="30" rows="10"><?php
                            echo $result['text'];
                            ?></textarea>
                    </div>


                    <label for="exampleInputPassword1">وضعیت نمایش</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm2[status]" id="optionsRadios1" value="1"  <?php
                            if($result['status']==1){echo "checked";} ?> > فعال

                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm2[status]" id="optionsRadios1" value="0"  <?php if($result['status']==0){echo "checked";} ?> > غیر فعال
                        </label>
                    </div>

                    <select class="form-control input-lg m-bot15" name="frm2[parent]">
                        <option value="0">pre_post</option>
                        <?php
                        echo "<option value=\"1\" ";

                        if($result['parent']==1){
                            echo " selected";
                        }

                        echo ">post</option>";

                        ?>
                        ?>

                    </select>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input type="text" name="frm2[sort]" class="form-control" placeholder="ترتیب نمایش" value="<?php
                        echo $result['sort'];
                        ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="img" id="exampleInputFile">
                        <img src="<?php echo $result['icon']; ?>" width="60" />
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
    </section>
</section>