<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="app"></div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script>
        axios.post('https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyDaVtchJXHs-HCbD2aE7NHW0k-yTQVpCCk')
            .then((res) => {
                console.log(res);
            })
    </script>

</body>

</html>