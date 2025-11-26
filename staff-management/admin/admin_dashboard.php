<?php

?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard - Queuing</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/common.css">
  <link rel="stylesheet" href="../../css/dashboard.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

</head>

<body>
  <?php include '../../includes/sidebar.php'; ?>

  <button class="dark-toggle" title="Toggle dark mode">
    <i class="bi bi-moon-stars"></i>
  </button>

  <div class="main-content">

    <div class="d-flex justify-content-between align-items-center mb-3">
      <h1>
        <span class="material-symbols-outlined" style="vertical-align:middle">dashboard</span>
        Dashboard
      </h1>

      <div>
        <a href="reports.php" class="btn btn-outline-secondary me-2">
          <span class="material-symbols-outlined" style="vertical-align:middle">bar_chart</span>
          Reports
        </a>

        <a href="../../api/staff-api/admin/admin-logout.php" class="btn btn-outline-danger">
          <span class="material-symbols-outlined" style="vertical-align:middle">logout</span>
          Logout
        </a>
      </div>
    </div>
    </a>
  </div>
  </div> 



  <script src="../../js/darkmode.js"></script>
  <!-- <script src="../js/autorefresh.js"></script> -->

</body>

</html>