<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml" class="login" >
<HEAD>
    <META http-equiv=Content-Type content="text/html; charset=utf-8">
    <TITLE>Administrator's Control Panel</TITLE>
    <base href="<?php echo base_url() ?>" />
    <link rel="stylesheet" href="bootstrap/css/global.css" type="text/css">

    <script language="JavaScript">
        function pressCaptcha(obj)
        {
            obj.value = obj.value.toLowerCase();
        }
    </script>
</HEAD>



<body>
<div class="modal" id="modal-login">
    <FORM action="<?php echo site_url("admin/checklogin"); ?>" method="post" name="pass" id="pass"><A name=b8e6f4fa493903c4></A>
        <div class="modal-header">
            <h3>
                管理后台登录
            </h3>
        </div>
        <div class="modal-body">
            <fieldset>
                <div class="control-group">
                    <label for="login-username">用户名：</label>
                    <div class="input">
                        <input class="large validates[required]" id="username" name="username" size="30" type="text" autocomplete="off">
                    </div>
                </div>
                <div class="control-group error">
                    <label for="login-password">密码：</label>
                    <div class="input">
                        <input class="large validates[required]" id="password" name="password" size="30" type="password">
                    </div>
                </div>
                <div class="control-group">
                    <label for="login-username">验证码：</label>
                    <div class="input">
                        <input name="chk" type="text" onKeyUp="pressCaptcha(this)"/>&nbsp;&nbsp;<span class="help-inline"><img src="<?php echo site_url('admin/captcha') ?>"></span>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <?php echo $error ?><?php echo $this->form_validation->error_string(); ?>
            <input class="btn btn-primary" type="submit" value="登录" name="submit">
        </div>
        <div>

        </div>
    </form>
</div>
<div class="modal" id="modal-recovery">
    <form action="#" method="post" id="frm-recovery">
        <div class="modal-header">
            <h3>
                Password Recovery
            </h3>
        </div>
        <div class="modal-body">
            <fieldset>
                <div class="control-group">
                    <label for="recovery-username">Username or e-mail</label>
                    <div class="input">
                        <input class="large validates[required]" id="recovery-username" name="recovery[username]" size="30" type="text" autocomplete="off"> <span class="help-inline">Password recovery hint</span>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary toggle-login-recovery">Cancel</button> <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<script src="bootstrap/js/jquery-1.7.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/admin.min.js"></script>
</body>
</html>
