<?php
if (isset($_POST['content'])) {
    include "config.php";
    $content = $_POST['content'];
    $key = sha1(time());

    $stmt = $conn->prepare("INSERT INTO note (id, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $key, $content);
    $stmt->execute();
    $stmt->close();
}
