<?php
 session_start(); 

header("Location:loginx.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رفع ملف SQL</title>
</head>
<body>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="database">اختر قاعدة البيانات:</label><br>
        <select name="database" id="database">
            <option value="khaled9">قاعدة البيانات 1</option>
            <option value="database2">قاعدة البيانات 2</option>
            <!-- يمكنك إضافة المزيد من الخيارات حسب حاجتك -->
        </select>
        <br>
        <label for="sqlFile">اختر ملف SQL:</label><br>
        <input type="file" name="sqlFile" id="sqlFile" accept=".sql">
        <br>
        <input type="submit" value="رفع الملف">
    </form>
</body>
</html>
<?php
header("Location: login.html");
exit();
?>
