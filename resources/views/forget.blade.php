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
            .titles{
                font-size: 18px;
                font-weight: 700;
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



                      <span class="titles">Alumni Employment Tracker System</span>

                    </div><br>
                    <form method="POST" action="{{ route('forget') }}">
                        @csrf

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Enter Email Address :</label>
                            <input type="text" id="email" class="form-control" name="email" placeholder="name@example.com" required />
                        </div>

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="text-center pt-1 mb-5 pb-1">
                            <button class="btn btn-primary" type="submit">Submit</button><br>
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



</html>
