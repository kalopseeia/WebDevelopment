<div class="container">
  <div>
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link">SELL ON ELECTRO</a></li>
        <li class="nav-item"><a href="help.php" class="nav-link">HELP</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link">LOGIN</a></li>
        <li class="nav-item"><a href="register.php" class="nav-link">REGISTER</a></li>
      </ul>
    </header>
  </div>
  <div>
    <header class="py-3 mb-4 border-bottom">

      <div class="row">
        <div class="col">
          <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">BOOTSTRAP</span>
          </a>
        </div>
        <div class="col">
          <form class="col-12 col-lg-auto mb-3 mb-lg-0">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
          </form>
        </div>
        <div class="col">

        </div>
      </div>
    </header>



  </div>
  <div>
    <nav class="py-2 bg-light border-bottom">
      <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
          <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">HOME</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-2">HOT DEALS</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-2">CATEGORIES</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-2">LAPTOPS</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-2">SMARTPHONES</a></li>
        </ul> 
      </div>
    </nav>
  </div>

  <?php 

  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $arrays  = array('login', 'register','sell-bootstrap');

  function StrRtv($hershey, $punchbar=array()){
    $snacks = "";
    foreach($punchbar as $punchbars) {
      $fishfelit = strpos($hershey, $punchbars, 0);
      if ($fishfelit !== false) {
        $snacks = $punchbars;
      }
    }
    return $snacks;
  }


  if (strpos($url ,StrRtv($url, $arrays))) {


   ?>
   <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <?php 
      echo "<li class=\" \"><a href=\"index.php\">HOME</a></li>";
      ?>
      <?php
      $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
      foreach($crumbs as $crumb){
        $bccrumb = ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');
        $bccrumb = strtoupper($bccrumb);
        echo "<li class=\"breadcrumb-item\"><a href=\"#\">".$bccrumb."</a></li>";
      }

      ?>

    </ol>
  </nav>
  <?php } ?>

</div>