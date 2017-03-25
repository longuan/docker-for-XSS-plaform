<?php /* Smarty version 2.6.26, created on 2016-08-13 10:20:55
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 36, false),)), $this); ?>
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
    			<div class="panel-heading">我的项目<a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=project&act=create" style="float:right;">创建项目</a></div>   
	<table border="0" cellspacing="0" cellpadding="0" class="table">
		<thead>
			<tr>
				<th width="200">项目名称</th>
				<th>项目描述</th>
				<th width="100">内容数</th>
				<th width="100">创建时间</th>
				<th width="50">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php $_from = $this->_tpl_vars['projects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
			<tr>
				<td><a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=project&act=view&id=<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></td>
				<td><?php echo $this->_tpl_vars['v']['description']; ?>
</td>
				<td><?php echo $this->_tpl_vars['v']['contentNum']; ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['addTime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</td>
				<td>
				<a href="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=project&act=delete&id=<?php echo $this->_tpl_vars['v']['id']; ?>
&token=<?php echo $this->_tpl_vars['show']['user']['token']; ?>
" onclick="return confirm('确定删除吗?');">删除</a>
				</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
</div>

</div>
</div>
</body>
</html>