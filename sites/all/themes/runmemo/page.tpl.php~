<link href="<?php echo base_path().path_to_theme(); ?>/css/style.css" type="text/css" rel="stylesheet" />
<style type="text/css">
@font-face {
	font-family:'Futura-LT-Light';
	src: url('<?php echo base_path().path_to_theme(); ?>/Futura-LT-Light.ttf');
	src: url('<?php echo base_path().path_to_theme(); ?>/Futura-LT-Light.otf');
	font-weight: normal;
	font-style: normal;
}
@font-face {
	font-family: 'Walkway Bold';
	src: url('<?php echo base_path().path_to_theme(); ?>/Walkway Bold.ttf');
	font-weight: normal;
	font-style: normal;
}
</style>

<div id="wrapper">
  <div id="inner-wrapper">

    <div class="header"> <a href="<?php echo base_path();?>">
      <div class="logo float-L"></div>
      </a>
      <div class="nav float-L">
        <ul>
           <span class="float-L"><img src="<?php echo base_path().path_to_theme(); ?>/images/nav-separator.png" /></span>
          <li><a href="<?php echo base_path();?>" class="active">RUNNERS</a></li>
          <span class="float-L"><img src="<?php echo base_path().path_to_theme(); ?>/images/nav-separator.png" /></span>
          <li><a href="<?php echo base_path();?>">PHOTOGRAPHERS</a></li>
          <span class="float-L"><img src="<?php echo base_path().path_to_theme(); ?>/images/nav-separator.png" /></span>
          <li><a href="<?php echo base_path();?>">GALLERY</a></li>
        </ul>
      </div>
      <div class="login-btn float-R">
        <div class="login-btn-lft float-L"></div>
     
 	<?php global $user;
	 if (empty($user->name)) 
	{?>
	<div class="login-btn-mid float-L">
	<a href="<?php echo base_path();?>user"><span class="float-L">Login</span></a>
	<a href="#">
          <div class="login-logo float-L mt3"></div>
          </a> <a href="#">
          <div class="facebook-logo float-L mt3"></div>
          </a> <a href="#">
          <div class="twitter-logo float-L mt3"></div>
          </a> 
	<img src="<?php echo base_path().path_to_theme(); ?>/images/separator.png" width="1" height="23" /> 
	<a href="<?php echo base_path();?>user/register"><span class="float-R underline">Register</span></a>
	</div>
	<?php }else{?>
	<div class="login-btn-mid float-L" style="width: 193px;">
	<a href="<?php echo base_path();?>user"><span class="float-L">Welcome <?php print $user->name;?></span></a>
 	<img src="<?php echo base_path().path_to_theme(); ?>/images/separator.png" width="1" height="23" /> 
	<a href="<?php echo base_path();?>user/logout"><span class="float-R underline">Logout</span></a>
	</div>
	<?php }?>
	 

        <div class="login-btn-rig float-L"></div>
      </div>
      <div class="clr"></div>
      <div class="cart float-R">
        <div class="cart-img float-L"></div>
        <div class="cart-cont float-R"> <span class="shopping float-L">Shopping Cart</span> <span class="items float-L">0 items(s)- $1000.00</span> <span class="float-L"><img src="<?php echo base_path().path_to_theme(); ?>/images/cart-drop-img.png" width="9" height="5" /></span> </div>
      </div>
    </div>

    <div class="clr"></div>


   <!-- <div id="container" class="clearfix">-->

    <div id="center"><div id="squeeze"><div class="right-corner"><div class="left-corner">
         <!--  <?php print $breadcrumb; ?>
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <a id="main-content"></a>
          <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>-->
	<?php print $messages; ?>
          <div class="clearfix"> 
		<div class="gray-bdr" style="margin-top:30px;"></div>
		 <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="sidebar">
          <?php print render($page['sidebar_first']); ?>
        </div>
	
      <?php endif; ?>

	
	<div class="title" style="width:100%;">
          <?php if (arg(0) == 'user' && arg(1) == 'register') : ?>
          <h1 class="new_account_heading">  New Photograper Registration </h1> <h1 class="login_heading">I already have a Photographer account </h1>
          <?php elseif (arg(0) == 'user' && empty($messages)&& arg(1) == null) : ?>
           <h1 class="log_in">  User Login</h1>
          <?php endif ; ?>
	</div>
		
            <?php print render($page['content']); ?>
          </div>
                    
      </div>
	<?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="sidebar" style="align:right;">
          <?php print render($page['sidebar_second']); ?>
        </div>
      <?php endif; ?>
</div></div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->

<!--</div>-->

	<div class="clr"></div>
    <div class="gray-bdr"></div>
	
    <div class="clr"></div>
	

      </div>



  <div class="footer"><!--footer-->
  <div class="footer-inner">
  <div class="social-icon float-L">
  <a href="#"><img src="<?php echo base_path().path_to_theme(); ?>/images/iconnect.png" width="167" height="27"  /></a>
 <a href="#"> <img src="<?php echo base_path().path_to_theme(); ?>/images/facebook-icon.png" width="32" height="32" /></a>
  <a href="#"><img src="<?php echo base_path().path_to_theme(); ?>/images/twitter-icon.png" width="32" height="32" /></a>
  </div>
  <p class="float-R"><small>© 2012</small>  Runmemo</p>
  </div>
  </div><!--footer ends-->

</div>

