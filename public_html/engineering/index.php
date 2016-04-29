<!DOCTYPE html>
<html>

<head>
  <!-- common files -->
  <?php include_once("../../views/head.php") ?>
</head>

<body>

  <?php include_once '../../views/header.php'; ?>
  <?php include_once 'navbar.php'; ?>

  <div class="container">
    <div class="jumbotron row text-center">
      <h1>All things Engineering!</h1>
      <p>Engineering is the application of mathematics, empirical evidence and scientific, economic, social, and practical knowledge in order to invent, innovate, design, build, maintain, research, and improve structures, machines, tools, systems, components, materials, and processes.</p>
    </div>

    
    <?php include_once 'admissions.php'; ?>
    <hr>
    <?php include_once 'engg_colgs.php'; ?>
    <hr>
    <?php include_once 'cutoffs.php'; ?>
    <hr>
    <?php include_once 'engg_courses.php'; ?>
    <hr>
    <?php include_once 'syllabus.php'; ?>
    <hr>
    <?php include_once 'university_papers.php'; ?>

  </div>
  <?php include_once '../../views/footer.php'; ?>
</body>

</html>
