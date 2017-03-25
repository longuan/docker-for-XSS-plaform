<?php /* Smarty version 2.6.26, created on 2016-08-13 10:21:23
         compiled from user_seting.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>XSS Platform</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/css/css.css">
<script src="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/js/jquery.min.js"></script>
<script src="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/js/bootstrap.min.js"></script>
<?php echo '
<script>
function CheckAll(obj){
	if($(obj).is(":checked")){
		$(".checon").attr("checked","checked");
	}else{
		$(".checon").removeAttr("checked");
	}
}
</script>
'; ?>

</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menus.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="col-sm-9">
          <div class="panel panel-default">
    	<div class="panel-heading">个人设置</div>
<form style="padding: 10px 15px;" id="formSeting" action="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=user&act=submit" method="post">
<div style="padding:5px 10px">
邮箱:<?php echo $this->_tpl_vars['email']; ?>

<br>发送邮件提醒:<?php echo $this->_tpl_vars['input1']; ?>

</div>
<div style="padding:5px 10px">
手机:<input id="phone" name="phone" type="text"  style="width:120px" maxlength="11" value="<?php echo $this->_tpl_vars['phone']; ?>
" />
<p><p>
发送短信提醒:<?php echo $this->_tpl_vars['input2']; ?>

<input class="btn btn-success" id="btnSeting" type="submit" value="提交" /> 
</form>
</div>
</div>
</div>
</body>
</html>