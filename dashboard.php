<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

include('includes/header.php');
?>

<main>
  <section class="welcome">
    <h2>Welcome to your dashboard, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
    <p>This will show user-specific services, stats, and messages.</p>
  </section>
</main>

<?php include('includes/footer.php'); ?>
