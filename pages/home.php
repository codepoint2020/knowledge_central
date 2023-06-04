<?php 
include 'components/head.php'; 
?>
  <body>
    <div class="container-scroller">
      <!-- partial:../partials/_navbar.html -->
      <?php include 'components/topnav.php'; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../partials/_sidebar.html -->
        <?php include 'components/sidebar.php'; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              <?php 
                if (isset($_GET['users'])) {
                  include 'components/users.php';
                }
              ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../partials/_footer.html -->
<?php include 'components/footer.php'; ?>