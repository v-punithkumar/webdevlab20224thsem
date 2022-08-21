<?php
if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
    echo json_encode(array('success' => True));
} else {
    echo json_encode(array('success' => False));
}
