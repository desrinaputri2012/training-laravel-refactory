<?php

$error = '';
$name = '';
$email = '';
$telephone = '';
$message = '';

function clean_text($string)
    {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

if(isset($_POST["submit"]))
    {
        if(empty($_POST["name"]))
            {
                $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
            }
        else
            {
                $name = clean_text($_POST["name"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$name))
                {
                    $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
                }
    }
        
        if(empty($_POST["email"]))
            {
                $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
            }
        else
            {
                $email = clean_text($_POST["email"]);
            
                if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                            $error .= '<p><label class="text-danger">Invalid email format</label></p>';
                        }
                    }
            
                    
        if(empty($_POST["telephone"]))
            {
                $error .= '<p><label class="text-danger">Nomor Telepon harus diisi!</label></p>';
            }
        else
            {
                $telephone = clean_text($_POST["telephone"]);
            }


        if(empty($_POST["image"]))
            {
                $error .= '<p><label class="text-danger">Profile Picture harus diunggah</label></p>';
            }
        else
            {
                $image = clean_text($_POST["image"]);
            }
    

        if(empty($_POST["document"]))
            {
                $error .= '<p><label class="text-danger">Dokumen harus diunggah</label></p>';
            }
        else
            {
                $document = clean_text($_POST["document"]);
            }


if($error == '')
        {
            $file_open = fopen("file.csv", "a");
            $no_rows = count(file("file.csv"));
            if($no_rows > 1)
                {
                    $no_rows = ($no_rows - 1) + 1;
                }
        $form_data = array(
            'sr_no'  => $no_rows,
            'name'  => $name,
            'email'  => $email,
            'telephone' => $telephone,
            'image' => $image,
            'document' => $document
        );
        fputcsv($file_open, $form_data);
            $error = '<label class="text-success">Berhasil!</label>';
            $name = '';
            $email = '';
            $telephone = '';
            $image = '';
            $document = '';
        }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Registrasi</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
 <body>
  <br />
    <div class="container">
    <h2 align="center">Form Registrasi</h2>
    <br />
    <div class="col-md-6" style="margin:0 auto; float:none;">
        <form method="post">
        @method('get')
        @csrf
        <br />
            <?php echo $error; ?>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" placeholder="Masukkan Nama" class="form-control" value="<?php echo $name; ?>" />
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo $email; ?>" />
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="telephone" class="form-control" placeholder="Masukkan Nomor Telepon" value="<?php echo $telephone; ?>" />
                </div>

                <div class="form-group">
                    <label>Profile Picture</label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Upload Profile Picture">
                        <?php 
                            echo $message;

                            // $target_dir = "./file";
                            // $target_file = $target_dir . basename($_FILES["image"]["name"]);
                            // $uploadOk = 1;
                            // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // // Check if image file is a actual image or fake image
                            // if(isset($_POST["submit"])) {
                            // $check = getimagesize($_FILES["image"]["tmp_name"]);
                            // if($check !== false) {
                            //     echo "File is an image - " . $check["mime"] . ".";
                            //     $uploadOk = 1;
                            // } else {
                            //     echo "File is not an image.";
                            //     $uploadOk = 0;
                            // }
                            // }
                        ?></textarea>
                </div>
                
                <div class="form-group">
                    <label>Dokumen</label>
                    <input type="file" name="document" class="form-control" placeholder="Upload Dokumen"><?php echo $message; ?></textarea>
                </div>

                <div class="form-group" align="center">
                    <input type="submit" name="submit" class="btn btn-info" value="Submit" />
                </div>
        </form>
    </div>
    </div>
 </body>
</html>