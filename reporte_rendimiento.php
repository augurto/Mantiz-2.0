<!DOCTYPE html>
<html>
<head>
	<title>Reporte Rendimiento</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script>
  $(function(){
     $('#work').on('activate.bs.scrollspy')
  });
</script>
<style>
  body
  {
    position: relative;
  }
</style>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

<?php include 'includes/header.php';?>
    <div style="height:50px"></div>
<?php include 'parts/rendimiento.php';?>

</body>
</html>


