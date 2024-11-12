<?php
// Initialize a message variable
$message = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file is uploaded
    if (isset($_FILES['textFile'])) {
        $uploaded_file = $_FILES['textFile'];
        if ($uploaded_file['error'] === UPLOAD_ERR_OK) {
            // Show the verifying message after the file upload
            $message = "<p class='verifying'>file uploaded sucessfully</p>";
        } else {
            // Handle any errors during upload
            $message = "<p class='error'>Error uploading file. Please try again.</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            margin-top: 20px;
        }
        input[type="file"] {
            margin: 10px 0;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        p.verifying {
            color: green;
            font-weight: bold;
        }
        p.error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Your File</h1>

        <?php if ($message) { echo $message; } ?>  <!-- Show verifying or error message -->

        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="textFile" id="textFile" required>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>


