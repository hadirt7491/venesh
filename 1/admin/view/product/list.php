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
                    <th> دسته بندی</th>
                    <th>تصویر </th>
                    <th> وضعیت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($listPro as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title']; ?></td>
                        <td><?php
                            $parent=$class->selectProCat($val['procat']);
                            echo $parent;
                            ?>
                        </td>
                        <td><img width="60"  src="<?php echo $val['img']; ?>"/></td>
                        <td>
                            <?php
                            if($val['status']==0){
                                echo "
                                    <span class='btn btn-danger'>غیر فعال</span>
                                ";
                            }
                            else{
                                echo "
                                    <span class='btn btn-success'> فعال</span>
                                ";
                            }
                            ?>
                        </td>
                        <td><a href="http://<?php echo $domain ?>/admin/?c=product&a=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="http://<?php echo $domain ?>/admin/?c=product&a=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
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