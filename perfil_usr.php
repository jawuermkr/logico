<?php
  include('header_tec.php');

    session_start();
    ob_start();

    if($_SESSION['correcto']<>1){
      header('Location:index.php');
    }
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Por cargar</h2>
		</div>
	</div>
</div>

<?php
  include('footer.php');
?>