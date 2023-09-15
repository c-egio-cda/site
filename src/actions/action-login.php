<?php 
header("Content-Type: application/json");
    function receiveData($array, array $keyToFind = []): bool
    {
        
        foreach ($keyToFind as $key) {
            if (!array_key_exists($key, $array)) {
                return false;
            }
        }
        return true;
    }

    if (receiveData($_POST,['email','password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        // Your authentication logic here
        
        // Return JSON success
        echo json_encode(['success' => true]);
    } else {
        // Return JSON error
        echo json_encode(['success' => false, 'error' => 'Required fields are missing']);
    }
?>