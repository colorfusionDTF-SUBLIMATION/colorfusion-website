
<?php
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
$target_file = $target_dir . basename($_FILES["designFile"]["name"]);

if (move_uploaded_file($_FILES["designFile"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars(basename($_FILES["designFile"]["name"])) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>
