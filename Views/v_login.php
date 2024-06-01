<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            background-color: #f2f5f7; 
            font-family: sans-serif;
        }

        .form-horizontal {
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff; 
        }

        .control-label {
            text-align: left;
            font-weight: bold;
        }


        .btn-primary:hover {
            background-color: #4c2479; 
        }
    </style>
    <title>From Login</title>
</head>
<div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <form class="form-horizontal" action="login.php" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="passwords" class="form-control" placeholder="Masukan Password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe1mKYjA8GUjMD9LclJ1aX+vyt5xRxgOmJoB4Q4yRvsyYgB/e4Klz9" crossorigin="anonymous"></script>
</body>
</html>