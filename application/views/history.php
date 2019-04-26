<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<? echo base_url()?>assets/css/history.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/css/slidinglink.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/css/fullpage.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
</head>
<body>
    <header>
        <div class="row">
            <nav class="navbar fixed-top">
                <a href="#" class="navbar-brand on-light">
                    Sudatama
                </a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link on-light">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link on-light">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link on-light">About</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h3>Order History</h3>
        </div>
        <div class="container">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Order</th>
                        <th>Service Type</th>
                        <th>Technician Name</th>
                        <th>Contact</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">#KMZWAY</td>
                        <td class="align-middle">Engineering</td>
                        <td class="align-middle">ONSGanji</td>
                        <td class="align-middle">082124230976</td>
                        <td class="align-middle">31/02/2020</td>
                        <td class="align-middle">Accepted</td>
                        <td class="align-middle">
                            <form action="#" method="post">
                                <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>