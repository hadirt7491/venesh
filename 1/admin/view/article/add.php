<section id="main-content">
    <section class="wrapper">
<!--        <script>-->
<!--            CKEDITOR.replace('editor1',{-->
<!--                config.filebrowserBrowseUrl = '<?php echo $domain ?>/';-->
<!--                config.filebrowserUploadUrl = 'upload.php';-->
<!--                filebrowserUploaderMethod:'form'-->
<!--            });-->
<!--        </script>-->
        <form role="form" method="post" action="http://<?php echo $domain ?>/admin/?c=article&a=add" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان منو</label>
                <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">تصویر شاخص</label>
                <input type="file" name="img" id="exampleInputFile">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="editor1" name="editor1"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">نویسنده</label>
                <input type="text" name="frm[author]" class="form-control" placeholder="عنوان منو را وارد کنید">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">دسته بندی</label>
                <select class="form-control input-lg m-bot15" name="frm[cat]">
                    <option value="0">سرگروه </option>
                    <?php
                    foreach ($listcat as $val){
                        echo "<option value=\"$val[id]\">$val[title] </option>";
                    }
                    ?>
                </select>
            </div>


            <button type="submit" name="btn" class="btn btn-info">افزودن</button>
        </form>


        <script>
            CKEDITOR.replace('editor1',{
                filebrowserBrowseUrl: 'http://<?php echo $domain ?>/public/admin/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl: 'http://<?php echo $domain ?>/public/admin/ckfinder/ckfinder.html?type=Images',
                //filebrowserFlashBrowseUrl: './ckfinder/ckfinder.html?type=Flash',
                filebrowserUploadUrl: 'http://<?php echo $domain ?>/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl: 'http://<?php echo $domain ?>/public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                // filebrowserFlashUploadUrl: './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

            })
        </script>

    </section>
</section>