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
                    <th> نام</th>
                    <th>نام خانوادگی</th>
                    <th>نقش</th>

                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach ($listmenu as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['name']; ?></td>
                        <td><?php echo $val['lastname']; ?></td>

                        <td>
                            <?php
                            if($val['role']==0){
                                echo "
                                    <span class='btn btn-danger'>مدیر</span>
                                ";
                            }
                            else{
                                echo "
                                    <span class='btn btn-success'> عضو</span>
                                ";
                            }
                            ?>
                        </td>

                        <td><a href="http://<?php echo $domain ?>/admin/?c=member&a=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
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