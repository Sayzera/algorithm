<?php

 session_start();
$_SESSION['names'] = $_SESSION['names'] ? $_SESSION['names'] : array();

if (isset($_POST['btnSubmit'])) {
    array_push($_SESSION['names'], $_POST['gorevAdi']);
}

?> 

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <div class="p-2 bd-highlight container  
    d-flex justify-content-center pt-5" style="height: 100vh;">
        <!-- Content here -->

        <!---
        Ekleme inputu
       -->

        <div class="p-2 bd-highlight w-50">

            <h3 class="mb-5"> TODO LİST</h3>
            <form id="gorevForm" method="post">
                <div class="form-group ">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="gorevAdi" name="gorevAdi" placeholder="Yapılacak bir görev ekleyin" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" name="btnSubmit" id="button-addon2">Görev ekle</button>
                    </div>
                </div>
            </form>


            <table class="table mt-5" id="gorevList">
                <thead>
            <?php 
                        print_r($_SESSION['names']);
                        ?>

                    <?php
                    foreach ($_SESSION['names'] as $index => $value) {
                    ?>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo $_SESSION['names'][$index] ?></th>
                            <th scope="col"><a href="http://localhost/TODO-LİST/egzample.php?id=<?php echo $index ?> "><button type="button" class="btn btn-success">Tamamlandı</button></a></th>
                        </tr>
                    <?php
                    }
                    ?>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
    </div>









    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>



