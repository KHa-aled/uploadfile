<!-- <?php
 session_start(); 

header("Location:loginx.php")
?> -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = $_POST["database"];
    $sqlFile = $_FILES["sqlFile"];

    $host = "localhost";
    $username = "root"; // اسم المستخدم الخاص بقاعدة البيانات
    $password = ""; // كلمة المرور الخاصة بقاعدة البيانات
    $dbname = $database;

    // يتم الاتصال بقاعدة البيانات
    $conn = new mysqli($host, $username, $password, $dbname);

    // التحقق من نجاح الاتصال
    if ($conn->connect_error) {
        die("فشل الاتصال: " . $conn->connect_error);
    }

    // التحقق من أن الملف تم تحميله بنجاح
    if ($sqlFile["error"] == UPLOAD_ERR_OK) {
        $sqlFilePath = $sqlFile["tmp_name"];

        // قراءة محتوى الملف
        $sqlContent = file_get_contents($sqlFilePath);

        // تنفيذ الاستعلام SQL
        if ($conn->multi_query($sqlContent) === TRUE) {
            echo "تم تنفيذ الاستعلامات بنجاح.";
        } else {
            echo "حدثت مشكلة أثناء تنفيذ الاستعلامات: " . $conn->error;
        }
    } else {
        echo "حدثت مشكلة أثناء رفع الملف.";
    }

    // إغلاق الاتصال بقاعدة البيانات
    $conn->close();
}
?>
