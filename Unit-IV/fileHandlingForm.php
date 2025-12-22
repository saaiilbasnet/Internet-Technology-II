<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling in PHP</title>
</head>
<body>

<?php
$message = '';
$uploaded_file = '';

if (isset($_POST['submit'])) {

    if (isset($_FILES['upload']) && $_FILES['upload']['error'] === UPLOAD_ERR_OK) {

        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp  = $_FILES['upload']['tmp_name'];

        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $file_type = mime_content_type($file_tmp);

        if ($file_size > 2097152) {
            $message = "Error: File size must be 2MB or less.";
        } elseif (!in_array($file_type, $allowed_types)) {
            $message = "Error: Only JPG, PNG, GIF files are allowed.";
        } else {

            if (!is_dir('uploads')) {
                mkdir('uploads', 0755, true);
            }

            $safe_name = uniqid() . '_' . basename($file_name);
            $destination = 'uploads/' . $safe_name;

            if (move_uploaded_file($file_tmp, $destination)) {
                $message = "Upload Successfully!";
                $uploaded_file = $destination;
            } else {
                $message = "Error: Could not save the file!";
            }
        }

    } else {
        $message = "No file uploaded or upload error occurred!";
    }
}
?>

<h2>Upload an Image (2MB max)</h2>

<fieldset>
    <legend>Select an image to upload</legend>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">

        <strong>Choose File:</strong>
        <input type="file" name="upload" accept="image/*" required>
        <br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</fieldset>

<?php if (!empty($message)) : ?>
    <h3>Result:</h3>
    <p><?= htmlspecialchars($message) ?></p>
<?php endif; ?>

<?php if (!empty($uploaded_file)) : ?>
    <p>Uploaded File:</p>
    <img src="<?= htmlspecialchars($uploaded_file) ?>" width="300" alt="Uploaded Image">
<?php endif; ?>

</body>
</html>
