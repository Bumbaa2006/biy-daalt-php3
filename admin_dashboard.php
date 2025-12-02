<?php
session_start();
require 'db.php';

// Нэвтрээгүй бол login руу буцаана
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}

$success = '';
$error   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $slug  = trim($_POST['slug'] ?? '');
    $name  = trim($_POST['name'] ?? '');
    $image = trim($_POST['image'] ?? '');

    if ($slug === '' || $name === '' || $image === '') {
        $error = 'Slug, нэр, зургийн файлаа бүгдийг бөглөнө үү.';
    } else {
        $stmt = $conn->prepare("
            INSERT INTO amitan (slug, name, image)
            VALUES (?, ?, ?)
        ");
        $stmt->bind_param("sss", $slug, $name, $image);

        if ($stmt->execute()) {
            $success = 'Шинэ амьтан амжилттай бүртгэлээ!';
        } else {
            $error = 'Алдаа гарлаа: ' . $conn->error;
        }

        $stmt->close();
    }
}

// Сүүлд бүртгэсэн 10 амьтан жагсаая
$result = $conn->query("SELECT id, slug, name, image, created_at FROM amitan ORDER BY id DESC LIMIT 10");
?>
<!doctype html>
<html lang="mn">
<head>
  <meta charset="utf-8">
  <title>Admin – Амьтан бүртгэх</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
<div class="container py-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h4 mb-0">🐾 Admin – Шинэ амьтан бүртгэх</h1>
    <div>
      <span class="me-2">
        Сайн байна уу,
        <strong><?php echo htmlspecialchars($_SESSION['admin_username']); ?></strong>
      </span>
      <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
  </div>

  <?php if ($success): ?>
    <div class="alert alert-success py-2"><?php echo htmlspecialchars($success); ?></div>
  <?php endif; ?>
  <?php if ($error): ?>
    <div class="alert alert-danger py-2"><?php echo htmlspecialchars($error); ?></div>
  <?php endif; ?>

  <div class="card mb-4">
    <div class="card-body bg-secondary">
      <h2 class="h5 mb-3">Шинэ амьтан нэмэх</h2>
      <form method="post">
        <div class="mb-3">
          <label class="form-label">Slug (key)</label>
          <input type="text" name="slug" class="form-control" placeholder="temee1, mori1..." required>
          <div class="form-text text-light">
            Дараа нь програм дотроо <code>slug</code>-аар нь ялгаж ашиглаж болно.
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Амьтны нэр</label>
          <input type="text" name="name" class="form-control" placeholder="Тэмээ, Морь..." required>
        </div>

        <div class="mb-3">
          <label class="form-label">Зургийн файл нэр</label>
          <input type="text" name="image" class="form-control" placeholder="temee.jpg" required>
          <div class="form-text text-light">
            Зураг чинь <code>gallery/</code> хавтас дотор байх ёстой. Жишээ: <code>gallery/temee.jpg</code>.
          </div>
        </div>

        <button type="submit" class="btn btn-success">Амьтан бүртгэх</button>
      </form>
    </div>
  </div>

  <h2 class="h5 mb-2">Сүүлд бүртгэсэн амьтад</h2>
  <div class="card">
    <div class="card-body p-0 bg-secondary">
      <table class="table table-dark table-striped mb-0">
        <thead>
        <tr>
          <th>#</th>
          <th>Slug</th>
          <th>Нэр</th>
          <th>Зураг</th>
          <th>Огноо</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($result && $result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo htmlspecialchars($row['slug']); ?></td>
              <td><?php echo htmlspecialchars($row['name']); ?></td>
              <td><?php echo htmlspecialchars($row['image']); ?></td>
              <td><?php echo $row['created_at']; ?></td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="5" class="text-center py-3">Одоогоор амьтан бүртгээгүй байна.</td>
          </tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
</body>
</html>