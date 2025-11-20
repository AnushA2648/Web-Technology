<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="container">
    <h2 class="heading">Application Details</h2>

    <div class="glass-output">

        <p><strong>Name:</strong> <?php echo $_POST['fullname']; ?></p>
        <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
        <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
        <p><strong>Course:</strong> <?php echo $_POST['course']; ?></p>
        <p><strong>Address:</strong><br>
            <?php echo nl2br($_POST['address']); ?>
        </p>

        <button class="submit-btn" onclick="history.back()">← Go Back</button>
    </div>
</div>

</body>
</html>
