<?php


?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<form id="submot" ty>
    <div class="row">
        <div class="input-field col s6">
            <input  id="textarea2" type="number" name = "val" class="materialize-textarea" data-length="120"/>
            <label for="textarea2">Enter Text</label>
        </div>

        <a type="submit" class="waves-effect  waves-light btn">button</a>
    </div>

</form>
<script>
    window.onload = function() {
        $(".btn").click(function (event) {
            var val = $('#submot').serializeArray()[0];
            fetch('submit.php',{
                method: 'POST', // или 'PUT'
                body: JSON.stringify({
                    val: val.value,
                }) // данные могут быть 'строкой' или {объектом}!

            })

                .then(response => response.json()) // преобразуем ответ в json

                .then(data => {
					var toastHTML = '<span><p>Number of zeroes is  </p></span><br/><span style = "color:red; text-size:20pt;">'+data.zeroes+'</span>';
					M.toast({html: toastHTML});
                    console.log(data.zeroes) // выводим в консоль результат выполнения response.json()
                })

                .catch(error => console.error(error));




        });
    }


</script>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
