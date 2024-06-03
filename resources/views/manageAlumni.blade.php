<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sidebar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.3/bootstrap-table.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
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
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
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
.btn-info{
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
.title{
    margin-left: -1rem;
    font-family: poppins;
    font-size: 25px;
    font-weight: 700;
    text-align: center;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #1D3C78;
    color: #fff;
    transition: all 0.3s;

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
    color: #7386D5;
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
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}


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




        .bold-blue {
            font-weight: bold;
            color: blue;
        }

        #table {
            table-layout: fixed;
        }
        th, td{
            text-align: center;
        }

        #table th:first-child,
    #table td:first-child,
    #table th:nth-child(2),
    #table td:nth-child(2) {
        position: sticky;
        left: 0;
        z-index: 1;
        background-color: white;
    }

    #table th:nth-child(n+3),
    #table td:nth-child(n+3) {
        position: sticky;
        z-index: 0;
    }

    /* --------------------------------------------------------------register */

    .form-container {
    max-width: 550px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

/* Styles for form inputs */
.form-container input[type="text"],
.form-container input[type="email"],
.form-container input[type="number"],
.form-container select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

.form-container input.uli-1{
    width: 110px;
}
.form-container input.uli-2{
    width: 50px;
}

.form-container button {
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.form-container button:hover {
    background-color: #555;
}

/* Styles for reference ID input */
.reference-id-container {
    margin-top: 20px;
    text-align: center;
}

.reference-id-container input[type="text"] {
    width: 200px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

/* Styles for logo */
.form-logo {
    text-align: center;
    margin-bottom: 20px;
}

.form-logo img {
    max-width: 100px;
    height: auto;
}
    </style>
</head>

<body>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            timer: 1000,
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
                <li>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="list-group-item-light">
                    <a href="#">Alumni Data</a>
                </li>
            </ul>
            <footer class="footer">
                <hr>
                <div class="container-fluid">
                    <p>© 2024 System All rights reserved.</p>
                </div>
            </footer>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <div class="dropdown">
                        <button class="btns btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar">
                                <img id="prof" src="https://ps.w.org/user-avatar-reloaded/assets/icon-256x256.png?rev=2540745" alt="">
                                <span class="admin">Admin</span>
                            </div>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('accounts') }}" id="updateAccount"><i class="fas fa-user-edit"></i> Update Account</a>
                            <a class="dropdown-item" href="javascript:void(0)" onclick="confirmLogout()"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </nav>

                        <div class="container">
                            <div id="toolbar">
                                <button id="exportButton" class="btn btn-primary" value="pdf">Export PDF</button>
                            </div>
                                <button class="btn btn-primary mb-3" role="button" data-toggle="modal" data-target="#addAlumniModal"><i class="fa fa-plus"></i> Add Alumni</button>
                                <div class="table-container">
                                    <table id="table"
                                           data-toggle="table"
                                           data-search="true"
                                           data-show-export="true"
                                           data-pagination="true"
                                           data-page-list="[5, 10, 25, 50, 100, 250, 500]"
                                           data-toolbar="#toolbar"
                                           class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-filter-control="input" data-sortable="true">First Name</th>
                                                <th data-filter-control="input" data-sortable="true">Middle Name</th>
                                                <th data-filter-control="input" data-sortable="true">Last Name</th>
                                                <th data-filter-control="input" data-sortable="true">Street Address</th>
                                                <th data-filter-control="input" data-sortable="true">Barangay</th>
                                                <th data-filter-control="input" data-sortable="true">City</th>
                                                <th data-filter-control="input" data-sortable="true">District</th>
                                                <th data-filter-control="input" data-sortable="true">Province</th>
                                                <th data-filter-control="input" data-sortable="true">Region</th>
                                                <th data-filter-control="input" data-sortable="true">Birth Date</th>
                                                <th data-filter-control="input" data-sortable="true">Age</th>
                                                <th data-filter-control="input" data-sortable="true">Gender</th>
                                                <th data-filter-control="input" data-sortable="true">Nationality</th>
                                                <th data-filter-control="input" data-sortable="true">Civil Status</th>
                                                <th data-filter-control="input" data-sortable="true">Email</th>
                                                <th data-filter-control="input" data-sortable="true">Batch #</th>
                                                <th data-filter-control="input" data-sortable="true">Training Status</th>
                                                <th data-filter-control="input" data-sortable="true">Scholarship</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($alumni as $manageAlumni => $alumni)
                                            <tr>
                                                <td class="bs-checkbox"><input data-index="{{ $manageAlumni }}" name="btSelectItem" type="checkbox"></td>
                                                <td>{{ $alumni->firstName }}</td>
                                                <td>{{ $alumni->middleName }}</td>
                                                <td>{{ $alumni->lastName }}</td>
                                                <td>{{ $alumni->streetAddress }}</td>
                                                <td>{{ $alumni->barangay }}</td>
                                                <td>{{ $alumni->city }}</td>
                                                <td>{{ $alumni->district }}</td>
                                                <td>{{ $alumni->province }}</td>
                                                <td>{{ $alumni->region }}</td>
                                                <td>{{ $alumni->birthdate }}</td>
                                                <td>{{ $alumni->age }}</td>
                                                <td>{{ $alumni->sex }}</td>
                                                <td>{{ $alumni->nationality }}</td>
                                                <td>{{ $alumni->civil_status }}</td>
                                                <td>{{ $alumni->email }}</td>
                                                <td>{{ $alumni->batchNumber }}</td>
                                                <td>{{ $alumni->training_status }}</td>
                                                <td>{{ $alumni->scholarship }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal for adding alumni -->
<div class="modal fade" id="addAlumniModal" tabindex="-1" role="dialog" aria-labelledby="addAlumniModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="form-container">
                <div class="form-logo">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUfvy0V8LUipUmcU9rI_cMgv9f7c2-oB8rvvSZrZjPvQ&s" alt="Logo">
                </div>

                <h2 class="text-center">SDTP</h2>
                <h3>Alumni Registration Form</h3><hr />
                <form method="POST" action="{{ route('manageAlumni') }}">
                    @csrf
                <fieldset>
                    <h4>Personal Information</h4>
                    <label for="name"><b>Fullname:</b></label>
                    <input type="text" id="firstName" name="firstName" required placeholder="Firstname" />
                    <input type="text" id="middleName" name="middleName" required placeholder="Middlename" />
                    <input type="text" id="lastName" name="lastName" required placeholder="Lastname, Extension Name(Jr.,Sr.)" />

                    <label for="complete-address"><b>Complete Permanent Mailing Address:</b></label>
                    <input type="text" id="streetAddress" name="streetAddress" required placeholder="Number, Street" />
                    <input type="text" id="barangay" name="barangay" required placeholder="Barangay" />
                    <label for="city/municipality">City/Municipality:</label>
                    <select id="city" name="city" required>
                        <option value="">--Select--</option>
                        <option value="Binalbagan">Binalbagan</option>
                        <option value="Bago City">Bago City</option>
                        <option value="Cadiz City">Cadiz City</option>
                        <option value="Calatrava">Calatrava</option>
                        <option value="Candoni">Candoni</option>
                        <option value="Cauyan">Cauyan</option>
                        <option value="Don Salvador Benedicto">Don Salvador Benedicto</option>
                        <option value="Enrique B. Magalona">Enrique B. Magalona</option>
                        <option value="Escalante City">Escalante City</option>
                        <option value="Himamaylan City">Himamaylan City</option>
                        <option value="Hinigaran">Hinigaran</option>
                        <option value="Hinoba-an">Hinoba-an</option>
                        <option value="Ilog">Ilog</option>
                        <option value="Isabela">Isabela</option>
                        <option value="Kabankalan">Kabankalan City</option>
                        <option value="la Carlota City">La Carlota City</option>
                        <option value="La Castellana">La Castellana</option>
                        <option value="Manapla">Manapla</option>
                        <option value="Moisis Padilla">Moisis Padilla</option>
                        <option value="Murcia">Murcia</option>
                        <option value="Pontevedra">Pontevedra</option>
                        <option value="Pulupandan">Pulupandan</option>
                        <option value="Sagay">Sagay City</option>
                        <option value="San Carlos City">San Carlos City</option>
                        <option value="San Enrique">San Enrique</option>
                        <option value="Silay City">Silay City</option>
                        <option value="Sipalay">Sipalay</option>
                        <option value="Talisay">Talisay</option>
                        <option value="Toboso">Toboso</option>
                        <option value="Valladolid">Valladolid</option>
                        <option value="Victorias City">Victorias City</option>
                    </select>
                    <label for="district">District:</label>
                    <select id="district" name="district" required>
                        <option value="">--Select--</option>
                        <option value="District 1">District 1</option>
                        <option value="District 2">District 2</option>
                        <option value="District 3">District 3</option>
                        <option value="District 4">District 4</option>
                        <option value="District 5">District 5</option>
                        <option value="District 6">District 6</option>
                    </select>
                    <input type="text" id="complete-address" name="province" placeholder="province" value="Negros Occidental" readonly />
                    <input type="text" id="complete-address" name="region" value="Region VI" readonly/>
                    <label for="birthdate">Birthdate:</label>
                    <input type="date" id="birthdate" name="birthdate" onchange="calculateAge()" />
                    <br/>
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" readonly/>
                    <label for="sex">Sex:</label>
                    <select id="sex" name="sex" required>
                        <option value="">--Select--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <input type="text" id="nationality" name="nationality" required placeholder="Nationality" />
                    <label for="civil-status">Civil Status:</label>
                    <select id="civil-status" name="civil_status" required>
                        <option value="">--Select--</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow/er">Widow/er</option>
                        <option value="Separated">Separated</option>
                        <option value="Solo Parent">Solo Parent</option>
                    </select>
                    <h4>Additional Information</h4>
                    <label for="email">Email Account:</label>
                    <input type="email" id="email" name="email" placeholder="name@example.com" required>
                    <label for="batch-number">Batch Number:</label>
                    <input type="number" id="batchNumber" name="batchNumber" required/>
                    <label for="training-status">Training Status:</label>
                    <select id="training_status" name="training_status" required>
                        <option value="">--Select--</option>
                        <option value="Still Training">Still Training</option>
                        <option value="Alumni">Alumni</option>
                        <option value="Employed">Employed</option>
                    </select>
                    <label for="scholarship">Type Of Scholarship:</label>
                    <input type="text" id="scholarship" name="scholarship" readonly value="NFTWSP">
                </fieldset>
                    <button type="submit">Register</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmLogout() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You will be logged out of the system.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, logout'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('logout') }}";
            }
        })
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.3/bootstrap-table.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/5.2.0/js/tableexport.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
    <script>
          $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });



    function calculateAge() {
            var birthdate = document.getElementById("birthdate").value;
            if (birthdate) {
                var today = new Date();
                var birthDate = new Date(birthdate);
                var age = today.getFullYear() - birthDate.getFullYear();
                var monthDifference = today.getMonth() - birthDate.getMonth();

                // Adjust age if birth month hasn't occurred yet this year
                if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }

                document.getElementById("age").value = age;
            }
        }




        $(function () {
            var $table = $('#table');

            $('#exportButton').click(function () {
                exportTableToPDF($table);
            });

            // Uncheck all checkboxes on page load
            $('input[name="btSelectItem"]').prop('checked', false);

            var trBoldBlue = $("table");
            $(trBoldBlue).on("click", "tr", function () {
                $(this).toggleClass("bold-blue");
            });
        });

        function exportTableToPDF($table) {
            var { jsPDF } = window.jspdf;
            var doc = new jsPDF();

            var selectedRows = $table.bootstrapTable('getSelections');
            if (selectedRows.length === 0) {
                alert('No rows selected');
                return;
            }

            var headers = [];
            $table.find('thead th').each(function() {
                headers.push($(this).text().trim());
            });

            var data = [];
            selectedRows.forEach(function(row) {
                var rowData = [];
                headers.forEach(function(header) {
                    if (header !== 'state') {
                        var key = $table.find('th:contains("' + header + '")').data('field');
                        var cellData = row[key];
                        if (cellData === true) {
                            cellData = '';
                        }
                        rowData.push(cellData);
                    }
                });
                data.push(rowData);
            });

            doc.autoTable({
                head: [headers.filter(header => header !== 'state')],
                body: data
            });

            doc.save('selected_table_data.pdf');
        }
    </script>
</body>
</html>
