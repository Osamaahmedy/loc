<?PHP



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
  
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
   

    $locationLink = "https://www.google.com/maps?q=$latitude,$longitude";
}
?>