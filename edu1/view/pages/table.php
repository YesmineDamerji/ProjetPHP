<?php
// Including necessary files using absolute paths
require_once(__DIR__ . '/../../controller/forumc.php');
require_once(__DIR__ . '/../../model/forum.php');


$forumC = new ForumController();
$list = $forumC->showForum();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>Dashboard Admin</title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <!-- Side navigation -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="../index.php">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main logo">
        <span class="ms-1 font-weight-bold">PulseCreatif</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" xmlns="http://www.w3.org/2000/svg">
                <!-- SVG content for icon -->
              </svg>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <!-- Main content -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
      </div>
    </nav>

    <!-- Forum Table -->
    <div class="container-fluid py-4">
      <table border="1" align="center" width="60%">
          <tr>
              <th>Forum ID</th>
              <th>Username</th>
              <th>Title</th>
              <th>Content</th>
              <th>Created At</th>
              <th>Updated At</th>
          </tr>
          <?php foreach ($list as $forum): ?>
          <tr>
            <form method="POST" action="updateforum.php">
              <td><?= $forum['idF']; ?></td>
              <td><?= $forum['username']; ?></td>
              <td><?= $forum['title']; ?></td>
              <td><?= $forum['content']; ?></td>
              <td><?= $forum['created_at']; ?></td>
              <td><?= $forum['updated_at']; ?></td>
              <td align="center">
                <input type="hidden" value="<?= htmlspecialchars($forum['idF']); ?>" name="idF">
                <input type="hidden" value="<?= htmlspecialchars($forum['username']); ?>" name="username">
                <input type="hidden" value="<?= htmlspecialchars($forum['title']); ?>" name="title">
                <input type="hidden" value="<?= htmlspecialchars($forum['content']); ?>" name="content">
                <input type="hidden" value="<?= htmlspecialchars($forum['created_at']); ?>" name="created_at">
                <input type="hidden" value="<?= htmlspecialchars($forum['updated_at']); ?>" name="updated_at">
                <input type="submit" name="update" value="update">
                  </form>
              </td>
              <td>
                  <a href="../deleteforum.php?id=<?= htmlspecialchars($forum['idF']); ?>">Delete</a>
              </td>
          </tr>
          <?php endforeach; ?>
      </table>
    </div>
  </main>

  <!-- Core JS Files -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>
</html>
