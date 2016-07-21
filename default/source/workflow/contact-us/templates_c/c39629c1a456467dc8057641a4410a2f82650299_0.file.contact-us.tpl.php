<?php
/* Smarty version 3.1.29, created on 2016-07-15 00:27:22
  from "H:\My Programming Stuff\PHP Programming\htdocs\green-kokan\default\templates\modules\contact-us\contact-us.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5787e092b319c1_01983528',
  'file_dependency' => 
  array (
    'c39629c1a456467dc8057641a4410a2f82650299' => 
    array (
      0 => 'H:\\My Programming Stuff\\PHP Programming\\htdocs\\green-kokan\\default\\templates\\modules\\contact-us\\contact-us.tpl',
      1 => 1468436752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../widgets/header.tpl' => 1,
    'file:../../widgets/nav-bar.tpl' => 1,
    'file:../../widgets/footer.tpl' => 1,
    'file:../../widgets/scripts.tpl' => 1,
  ),
),false)) {
function content_5787e092b319c1_01983528 ($_smarty_tpl) {
?>
<!doctype html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/nav-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>'contact-us'), 0, false);
?>

		<div class="inner-content center-align">
			
				
			<div class="block-head block-head-2">Contact us<i></i></div>

			<div class="page-content-section-bg container-fluid">
				<div class="contact-wrapper container">
  				
			  <form id="contact-form" class="styled-form col-sm-8" action="" method="post" accept-charset="utf-8">
			  
			    
			    <div class="note">
			      <p>We are here to answer any questions you may have about our green kokan
			        experiences. Reach out to us and we'll respond as soon as we can.</p>
			      
			    </div>
			    
			    <p class="col-sm-6">
			      <label for="id_name">Name: <span class="required">*</span></label>
			      <span class="field"><input type="text" name="name" id="id_name"></span>
			    </p>
			    <p class=" col-sm-6">
			      <label for="id_email">Email: <span class="required">*</span></label>
			      <span class="field"><input type="text" name="email" id="id_email"></span>
			    </p>
			    <p class="col-sm-12">
			      <label for="id_message">Message: <span class="required">*</span></label>
			      <span class="field"><textarea cols="40" s="5" name="message" id="id_message"></textarea></span>
			    </p>
			    
			    <p class="submit-row col-sm-12">
			      <button type="submit" class="btn btn-primary">SEND</button>
			    </p>
			  </form>
  
			  <aside id="contact-info" class="col-sm-4">
			    <dl>
			      <dt>Email</dt>
			      <dd><a href="mailto:info@green kokan.com" title="Click to send us an email">info@greenkokan.com</a></dd>
			      <dt>Telephone</dt>
			      <dd><a href="tel:02355 7193 3316" title="Click to call us">+02355 7193 3316</a></dd>
			      <dt>Skype</dt>
			      <dd><a href="skype:greenkokan?call" title="Click to call us on Skype">green kokan</a></dd>
			      <dt>Address</dt>
			      <dd>
			        <address>
						<p>1537 Flint Street <br>
						Tumon, MP 96911</p>
					</address>
			      </dd>
			      
			    </dl>
			  </aside>
			</div>
			</div>
			
			
		</div>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../../widgets/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
}
