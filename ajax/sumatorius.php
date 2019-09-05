<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
      <title>Sumatorius</title>
</head>
<body>
    <h1>Sumatorius & Skirtumatorius</h1>

    <h2 id="vaizdas"></h2>

    X:<br>
    <input type="text" id="x" value="">
    <br>
    Y:<br>
    <input type="text" id="y" value="">
    <br><br>
    <button type="button" id="sum">Sumatorius</button>
    <button type="button" id="skir">Skirtumatorius</button>

    


    <script>
        $(document).ready(function(){

            var A = function(x, y, action) {

            axios.post('http://localhost/_36/ajax/server.php',
            {
                x: x,
                y: y,
                action: action
            })
            .then(function (response) {
                $("#vaizdas").slideUp(500, function(){
                    $(this).empty().html(response.data.rez).slideDown(500);
                });

                console.log(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });

            }

            $(document).on("click", "#sum", function(){
                
                var x = $("#x").val();
                var y = $("#y").val();

                A(x, y, "sumatorius");


                console.log(x);
                console.log(y);

            });

            $(document).on("click", "#skir", function(){
                console.log("SKIR");
            });





        });
    </script>
    
</body>
</html>