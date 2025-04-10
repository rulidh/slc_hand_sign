<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Sign Language of SLC</title>
</head>
<body>
    <div class="container text-center my-2">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <?php
            $dir = "./hand_sign/*.jpg";
            //get the list of all files with .jpg extension in the directory and safe it in an array named $images
            $images = glob( $dir );

            
            //extract only the name of the file without the extension and save in an array named $find
            foreach( $images as $image ):
                $info = pathinfo($image);
                $file_name =  basename($image,'.'.$info['extension']);
            ?>
            <div class="col">
                <div class="card" style="width: 12rem;">
                    <img src="<?php echo $image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $file_name ?></p>
                    </div>
                </div>
            </div>  
            <?php endforeach; ?>    
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>