<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
<script>
function confirmDelete(username) { 
var ans = confirm("ต้องการลบสินค้ารหัส" + username); 
if (ans==true) 
document.location = "delete.php?username=" + username; 
}
</script>
</head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while($row =$stmt->fetch()){
    echo"ชื่อสมาชิก: ".$row["name"]."<br>";
    echo"ที่อยุ่: ".$row["address"]."<br>";
    echo"อีเมล: ".$row["email"]."<br>";
    echo "<a href=dbworkshop9.php?username=".$row["username"].">เเก้ไข</a> |";
    echo "<a href=delete.php?username=".$row["username"].">ลบ</a>";
    echo "<hr>\n";
}
?>
</body>
</html>