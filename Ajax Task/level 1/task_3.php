<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    #data {
        font-size: 25px;
        color: green;
        font-weight: bolder;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">
            3.Write a Jquery-Ajax code to perform airthmetic operations through php without reloading the page ?
        </h1>


        <input type="number" id="no1">
        <select id="oprator">
            <option value="plus">+</option>
            <option value="subs">-</option>
            <option value="mult">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" id="no2">

        <h2 id="result"></h2>

        <button type="submit">Click</button>

    </div>
    <script>
    // get method
    $(document).ready(function() {
        $("button").click(function(e) {
            e.preventDefault();
            var no1 = $('#no1').val();
            var no2 = $('#no2').val();;
            var oprator = $('#oprator').val();;
            var result = $('#result');
            // var Ino1 = parseInt(no1);
            // var Ino2 = parseInt(no2);
            // console.log(no1);

            $.ajax({
                type: "POST",
                url: "arthmetic_op.php",
                data: {
                    no1: no1,
                    no2: no2,
                    oprator: oprator
                },
                success: function(data) {
                    result.html(data)
                },
            });
        });
    });
    </script>
</body>

</html>