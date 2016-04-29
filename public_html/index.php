<!DOCTYPE html>
<html>
  <head>
    <!-- common files -->
    <?php include_once('../views/head.php') ?>

  </head>
  <body>
    <?php include_once '../views/header.php'; ?>
    
    <?php include_once 'navbar.php'; ?>
    
    <div class="container">

      <?php include_once 'carousel.php'; ?>
      <?php include_once 'about.php'; ?>
      <hr>
      <?php include_once 'courses.php'; ?>
      <hr>
      <?php include_once 'achievements.php'; ?>
      <hr>
      <?php include_once 'testimonials.php'; ?>
      <hr>
      <?php include_once 'contactus.php'; ?>
    </div>

    <div id="map-container" class="container">
    </div>
  
    <?php include_once '../views/footer.php'; ?>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API || {}, Tawk_LoadStart = new Date();
    (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/56f5498e27dba83622ce2676/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

  </body>
</html>