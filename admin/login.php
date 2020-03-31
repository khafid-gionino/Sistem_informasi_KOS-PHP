<?php
$database = file_get_contents("data.json");
$database = json_decode($database, TRUE);
if(isset($_POST['username']) && isset($_POST['password'])) {
    for($i=0; $i < count($database); $i++) {
        if($database[$i]['username'] == $_POST['username']) {
            if($database[$i]['password'] == $_POST['password']) {
                $success = TRUE;
                break;
            } else {
                $success = FALSE;
            }
        } else {
            $success = FALSE;
        }
    }
} else {
    echo "Harap isi semua kolom yang tersedia";
}
if($success == TRUE) {
    echo "
    <script>
        alert('Login Berhasil !!');
        document.location.href = 'home1.html';
    </script>
";
} else {
    echo "
        <script>
            alert('Passwords & Username Salah !!');
            document.location.href = 'index.php';
        </script>
    ";
}
?>