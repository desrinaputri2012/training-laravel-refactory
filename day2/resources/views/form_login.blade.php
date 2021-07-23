<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
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
 
.tulisan_cek{
    text-align: center;
    /*membuat semua huruf menjadi kapital*/
    text-transform: uppercase;
}
 
.kotak_cek{
    width: 350px;
    background: white;
    /*meletakkan form ke tengah*/
    margin: 80px auto;
    padding: 30px 20px;
}
 
label{
    font-size: 11pt;
}
 
.form_cek{
    /*membuat lebar form penuh*/
    box-sizing : border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
}
 
.tombol_cek{
    background: #2b580c;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    margin-bottom: 20px;
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
    <form method="post">
        @method('get')
        @csrf
        <div class="kotak_cek">
            <p class="tulisan_cek"><b>Form Login</b></p>
    
            <form>
                <input type="text" name="username" class="form_cek" placeholder="Masukkan Username">

                <input type="password" name="password" class="form_cek" placeholder="Masukkan Password">
    
                <input type="submit" name="login" value="LOGIN" class="tombol_cek"/>

                    <?php
                        $json_data = file_get_contents("/Users/desrinaputri/Documents/TrainingLaravel/resources/views/users.json");
                        $json_data = json_decode($json_data, TRUE);
                        if(isset($_POST['username']) && isset($_POST['password'])) {
                            for($i=0; $i < count($json_data); $i++) {
                                if($json_data[$i]['username'] == $_POST['username']) {
                                    if($json_data[$i]['password'] == $_POST['password']) {
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
                        
                        if($success ?? '' == TRUE) {
                        echo "Selamat Datang ".$_POST['username'];
                        } else {
                        echo "Username/Password Salah";
                        }
                    ?>
    
                <br/>
                
            </form>
            
        </div>


</body>
</html>

