<?php
defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css">	
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>	
</head>
<body>
	<div class="wrapper">
		<div class="main">
			<div class="header">
				<a href="" class="logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/logo.png" alt=""></a>
				<jdoc:include type="modules" name="adress" style="mystyle" />				
				<jdoc:include type="modules" name="phone" style="mystyle" />								
			</div><!--header-->
			<div class="cols">
				<div class="l-col">
					<jdoc:include type="modules" name="l-block" style="mystyle" />
				</div><!--l-col-->
				<div class="r-col">
					<jdoc:include type="modules" name="slider" style="mystyle" />
					<div class="component">
						<div class="categ">
							<jdoc:include type="component" style="xhtml" />											
						</div><!--categ-->							
					</div><!--component-->
				</div><!--r-col-->
			</div><!--main-->
		</div><!--cols-->
		<jdoc:include type="modules" name="cart" style="mystyle" />
		<div class="footer">
			<div class="w888">
				<jdoc:include type="modules" name="copy" style="mystyle" />				
				<jdoc:include type="modules" name="bot-mnu" style="mystyle" />								
				<jdoc:include type="modules" name="counter" style="mystyle" />				
			</div>
		</div>
	</div><!--wrapper-->
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/common.js"></script>
	<jdoc:include type="modules" name="popup" style="mystyle" />
	<div class="overlay"></div>
</body>
</html>