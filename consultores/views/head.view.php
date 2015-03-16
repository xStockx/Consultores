<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADLHConsultores</title>
<!-- 	<link rel="stylesheet" href="css/normalize.css">  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<link href="css/jquery.bxslider.css" rel="stylesheet" />
	<script>
		$(document).ready(function(){
  			$('.bxslider').bxSlider();
  			$('.itemIndexServicios').on('click',function(){
  				console.log(this);
  			});
		});
		 function muestraModal(valorEnviado)
    		 {
    		 	
    		 	//var modalSeleccionado = "'#"+valorEnviado+"'";
    		 	$('.modal').modal('hide');
				$('#'+valorEnviado).modal('show');
    		 }
	</script>


</head>