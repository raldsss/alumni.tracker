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
    max-width: 1700px;
    margin-left: 15rem;
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
    position: fixed;
    min-width: 250px;
    max-width: 250px;
    background: #1D3C78;
    color: #fff;
    transition: all 0.3s;
    height: 24.5cm;

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
    #table td:nth-child(2),
    #table th:nth-child(3),
    #table td:nth-child(3)  {
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

    .container{
        margin-left: 25rem;
    }


    /* --------------------------------------------------------------register */

     /* form */
.content h1 {
    font-weight: bold;
    text-align: center;
}
header{
    position: relative;
    font-size: 30px;
    text-align: center;
    margin-left: 5rem;
    font-weight: 600;
    color: #333;
}
.content form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.content form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.content form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.content form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 20px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.content form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.content form button{
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px;
    margin-left: 8rem;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.content form .btnText{
    font-size: 14px;

    font-weight: 400;
}
form button:hover{
    background-color: #d4def9;
    color: #2e2e2e;
}

@media (max-width: 750px) {
    .content {
        margin-bottom: auto;
    }
    .content form{
        overflow-y: scroll;
    }
    .content form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
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
                    <div type="button" id="sidebarCollapse" >
                           {{-- class="btn btn-info" --}}
                        {{-- <i class="fas fa-align-left"></i> --}}
                    </div>
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
              </button>

              <div class="container">
                <button class="btn btn-primary mb-3 " role="button" data-toggle="modal" data-target="#addAlumniModal"><i class="fa fa-plus"></i> Add Alumni</button>
                <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size:17px;"><i class="fa-solid fa-pencil" style="margin: 5px; "></i>Compose Email</button>

                <div id="toolbar">
                    <button id="exportExcelButton" class="btn btn-success"><i class="fa-solid fa-download" style="margin: 5px;"></i>Export to Excel</button>
                </div>

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
                                <th data-field="action" data-filter-control="input">Action</th>
                                {{-- <th class="mail" data-field="mail" data-filter-control="input">Send Mail</th> --}}
                                <th data-filter-control="input">#</th>
                                <th data-filter-control="input">First Name</th>
                                <th data-filter-control="input">Middle Name</th>
                                <th data-filter-control="input">Last Name</th>
                                <th data-filter-control="input">Street Address</th>
                                <th data-filter-control="input">Barangay</th>
                                <th data-filter-control="input">City</th>
                                <th data-filter-control="input">District</th>
                                <th data-filter-control="input">Province</th>
                                <th data-filter-control="input">Region</th>
                                <th data-filter-control="input">Birth Date</th>
                                <th data-filter-control="input">Age</th>
                                <th data-filter-control="input">Gender</th>
                                <th data-filter-control="input">Nationality</th>
                                <th data-filter-control="input">Civil Status</th>
                                <th data-filter-control="input">Email</th>
                                <th data-filter-control="input">Batch #</th>
                                <th data-filter-control="input">Training Status</th>
                                <th data-filter-control="input">Scholarship</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumni as $alumnus)
                            <tr>
                                <td class="bs-checkbox"><input data-index="{{ $loop->index }}" name="btSelectItem" type="checkbox"></td>
                                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal{{ $alumnus->alumni_id }}" data-id="{{ $alumnus->alumni_id }}"><i class="fa-solid fa-pen-to-square" style="margin: 5px; font-size:15px;"></i>Edit</button></td>
                                {{-- <td class="mail-col"><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-email="{{ $alumnus->email }}"><i class="fa-solid fa-paper-plane" style="margin: 5px;"></i>Send</button></td> --}}
                                <td>{{ $alumnus->alumni_id }}</td>
                                <td>{{ $alumnus->firstName }}</td>
                                <td>{{ $alumnus->middleName }}</td>
                                <td>{{ $alumnus->lastName }}</td>
                                <td>{{ $alumnus->streetAddress }}</td>
                                <td>{{ $alumnus->barangay }}</td>
                                <td>{{ $alumnus->city }}</td>
                                <td>{{ $alumnus->district }}</td>
                                <td>{{ $alumnus->province }}</td>
                                <td>{{ $alumnus->region }}</td>
                                <td>{{ $alumnus->birthdate }}</td>
                                <td>{{ $alumnus->age }}</td>
                                <td>{{ $alumnus->sex }}</td>
                                <td>{{ $alumnus->nationality }}</td>
                                <td>{{ $alumnus->civil_status }}</td>
                                <td>{{ $alumnus->email }}</td>
                                <td>{{ $alumnus->batchNumber }}</td>
                                <td>{{ $alumnus->training_status }}</td>
                                <td>{{ $alumnus->scholarship }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>




        <div class="modal fade" id="addAlumniModal" tabindex="-1" role="dialog" aria-labelledby="addAlumniModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content content">
                    <div class="modal-header">
                        <header>Alumni Registration</header>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="container">


                    <form method="POST" action="{{ route('manageAlumni') }}">
                    @csrf
                            <div>
                                <div class="details personal">
                                    <span class="title"><b>Personal Details</b></span>
                                    <label style="    font-size: 12px;
                                    font-weight: 500;
                                    color: #2e2e2e;">Fullname</label>
                                    <div class="fields">
                                        <div class="input-field">
                                            <input type="text" id="firstName" name="firstName" required placeholder="Firstname" />
                                        </div>

                                        <div class="input-field">
                                            <input type="text" id="middleName" name="middleName" required placeholder="Middlename" />
                                        </div>

                                        <div class="input-field">
                                            <input type="text" id="lastName" name="lastName" required placeholder="Lastname, Extension Name(Jr.,Sr.)" />
                                        </div>

                                        <div class="input-field">
                                            <label for="streetAddress">Street Address</label>
                                            <input type="text" id="streetAddress" name="streetAddress" required placeholder="Number, Street" />
                                        </div>

                                        <div class="input-field">
                                            <label for="barangay">Barangay</label>
                                            <input type="text" id="barangay" name="barangay" required placeholder="Barangay Address" />
                                        </div>

                                        <div class="input-field">
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
                                        </div>

                                        <div class="input-field">
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
                                        </div>

                                        <div class="input-field">
                                            <label for="province">Province</label>
                                            <input type="text" id="complete-address" name="province" placeholder="province" value="Negros Occidental" readonly />
                                        </div>

                                        <div class="input-field">
                                            <label for="region">Region</label>
                                            <input type="text" id="complete-address" name="region" value="Region VI" readonly/>
                                        </div>

                                        <div class="input-field">
                                            <label for="birthdate">Birthdate</label>
                                            <input type="date" id="birthdate" name="birthdate" onchange="calculateAge()" />
                                        </div>

                                        <div class="input-field">
                                            <label for="age">Age</label>
                                            <input type="number" id="age" name="age" readonly/>
                                        </div>

                                        <div class="input-field">
                                            <label for="sex">Sex</label>
                                            <select id="sex" name="sex" required>
                                            <option value="">--Select--</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        </div>

                                        <div class="input-field">
                                            <label for="nationality">Nationality</label>
                                            <input type="text" id="nationality" name="nationality" required placeholder="Nationality" />
                                        </div>

                                        <div class="input-field">
                                            <label for="civil_status">Civil Status:</label>
                                            <select id="civil-status" name="civil_status" required>
                                            <option value="">--Select--</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widow/er">Widow/er</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Solo Parent">Solo Parent</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="details ID">
                                    <span class="title"><b>Identity Details</b></span>

                                    <div class="fields">
                                        <div class="input-field">
                                            <label for="email">Email Account:</label>
                                            <input type="email" id="email"  name="email" placeholder="name@example.com" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="batch-number">Batch Number:</label>
                                            <input type="number" id="batchNumber" name="batchNumber" required/>
                                        </div>

                                        <div class="input-field">
                                            <label for="training_status">Training Status:</label>
                                            <select id="training_status" name="training_status" required>
                                                <option value="">--Select--</option>
                                                <option value="Still Training">Still Training</option>
                                                <option value="Alumni">Alumni</option>
                                                <option value="Employed">Employed</option>
                                            </select>
                                        </div>

                                        <div class="input-field">
                                        <label for="scholarship">Type Of Scholarship:</label>
                                        <input type="text" id="scholarship" name="scholarship" readonly value="NFTWSP">
                                        </div>

                                    </div>

                                </div>

                                <button type="submit" class="sumbit">
                                    <span class="btnText">Submit</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        @foreach($alumni as $alumnus)
        <div class="modal fade" id="editModal{{ $alumnus->alumni_id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $alumnus->alumni_id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content content">
                    <form action="{{ route('updateAlumni') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-header">
                            <header class="modal-title" id="editModalLabel{{ $alumnus->alumni_id }}" style="text-align: center">Update Alumni Record</header>

                        </div>


                        <div class="modal-body">
                            <input type="hidden" name="alumni_id" value="{{ $alumnus->alumni_id }}">

                            <div class="details personal">
                                <span class="title"><b>Personal Details</b></span>
                                <label style="    font-size: 12px;
                                font-weight: 500;
                                color: #2e2e2e;">Fullname</label>
                                <div class="fields">
                                    <div class="input-field">
                                        <input type="text" class="form-control" id="FirstName{{ $alumnus->alumni_id }}" name="firstName" value="{{ $alumnus->firstName }}">
                                    </div>
                                    <div class="input-field">
                                        <input type="text" class="form-control" id="MiddleName{{ $alumnus->alumni_id }}" name="middleName" value="{{ $alumnus->middleName }}">
                                    </div>

                                    <div class="input-field">
                                        <input type="text" class="form-control" id="LastName{{ $alumnus->alumni_id }}" name="lastName" value="{{ $alumnus->lastName }}">
                                    </div>
                                    <div class="input-field">
                                        <label for="StreetAddress{{ $alumnus->alumni_id }}">Street Address</label>
                                        <input type="text" class="form-control" id="StreetAddress{{ $alumnus->alumni_id }}" name="streetAddress" value="{{ $alumnus->streetAddress }}">
                                    </div>

                                    <div class="input-field">
                                        <label for="Barangay{{ $alumnus->alumni_id }}">Barangay</label>
                                        <input type="text" class="form-control" id="Barangay{{ $alumnus->alumni_id }}" name="barangay" value="{{ $alumnus->barangay }}">
                                    </div>

                                    <div class="input-field">
                                        <label for="city/municipality">City/Municipality:</label>
                                        <input type="text" class="form-control" id="City{{ $alumnus->alumni_id }}" name="city" value="{{ $alumnus->city }}">

                                    </div>
                                    <div class="input-field">
                                        <label for="District{{ $alumnus->alumni_id }}">District</label>
                                        <input type="text" class="form-control" id="District{{ $alumnus->alumni_id }}" name="district" value="{{ $alumnus->district }}">

                                    </div>

                                    <div class="input-field">
                                        <label for="Province{{ $alumnus->alumni_id }}">Province</label>
                                        <input type="text" id="Province{{ $alumnus->alumni_id }}" name="province" value="{{ $alumnus->province }}"/>
                                    </div>

                                    <div class="input-field">
                                        <label for="Region{{ $alumnus->alumni_id }}">Region</label>
                                        <input type="text" id="Region{{ $alumnus->alumni_id }}" name="region" value="{{ $alumnus->region }}"/>
                                    </div>

                                    <div class="input-field">
                                        <label for="Birthdate{{ $alumnus->alumni_id }}">Birthdate</label>
                                        <input type="date"id="Birthdate{{ $alumnus->alumni_id }}" name="birthdate" value="{{ $alumnus->birthdate }}" />
                                    </div>

                                    <div class="input-field">
                                        <label for="Age{{ $alumnus->alumni_id }}">Age</label>
                                        <input type="number"  id="Age{{ $alumnus->alumni_id }}" name="age" value="{{ $alumnus->age }}"/>
                                    </div>
                                    <div class="input-field">
                                        <label for="Sex{{ $alumnus->alumni_id }}">Sex</label>
                                        <input type="text" class="form-control" id="Sex{{ $alumnus->alumni_id }}" name="sex" value="{{ $alumnus->sex }}">
                                    </div>

                                    <div class="input-field">
                                        <label for="Nationality{{ $alumnus->alumni_id }}">Nationality</label>
                                        <input type="text" d="Nationality{{ $alumnus->alumni_id }}" name="nationality" value="{{ $alumnus->nationality }}" />
                                    </div>

                                    <div class="input-field">
                                        <label for="CivilStatus{{ $alumnus->alumni_id }}">Civil Status</label>
                                        <input type="text" class="form-control" id="CivilStatus{{ $alumnus->alumni_id }}" name="civil_status" value="{{ $alumnus->civil_status }}">

                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="details ID">
                                <span class="title"><b>Identity Details</b></span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label for="Email{{ $alumnus->alumni_id }}">Email</label>
                                        <input type="email" id="Email{{ $alumnus->alumni_id }}" name="email" value="{{ $alumnus->email }}">
                                    </div>

                                    <div class="input-field">
                                        <label for="BatchNumber{{ $alumnus->alumni_id }}">Batch Number</label>
                                        <input type="number" id="BatchNumber{{ $alumnus->alumni_id }}" name="batchNumber" value="{{ $alumnus->batchNumber }}"/>
                                    </div>

                                    <div class="input-field">
                                        <label for="TrainingStatus{{ $alumnus->alumni_id }}">Training Status</label>
                                        <input type="text" class="form-control" id="TrainingStatus{{ $alumnus->alumni_id }}" name="training_status" value="{{ $alumnus->training_status }}">

                                    </div>
                                    <div class="input-field">
                                        <label for="Scholarship{{ $alumnus->alumni_id }}">Scholarship</label>
                                        <input type="text"  id="Scholarship{{ $alumnus->alumni_id }}" name="scholarship" readonly value="{{ $alumnus->scholarship }}" >
                                        </div>

                                    </div>

                                </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        @endforeach



{{-- ------------------------------------------------------------------------------------------------------------------------------------------------- --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Send Email</h1>
            </div>
            <div class="modal-body">
            <form method="post" action="{{ route('sendmail.send') }}">
                {{ csrf_field() }}


                <div class="form-group">
                    <label>Message :</label>
                    <textarea name="body" class="form-control @error('body') is-invalid @enderror" alue="{{ old('body') }}"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Send Email</button>
            </div>
        </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.3/xlsx.full.min.js"></script>
    <script>
$(function () {
    var $table = $('#table');

    $('#exportButton').click(function () {
        exportTableToPDF($table); // Assuming you have a function to export to PDF
    });

    $('#exportExcelButton').click(function () {
        console.log("Export button clicked"); // Debugging log
        exportTableToExcel($table);
    });

    // Uncheck all checkboxes on page load
    $('input[name="btSelectItem"]').prop('checked', false);

    var trBoldBlue = $("table");
    $(trBoldBlue).on("click", "tr", function () {
        $(this).toggleClass("bold-blue");
    });
});

function exportTableToExcel($table) {
    var selectedRows = $table.bootstrapTable('getSelections');

    if (selectedRows.length === 0) {
        alert('No rows selected');
        return;
    }

    // Extract headers and filter out unwanted columns
    var headers = [];
    $table.find('thead th').each(function () {
        var headerText = $(this).text().trim();
        if (headerText !== 'state' && headerText !== 'Action' && headerText !== 'Send Mail') {
            headers.push(headerText);
        }
    });

    // Extract selected rows data
    var data = selectedRows.map(function (row) {
        return headers.map(function (header) {
            var key = $table.find('th:contains("' + header + '")').data('field');
            var cellData = row[key];
            if (cellData === true) {
                cellData = '';
            }
            return cellData;
        });
    });

    // Prepare workbook
    var workbook = XLSX.utils.book_new();
    var worksheet = XLSX.utils.aoa_to_sheet([headers].concat(data));
    XLSX.utils.book_append_sheet(workbook, worksheet, "Sheet1");

    // Export workbook
    XLSX.writeFile(workbook, 'selected_table_data.xlsx');
}


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
              // Exclude "state" and "action" columns
              if (header !== 'state' && header !== 'Action') {
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
          head: [headers.filter(header => header !== 'state' && header !== 'Action')],
          body: data
      });

      doc.save('selected_table_data.pdf');
  }


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
    </script>




</body>
</html>
