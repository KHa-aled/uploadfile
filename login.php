<?php
 session_start(); 

header("Location:loginx.php");

?>
<?php
session_start();
// يمكنك تحديد معلومات تسجيل الدخول هنا
$enteredUsername = $_POST["username"];
$enteredPassword = $_POST["password"];
// اتصال بقاعدة البيانات ومعلومات الاتصال
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استعلام SQL لاسترجاع السجل المطابق لاسم المستخدم وكلمة المرور
$sql = "SELECT * FROM users WHERE username = '$enteredUsername' AND password = '$enteredPassword'";
$result = $conn->query($sql);

// التحقق من نتيجة الاستعلام
if ($result->num_rows > 0) {
    // إذا كان هناك نتائج، يعني أنه تم العثور على تطابق
    $_SESSION["username"] = $enteredUsername;
    header("Location: index.php"); // توجيه المستخدم بعد تسجيل الدخول
} else {
    echo "فشل تسجيل الدخول. اسم المستخدم أو كلمة المرور غير صحيحة.";
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();

