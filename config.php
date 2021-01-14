<?php include "perfect_function.php"; ?>
<!DOCTYPE html>
<html>
<body>

<form action="<?= base_url ?>test.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>