<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        لیست مقالات
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th> نام مقاله</th>
                            <th>نویسنده </th>
                            <th>تاریخ انتشار </th>
                            <th>کتگوری id </th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($list as $val):
                            ?>
                            <tr>
                                <td><?php echo $val['title']; ?></td>
                                <td><?php echo $val['author']; ?></td>
                                <td><?php echo $val['createdOn']; ?></td>
                                <td><?php echo $val['category']; ?></td>

                                <td><a href="http://<?php echo $domain ?>/admin/?c=article&a=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                                <td><a href="http://<?php echo $domain ?>/admin/?c=article&a=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
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