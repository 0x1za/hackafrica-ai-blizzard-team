<?php
session_start();
ob_start();
include ('src/requests.php');
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

    <link href="css/main.css" rel="stylesheet" />
</head>

<body>
<?php
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    echo ("<h1>".$search."</h1>");

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_PORT => "5000",
        CURLOPT_URL => "http://127.0.0.1:5000/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{ \n \"search\":\"$search\"\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Postman-Token: c6e9d1cc-0028-4d34-8154-5c1e8a47c74d",
            "cache-control: no-cache"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        # echo $response;
        $data = json_decode($response, true);
//        var_dump($data);
        $data = $data["Entities"];

        $i = 0;
        $results = array(array());
        $types = array();
        #var_dump($data);
        while ($i < count($data)) {
            echo $i;
            $key = $data[$i]["Type"];
            $results[$key][] = $data[$i]["Text"];
            $types[] = $data[$i]["Type"];
            $i++;
        }
        #echo var_dump($types);
        if (in_array("DATE", $types) && in_array("LOCATION", $types) && in_array("QUANTITY", $types)) {
//            echo "Has Date and Location!";
            $search_results = make_get_request('/population/'.$results['DATE'][0].'/'.$results['LOCATION'][0].'/'.substr($results['QUANTITY'][0], 0, 2).'/');
//            echo var_dump($search_results);
        } elseif (in_array( "DATE" , $types) && in_array("QUANTITY", $types)){
//            echo "Has Date and Quantity!!";
            $search_results = make_get_request('/population/'.$results['DATE'][0].'/aged/'.substr($results['QUANTITY'][0], 0, 2).'/');
//            echo var_dump($search_results);
        }

        $_SESSION['results'] = $search_results;
        $_SESSION['search'] = $search;

        header('Location: results.php/');
    }
}
?>
<div class="s004">
    <form action="index.php", method="post">
        <fieldset>
            <legend>WHAT ARE YOU LOOKING FOR?</legend>
            <div class="inner-form">
                <div class="input-field">
                    <input class="form-control" id="choices-text-preset-values" type="text" name="search" placeholder="Type to search..." />
                    <button class="btn-search" type="submit" name="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<script src="js/extention/choices.js"></script>
<script>
    var textPresetVal = new Choices('#choices-text-preset-values',
        {
            removeItemButton: true,
        });

</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>