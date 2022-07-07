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
    <div class="container">
  <h2 class="py-3" text-center>Bootstrap Scrollspy</h2>
  <div class="row py-5 justify-content-center">
    <div class="col-md-4">
        <div id="lex" class="list-group sticky-top">
          <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3">
            <a class="navbar-brand" href="#">Navbar</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link" href="#item-1">Item 1</a>
              <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
              </nav>
              <a class="nav-link" href="#item-2">Item 2</a>
              <a class="nav-link" href="#item-3">Item 3</a>
              <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
              </nav>
            </nav>
          </nav>
        </div>
    </div>
    <div class="col-md-8">
        <div class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#lex" id="work" data-offset="20" style="height: 250px; overflow: auto;">


          <h4 id="item-1">Item 1</h4>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.
          </p>
          <h5 id="item-1-1">Item 1-1</h5>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting
          </p>
          <h5 id="item-1-2">Item 1-2</h5>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.
          </p>
          <h4 id="item-2">Item 2</h4>
          <p>
            This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.
          </p>
          <h4 id="item-3">Item 3</h4>
          <p>
          This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.
          </p>
          <h5 id="item-3-1">Item 3-1</h5>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
          <h5 id="item-3-2">Item 3-2</h5>
          <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
          

        </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


