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

    table tr td {
        border: 2px solid red;
    }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center">
            4.Write a Jquery-Ajax code to perform all type of form submission through php without reloading the page?
        </h3>
        <h3 class="text-center">
            5.Write a Jquery-Ajax code to perform all type of form CRUD operations through php without reloading the
            page
        </h3>
        <br><br>
        <div class="row">
            <div class="col-4">
                <form>
                    <div id="form-content">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" />

                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" id="email" />

                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" id="password" />

                        </div>

                        <br /><br />


                    </div>
                </form>
                <div class="form-group">
                    <button class="btn btn-info" id="submit">Submit</button>
                </div>
            </div>
            <div class="col-8">
                <table class="text-center table-border">
                    <th>
                        <tr>

                            <td>Name</td>
                            <td>Email</td>
                            <td>password</td>
                            <td>action</td>
                            <td>action</td>

                        </tr>
                    </th>

                    <tbody id="table_data">


                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {

        $

        $('#submit').click(function() {

            var name = $('#name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            if (name != "" && email != "" && password != "") {
                $.ajax({
                    url: "arthmetic_op.php",
                    type: "POST",
                    data: {
                        name: name,
                        email: email,
                        password: password,
                    },
                    success: function(data) {

                        alert(data);

                        // if (data.statusCode == 200) {
                        //     alert("added")
                        // } else {
                        //     alert("error")
                        // }
                    }
                })

            } else {
                alert("fill all data")
            }
            $.ajax({
                url: "getdata.php",
                type: "GET",
                success: function(table) {
                    $('#table_data').html(table);
                }
            });

        });



    });
    </script>
</body>

</html>