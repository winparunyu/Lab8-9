<?php include "connect.php"?>
<?php
   $sql =$pdo->prepare("SELECT *FROM member WHERE username=?");
   $sql->bindParam(1,$_GET["username"]);
   $sql->execute();
   $row =$sql->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="update.php" method="post">
        ชื่อสมาชิก: <input type="text" name="username"><br>
        รหัสผ่าน: <input type="password" name="password"><br>
        ชื่อ: <input type="text" name="name"><br>
        ที่อยู่: <textarea name="address" cols="30" rows="10"></textarea><br>
        เบอร์โทรศัพท์: <input type="number" name="mobile"><br>
        อีเมล: <input type="email" name="email"><br>
        <input type="submit" value="เพิ่ม">
    </form>
</body>
</html>