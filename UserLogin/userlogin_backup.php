<!-- userlogin.php -->
<!DOCTYPE html>
<html lang="en jp">

<?php include '../WebComponents/head.php'; ?>

<body>

    <?php include '../WebComponents/navigation.php'; ?>  

    <br>

    <div class="container">
    <form id="loginForm" action="./userlogincall.php" method="post">
    <img src="../WebResources/K-List-Logo.jpg" width="200" alt="K-List"></a></p>
    <!-- <h1>K-List</h1> -->
      <h2>ログイン</h2>
      <br>
      <label for="username">ユーザー名 ;</label>
      <input type="text" id="username" name="username" required>

      <label for="password">パスワード ;</label>
      <input type="password" id="password" name="password" required>
      <br>
      <button type="submit">ログイン</button>
    </form>
    </div>

    <br>

    <?php include '../WebComponents/footer.php'; ?>

</body>

</html>
