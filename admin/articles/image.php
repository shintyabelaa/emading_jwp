<?php
require('../../app/database/db.php');

if (isset($_GET['article_id'])) {
    $id = intval($_GET['article_id']); // or filter_var for validation

    // Prepare your query to get the image data
    $sql = "SELECT image FROM artikel WHERE article_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id); // 'i' for integer, not 's' which is for string
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // It is important to specify the correct content type for the image
        header("Content-Type: image/jpeg"); // Make sure this matches the actual image type
        echo $row['image'];
    } else {
        // No image found with the given ID
        header("HTTP/1.0 404 Not Found");
    }

    $stmt->close();
} else {
    // No ID provided
    header("HTTP/1.0 400 Bad Request");
}
?>