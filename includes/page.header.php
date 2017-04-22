<!-- Navbar from https://getbootstrap.com/components/#navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">web_app</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">News</a></li>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Politics</a></li>
						<li><a href="#">IT &amp Technology</a></li>
						<!--<li role="separator" class="divider"></li>-->
						<li><a href="#">Magazine</a></li>
						<li><a href="#">Health</a></li>
					</ul>
				</li>
				<li><a href="#">Statistics</a></li>
			</ul>
			<form class="navbar-form navbar-left" action="search.php" method="GET">
				<div class="input-group">
					<input type="text" name="text" class="form-control" placeholder="Find articles..." minlength="3" required>
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
				</div>
			</form>
			<?php 
				if(!empty($_SESSION)) { if($_SESSION['rank_id'] < 3) echo '<button class="btn btn-danger navbar-btn">Panel</button>'; 
			?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="profile.php?username=<?= $_SESSION['username'] ?>"><span class="glyphicon glyphicon-user"></span> &nbsp<?= $_SESSION['username'] ?></a></li>
					<li><a href="signoff.php"><span class="glyphicon glyphicon-log-in"></span> &nbspSign off</a></li>
				</ul>
				<?php } else {?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			<?php 
				}
			?>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<?php /*
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">web_app</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">News</a></li>
          <li><a href="#">Sport</a></li>
          <li><a href="#">IT &amp Technology</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">Lifestyle</a></li>
        </ul>
      </li>
      <li><a href="#">Statistics</a></li>
      <li><a href="#">Minigame</a></li>
    </ul>
    <form class="navbar-form navbar-left">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
            </div>
        </div>
    </form> 
    <?php if(!empty($_SESSION)) {
			if($_SESSION['rank_id'] < 3) echo '<button class="btn btn-danger navbar-btn">Button</button>'; ?>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="profile.php?username=<?= $_SESSION['username'] ?>"><span class="glyphicon glyphicon-user"></span> &nbsp<?= $_SESSION['username'] ?></a></li>
			<li><a href="signoff.php"><span class="glyphicon glyphicon-log-in"></span> &nbspSign off</a></li>
		</ul>
    <?php } else {?>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	<?php } ?>
  </div>
</nav> */