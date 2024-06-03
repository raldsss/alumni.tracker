<DOCTYPE html>

    <html lang="en">

        <head>

            <meta charset="UTF-8">

            <title>ADMIN LOGIN</title>

            <link rel="icon" href="../background/logo.png" type="image/png">
            <meta name="viewport" content="width=device-width, initial-scale=1.5">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.0.20/sweetalert2.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.0.20/sweetalert2.all.min.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

        </head>

        <style>
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
        *{
            font-family: 'Poppins';
        }
        body {

            background: linear-gradient(90deg, #C7C5F4, #776BCC);

        }

        .title{

              background: linear-gradient(#80FFDB, #64DFDF, #48BFE3, #5390D9, #5E60CE);
              border-radius: 5px;




            }

            img{

                display: block;

                margin-left: auto;

                margin-right: auto;

                padding: 0;

            }
            #message{
                color: red;
            }
            .forgot{
                text-decoration: none;
                position: relative;
                top: -1px;
            }

            </style>

    <body>

    <section>

      <div class="container py-5 h-100">

        <div class="row d-flex justify-content-center align-items-center h-100">

          <div class="col-xl-10">

            <div class="card rounded-3 text-black">

              <div class="row g-0">

                <div class="col-lg-6">

                  <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                      <h2 class="mt-1 mb-3 pb-1">Reset Password</h2>

                    </div><br>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-outline mb-4">


                        <label class="form-label" name="username" for="username">Username</label>

                          <input type="text" id="username" class="form-control" name="username"

                            placeholder="Enter username" required />


                        </div>



                        <div class="mb-3">

          <label for="password" class="form-label" name="password">New Password:</label><br>

          <div class="input-group">

              <input type="password" class="form-control" name="password" id="myInput" placeholder="Create New Password" required>

              <span class="input-group-text" onclick="togglePasswordVisibility()" style="cursor: pointer;">

                  <i id="eye-icon" class="fas fa-eye-slash"></i>

              </span>

          </div>

      </div>
      <div class="text-center pt-1 mb-5 pb-1">

        <button class="btn btn-primary" name="submit" type="submit">Submit</button><br>

            </div>



        </form>



      </div>

    </div>

    <div class="title col-lg-6 d-flex align-items-center">

      <img src="https://cdn-icons-png.flaticon.com/512/6195/6195699.png"

         alt="logo" style="width:80%; ">

      </div>

    </div>

  </div>

</div>

</div>

</div>

</div>

</section>

</body>

<script>

function togglePasswordVisibility() {

var passwordInput = document.getElementById("myInput");

var eyeIcon = document.getElementById("eye-icon");



if (passwordInput.type === "password") {

    passwordInput.type = "text";

    eyeIcon.classList.remove("fa-eye-slash");

    eyeIcon.classList.add("fa-eye");

} else {

    passwordInput.type = "password";

    eyeIcon.classList.remove("fa-eye");

    eyeIcon.classList.add("fa-eye-slash");

}

}

</script>


</html>
