<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user"></i>ສະບາຍດີ -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					<li><a href="my-account.php"><i class="icon fa fa-user"></i>ບັນຊີຂອງທ່ານ</a></li>
					<li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>ສິ່ງທີ່ມັກ</a></li>
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>ກະຕ່າຂອງທ່ານ</a></li>
					<li><a href="#"><i class="icon fa fa-key"></i>ເຊັກເອົາ</a></li>
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"><i class="icon fa fa-sign-in"></i>ເຂົ້າສູ່ລະບົບ</a></li>
<?php }
else{ ?>
	
				<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>ອອກຈາກລະບົບ</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle" ><span class="key">ຕິດຕາມການສັ່ງຊື້</b></a>
						
					</li>

				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->