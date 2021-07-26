<section id="main-content">
    <section class="wrapper">
        <form role="form" method="post" action="http://<?php echo $domain ?>/admin/?c=pages&a=edit&id=<?php echo $result['id']?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان منو</label>
                <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید" value="<?php echo $result['title']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">لیبل</label>
                <input type="text" name="frm[label]" class="form-control" placeholder="عنوان منو را وارد کنید" value="<?php echo $result['label']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">اسلاگ</label>
                <input type="text" name="frm[slug]" class="form-control" placeholder="عنوان منو را وارد کنید"value="<?php echo $result['slug']?>">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="editor" name="frm[editor1]"><?php echo $result['body']?></textarea>
            </div>

            <button type="submit" name="btn" class="btn btn-info">افزودن</button>
        </form>
        <script>
            CKEDITOR.replace('editor',{
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