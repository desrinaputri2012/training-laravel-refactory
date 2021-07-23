<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Pengguna</title>
    <link rel="stylesheet" type="text/css" href="style.css">


<style>
    body{
    font-family: sans-serif;
    background: #f2eee0;
}
 
h1{
    text-align: center;
    /*ketebalan font*/
    font-weight: 300;
}
 
.tulisan_login{
    text-align: center;
    /*membuat semua huruf menjadi kapital*/
    text-transform: uppercase;
}
 
.kotak_login{
    width: 350px;
    background: white;
    /*meletakkan form ke tengah*/
    margin: 80px auto;
    padding: 30px 20px;
}
 
label{
    font-size: 11pt;
}
 
.form_login{
    /*membuat lebar form penuh*/
    box-sizing : border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
}
 
.tombol_login{
    background: #2b580c;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    margin-bottom: 20px;
}

.tombol_login2{
    background: #639a67;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
}

.logo{
    width: 100px;
    height: 100px;
    position: center;
}
 
.link{
    color: #232323;
    text-decoration: none;
    font-size: 10pt;
}
</style> 

</head>
<body>
    <form method="post" action="users.json" >
    
        <div class="kotak_login">
            <p class="tulisan_login"><b>Verifikasi Pengguna</b></p>
    
            <form>
                <center><label><b>Masukkan Username dan Password Anda</b></label></center> <br/>
                <input type="text" name="user_id" class="form_login" placeholder="Username">
    
                <input type="password" name="user_pass" class="form_login" placeholder="Password">
    
                <input type="submit" name="login" value="Login" class="tombol_login"/>
    
                <br/>
                
            </form>
            
        </div>


</body>
</html>

<?php  

// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

// Jika username dan password tidak diisi
if (!$username || !$password) {
    echo "<script type='text/javascript'>alert('Username dan password harus diisi.')</script>";
    echo "<script> window.location.assign('index.html'); </script>";
    return false;
}

//CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM user WHERE username='$username' and password_hash=sha1('$password')";
    
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

// Jika invalid credential
if (!$count) {
    echo "<script type='text/javascript'>alert('Username/password salah')</script>";
    echo "<script> window.location.assign('index.html'); </script>";
    return false;
}

//echo "Login Credentials verified";
if (isset($_POST['datang'])) $query1 = "INSERT into absensi (username, check_in) values ('$username', NOW())";
else if (isset($_POST['pulang'])) {
    $query1 = "UPDATE absensi SET check_out = NOW() WHERE username='$username' and date(check_in)=date(NOW())";
}

$result1 = mysqli_query($connection, $query1) or die(mysqli_error($connection));
echo "<script type='text/javascript'>alert('Anda berhasil absen')</script>";
echo "<script> window.location.assign('index.html'); </script>";
?>