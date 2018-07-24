<?php
if (isset($_POST['content'], $_POST['id'])) {
    include "config.php";
    $content = $_POST['content'];
    $id = $_POST['id'];
    $key = sha1(time());

    $stmt = $conn->prepare("UPDATE note SET content=? where id=?");
    $stmt->bind_param("ss", $content, $id);
    $stmt->execute();
    $stmt->close();
}
