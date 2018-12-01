<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/results.css">
    <title>Results</title>
</head>
<body>
<div class="container">
    <p>Search Results for: <?php echo $_SESSION['search']; ?></p>
<?php
$i = 0;
$data = $_SESSION['results'];
while ($i < count($data)){
    echo '<div class="row">
        <div class="col s12 m12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Data</span>
                    <p>Females: '.$data[$i]['females'].'</p>
                    <p>Country: '.$data[$i]['country'].'</p>
                    <p>Age: '.$data[$i]['age'].'</p>
                    <p>Males: '.$data[$i]['males'].'</p>
                    <p>Year: '.$data[$i]['year'].'</p>
                    <p>Total: '.$data[$i]['total'].'</p>
                </div>
                <div class="card-action">
                    <a href="./index.php">Search Again</a>
                    <a href="#">link</a>
                </div>
            </div>
        </div>
    </div>';
    $i++;
}
?>
</div>
</body>

