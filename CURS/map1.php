<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Geocode</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  </head>
  <body>

    <script>
    //call Geocode
      function geocode(){
        var location = '22 Main st Boston Ma';
        axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
          params:{
            address:location,
            key:'AIzaSyANyoYoCYKIyC8GkXRC8uGAzM4x6KOwqe8'
          }
          .then(function(response){
            console.console.log(response);
          });
          .catch(function(error){
            console.log();
          });
        });
    </script>

  </body>
</html>
