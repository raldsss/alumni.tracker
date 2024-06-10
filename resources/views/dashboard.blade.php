<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sidebar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
</head>
<style>
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
        overflow-x: hidden; /* Prevent horizontal scrollbar */
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 0; /* Remove margin bottom */
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        position: fixed; /* Fixed position */
        top: 0; /* Position at the top */
        width: 100%; /* Full width */
        z-index: 1; /* Ensure it stays above other content */
    }

    .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
    }

    .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
    }

    .btn-info {
        background-color: #385796;
    }

    /* ---------------------------------------------------
        SIDEBAR STYLE
    ----------------------------------------------------- */

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }

    .title {
        margin-left: -1rem;
        font-family: poppins;
        font-size: 25px;
        font-weight: 700;
        text-align: center;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: #1d3c78;
        color: #fff;
        transition: all 0.3s;
        position: fixed; /* Fixed position */
        top: 0; /* Position at the top */
        height: 100vh; /* Full height */
        overflow-y: auto; /* Enable vertical scrollbar */
        z-index: 999; /* Ensure it stays above other content */
    }

    #sidebar.active {
        margin-left: -250px;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #385796;
    }

    #sidebar ul.components {
        padding: 20px 0;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    #sidebar ul li a:hover {
        color: #7386d5;
        background: #fff;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: #6d7fcc;
    }

    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #6d7fcc;
    }

    ul.CTAs {
        padding: 20px;
    }

    ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    a.download {
        background: #fff;
        color: #7386d5;
    }

    a.article,
    a.article:hover {
        background: #6d7fcc !important;
        color: #fff !important;
    }


/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}
.card {
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    width: 300px;
    margin: 15px;
    padding: 20px;
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .card h3 {
    margin-top: 0;
    font-size: 20px;
  }

  .card p {
    color: #666;
    font-size: 16px;
  }

  .card .icon {
    font-size: 48px;
    color: #007bff;
    margin-bottom: 10px;
  }
  .container {
    display: flex;
    position: relative;
    top: 10rem;
    left: 8rem;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px;
  }

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {

    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
    .container{
      position: relative;
      top: 5rem;
      left: 0;
    }
    .navbar{
      margin-left: -1rem;
    }

}


  .fa-regular{
   text-align: center;
   margin-left: 3rem;


  }
  .avatar {
    display: flex;
    align-items: center;
}

.avatar img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.avatar span {
    font-weight: bold;
}
.dropdown-menu{
    position: absolute;
    width: 50px;
    margin-left: -10px;


}
.dropdown-item{
    margin-left:-1rem;
    font-size: 13px;
}
.footer{
    position: absolute;
    bottom:0;

}
p{
    color: #fefefe;
    font-size: 13px;

}
hr{
    background-color: #fefefe;
    margin-left:5px;
}
.btns{
    border: 2px solid transparent;
    border-radius: 50px;
    background: #385796;
}

#prof{
    border:2px solid white;
    background: transparent;
}
.admin{
    color: #fefefe;
    position: relative;
    left: -7px;
}

.cards {
            position: relative;
            top: 1rem;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 100%;
            margin: 20px;
            padding: 20px;
        }

        .cards:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        #chartContainer {
            height: 300px;
            width: 100%;
        }
        .date-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .month-arrow {
            cursor: pointer;
            font-size: 20px;
        }
        .date-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
</style>
<body>


    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            timer: 800,
            showConfirmButton: false
        })
    </script>
@endif


    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="title">Alumni Tracking System</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="list-group-item-light">
                    <a>Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('manageAlumni') }}">Alumni Data</a>
                </li>

            </ul>

        <!-- Footer -->

        <footer class="footer">
            <hr>
            <div class="container-fluid">
                <p >© 2024 System All rights reserved.</p>
            </div>
        </footer>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">


                    {{-- change --}}
                    <div type="button" id="sidebarCollapse" >
                        {{-- class="btn btn-info" --}}
                     {{-- <i class="fas fa-align-left"></i> --}}
                 </div>
                    {{-- <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button> --}}
                    <div class="dropdown">
                        <button class=" btns" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar">
                                <img id="prof" src="https://ps.w.org/user-avatar-reloaded/assets/icon-256x256.png?rev=2540745" alt="">
                                <span class="admin">Admin</span>
                            </div>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('accounts') }}" id="updateAccount"><i class="fas fa-user-edit"></i> Update Account</a>
                            <a class="dropdown-item" href="#" id="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </nav>





            <div class="container">
                <div class="card">
                    <i class="icon fa-solid fa-users"></i>
                    <h3>Total Alumni</h3>
                    <p>{{ $totalAlumni }}</p>
                </div>
                <div class="card">
                    <i class="icon fa-solid fa-spinner"></i>
                  <h3>Pendings Survey</h3>
                  <p>{{ $pendingAlumniCount }}</p>
                </div>
                <div class="card">
                    <i class="icon fas fa-users"></i>
                </div>

               <div class="cards">
                    <div class="date-container">
                        <span class="month-arrow" onclick="previousMonth()">&#10094;</span>
                        <h3 id="selectedDate">June 2024</h3>
                        <span class="month-arrow" onclick="nextMonth()">&#10095;</span>
                    </div>
                    <div>
                        <label for="yearSelect">Select Year:</label>
                        <select id="yearSelect" onchange="updateYear(this.value)">
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div id="chartContainer"></div>
                </div>


         </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('logout').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action of clicking the link

            Swal.fire({
                title: 'Are you sure?',
                text: "You will be logged out!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('logout') }}"; // Redirect to logout route
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
         var currentDate = new Date();
          var currentMonth = currentDate.getMonth();
          var currentYear = currentDate.getFullYear();
          var monthNames = ["January", "February", "March", "April", "May", "June",
              "July", "August", "September", "October", "November", "December"
          ];

          window.onload = function () {
              updateChart(currentYear, currentMonth);
          }

          function updateChart(year, month) {
              var chart = new CanvasJS.Chart("chartContainer", {
                  animationEnabled: true,
                  theme: "light2", // "light1", "light2", "dark1", "dark2"
                  title: {
                      text: "Alumni Work Status"
                  },
                  data: [{
                      type: "column",
                      showInLegend: true,
                      legendMarkerColor: "grey",
                      dataPoints: [
                          { y: 5, label: "Employed" },
                          { y: 10, label: "Not Employed" },
                      ]
                  }]
              });
              chart.render();
              document.getElementById("selectedDate").innerText = monthNames[month] + " " + year;
          }

          function previousMonth() {
              currentMonth--;
              if (currentMonth < 0) {
                  currentMonth = 11;
                  currentYear--;
              }
              updateChart(currentYear, currentMonth);
          }

          function nextMonth() {
              currentMonth++;
              if (currentMonth > 11) {
                  currentMonth = 0;
                  currentYear++;
              }
              updateChart(currentYear, currentMonth);
          }

          function updateYear(year) {
              currentYear = parseInt(year);
              updateChart(currentYear, currentMonth);
          }
    </script>
  
</body>

</html>
