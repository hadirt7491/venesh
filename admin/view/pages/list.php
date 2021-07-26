<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        لیست صفحات                </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th> عنوان صفحه</th>
                            <th> لیبل</th>
                            <th>لینک</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($listpages as $val):
                            ?>
                            <tr>
                                <td><?php echo $val['title']; ?></td>
                                <td><?php echo $val['label']; ?></td>
                                <td>http://<?php echo $domain ?>/pages.php/?pages=<?php echo $val['slug']; ?></td>
                                <td><a href="http://<?php echo $domain ?>/admin/?c=pages&a=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                                <td><a href="http://<?php echo $domain ?>/admin/?c=pages&a=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
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