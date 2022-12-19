<?php
    $weather = "";
    $error = "";

    if(array_key_exists('city', $_GET)) {
        $city = str_replace(' ', '', $_GET['city']);
        $file_headers = @get_headers("https://www.weather-forecast.com/locations/" . 
        $city . "/forecasts/latest");
        if($file_headers[0] == "HTTP/1.1 404 Not Found") {
        $error =  " could not be found.";
        }      
    }

    else
     {
        $error = "That city could not be found.";
     }//end of array key exists test
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>weather_scrapper</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
              crossorigin="anonymous">


            <!-- CSS -->
        <style type="text/css">
            html {
                background: url('bk.jpg') no-repeat center center fixed;
                background-size: cover;
            }

            body {
                background: none;
            }

            .container {
                text-align: center;
                margin-top: 200px;
                width: 450px;
            }

            input {
                margin: 20px 0;
            }

            #weather {
                margin-top: 15px;
            }

        </style>

</head>
<body>

<div class="container">
            <h1>What's the Weather?</h1>
            <form>
                <fieldset class="form-group">
                    <label for="city">Enter the name of a city.</label>
                    <input type="text" 
                           class="form-control" 
                           name="city" 
                           id="city" 
                           placeholder="E.g., Mardalla, Kermai">

                 </fieldset>
                 <button type="submit" class="btn btn-primary">Submit</button>

                 <!-- <div id="weather">
                <?php
                    if($weather) {
                        echo '<div class="alert alert-success" role="alert">' . $weather . '</div>';
                    }
                    else if($error) {
                        echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
                    }
                ?> -->

            </div>
            </div><!-- end of class='container' div -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
                crossorigin="anonymous"></script>   
    
</body>
</html>