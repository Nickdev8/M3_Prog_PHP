<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    $json = '
        {
            "id": 102693,
            "sol": 1000,
            "camera": {
                "id": 20,
                "name": "FHAZ",
                "rover_id": 5,
                "full_name": "Front Hazard Avoidance Camera"
            },
            "img_src": "http://mars.jpl.nasa.gov/msl-raw-images/proj/msl/redops/ods/surface/sol/01000/opgs/edr/fcam/FLB_486265257EDR_F0481570FHAZ00323M_.JPG",
            "earth_date": "2015-05-30",
            "rover": {
                "id": 5,
                "name": "Curiosity",
                "landing_date": "2012-08-06",
                "launch_date": "2011-11-26",
                "status": "active"
            }
        }
        ';

    $data = json_decode($json);
    
    echo "ID: " . $data->id . "<br>";
    echo "Sol: " . $data->sol . "<br>";
    echo "Camera ID: " . $data->camera->id . "<br>";
    echo "Camera Name: " . $data->camera->name . "<br>";
    echo "Camera Full Name: " . $data->camera->full_name . "<br>";
    echo "Rover ID: " . $data->rover->id . "<br>";
    echo "Rover Name: " . $data->rover->name . "<br>";
    echo "Rover Landing Date: " . $data->rover->landing_date . "<br>";
    echo "Rover Launch Date: " . $data->rover->launch_date . "<br>";
    echo "Rover Status: " . $data->rover->status . "<br>";
    echo "Earth Date: " . $data->earth_date . "<br>";
    echo '<img src="' . $data->img_src . '" style="max-width: 20rem;">';
    

    ?>
</body>

</html>