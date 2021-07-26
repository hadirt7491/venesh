<section id="main-content">
    <section class="wrapper">
<h1 class="pageLables">افزودن منو جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن منو جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" action="http://<?php echo $domain ?>/admin/?c=member&a=add">
                    <div class="form-group">
                        <label for="exampleInputEmail1">نام</label>
                        <input type="text" name="frm[name]" class="form-control" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">نام خانوادگی</label>
                        <input type="text" name="frm[lname]" class="form-control" placeholder="لینک منو مورد نظر را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">یوزرنیم</label>
                        <input type="text" name="frm[username]" class="form-control" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">پسورد</label>
                        <input type="text" name="frm[password]" class="form-control" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-contrzzol input-lg m-bot15" name="frm[role]">
                            <option value="0">سرگروه </option>
                            <option value="1">عضو</option>
                        </select>
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
    </section>
</section>