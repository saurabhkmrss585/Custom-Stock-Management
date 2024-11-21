<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>admin dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <style>
      body {
          font-family: Arial, sans-serif;
          background-color: #f8f9fa;
          padding: 20px;
      }
#st-head{
font-weight: bold;
font-size: 2.9rem;
}
      .table {
          background-color: white;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          overflow: hidden;
      }
      .table-hover tbody tr:hover {
          background-color: #f1f1f1;
      }
      .table th {
          background-color: #696CFF;
          color: white;
          text-transform: uppercase;
      }
      /* .actions button {
          margin-right: 5px;
      } */

      /* .btn-edit {
          background-color: #28a745;
          color: white;
      } */
     /* .btn-edit a {
          background-color: #28a745;
          color: white;
          padding: 5px 17px;
          border-radius:4px
      }
      .btn-delete {
          background-color: #dc3545;
          color: white;
      }
      .btn-edit a:hover {
        opacity: 0.9;
      }*/

       /* .btn-delete:hover {
          opacity: 0.9;
      } */
  </style>

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">


        <!-- Menu -->

      @include("seller_stock_dashboard.aside")
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include("seller_stock_dashboard.nav")




<!-- Navbar -->



<div class="container mt-4">
    <h2 class="my-5 text-center" id="st-head">Available Parts</h2>
    <div class="table-responsive">
        <table class="table table-hover text-center">
          <thead class="text-dark fs-4">
              <tr>
                  <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 text-white">Part ID</h6>
                  </th>
                  <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 text-white">Part Name</h6>
                  </th>
                  <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 text-white">Price</h6>
                  </th>
                  <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 text-white">Quantity</h6>
                  </th>
                  <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 text-white">Components</h6>
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($show as $s)
              <tr>
                <td class="border-bottom-0 mb-0 fw-bold">{{ $s->id }}</td>
                <td class="border-bottom-0 mb-0 fw-bold">{{ $s->part_name }}</td>
                <td class="border-bottom-0 mb-0 fw-bold">{{ $s->part_price }}</td>
                <td class="border-bottom-0 mb-0 fw-bold">{{ $s->part_quantity }}</td>
                <td class="border-bottom-0 mb-0 fw-bold">
                  @foreach (json_decode($s->products, true) as $component)
                    {{ $component['name'] }} ({{ $component['quantity'] }}),
                  @endforeach
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>


    <!-- / Layout wrapper -->












    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    {{-- <script src="../assets/js/main.js"></script> --}}

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
  </body>
</html>
