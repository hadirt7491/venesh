<section id="main-content">
    <section class="wrapper">
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست منو های اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> نام محصول</th>
                    <th>تصویر </th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['name']; ?></td>
                        <td><img width="60"  src="<?php echo $val['img']; ?>"/></td>
                        <td><a href="http://<?php echo $domain ?>/admin/?c=customers&a=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="http://<?php echo $domain ?>/admin/?c=customers&a=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                endforeach;
                ?>

                </tbody>
            </table>
        </section>
    </div>
</div>
    </section>
</section>