<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            /* background-image: url('https://www.digitalsilk.com/wp-content/uploads/2020/06/website-development-process-hero-image.png'); */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Poppins';
        }
        .img-fluid{
            position: absolute;
            top: 10rem;

        }
        .card{
            position: relative;
            left: 15rem;
            top: 15rem;
            min-height: 400px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="img-fluid">
            <img src="https://www.designer-daily.com/wp-content/uploads/2020/03/web-dev-business.jpg" alt="">
        </div>
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Registration</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div><br>
                        <div class="mb-3">
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div><br>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div><br>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                    <div class="mt-3 text-center">
                        <span>Already have an account? <a href="{{ route('login') }}">Login here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
