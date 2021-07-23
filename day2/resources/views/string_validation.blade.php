<!DOCTYPE html>
<html>
<head>
    <title>Validasi Username</title>
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
            <p class="tulisan_cek"><b>Validasi Username</b></p>
    
            <form>
                <input type="text" name="username" class="form_cek" placeholder="Masukkan Username">
    
                <input type="submit" name="login" value="CEK" class="tombol_cek"/>

                    <?php
                        if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $username ?? ''))
                            {
                                echo 'Sudah sesuai';
                            }
                    ?>
    
                <br/>
                
            </form>
            
        </div>


</body>
</html>