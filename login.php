<?php
if (($_POST['username'] == "root") && ($_POST['password'] == "123")) {
    // do user authentication as per your requirements 
    // ... 
    // ... 
    // based on successful authentication 
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}
?>