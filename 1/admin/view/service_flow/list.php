<section id="main-content">
    <section class="wrapper">
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست دسته بندی محصولات                </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان دسته بندی</th>
                    <th> ترتیب</th>
                    <th>تصویر </th>
                    <th> وضعیت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($listcat as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title']; ?></td>
                        <td><?php echo $val['sort']; ?></td>
                        <td><img width="60"  src="<?php echo $val['icon']; ?>"/></td>

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
                        <td><a href="http://<?php echo $domain ?>/admin/?c=service_flow&a=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="http://<?php echo $domain ?>/admin/?c=service_flow&a=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
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