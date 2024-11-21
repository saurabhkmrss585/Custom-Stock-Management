<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
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

    <title>dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <style>

    .icon-background {
        background-color: rgb(251, 203, 115); /* Orange background */
        border-radius: 20%; /* Circular background */
        width: 40px; /* Adjust width */
        height: 38px; /* Adjust height */
        display: flex; /* Flexbox for centering */
        align-items: center; /* Vertical centering */
        justify-content: center; /* Horizontal centering */

    }

    .icon-background i {
        font-size: 24px; /* Adjust icon size */
    }
    .icon2-background {
        background-color: rgb(206, 158, 245); /* Orange background */
        border-radius: 20%; /* Circular background */
        width: 40px; /* Adjust width */
        height: 38px; /* Adjust height */
        display: flex; /* Flexbox for centering */
        align-items: center; /* Vertical centering */
        justify-content: center; /* Horizontal centering */

    }

    .icon2-background i {
        font-size: 24px; /* Adjust icon size */
    }
    .cardrevenue {
  background-color: #f9f9f9; /* Light background for the card */
  border-radius: 10px; /* Rounded corners */
  padding: 20px; /* Padding inside the card */
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.sub-card {
  background-color: #ffffff; /* Card background color */
  border: 1px solid #e0e0e0; /* Light border for card separation */
  border-radius: 8px; /* Rounded corners */
  padding: 16px; /* Inner spacing for the card */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
  margin-bottom: 20px; /* Spacing between cards */
  transition: transform 0.3s; /* Smooth transition on hover */
  width: calc(48% - 10px); /* Adjust width for two-column layout */
}

.sub-card:hover {
  transform: translateY(-4px); /* Lift effect on hover */
}

.sub-card h6 {
  font-size: 18px; /* Font size for the heading */
  color: #333333; /* Darker color for the heading */
}


.tips-card {
  background-color: #ffffff; /* Light background for contrast */
   /* Border with primary color */
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Soft shadow for depth */
  padding: 20px;
  margin-top: 20px;
  transition: transform 0.3s ease; /* Add a hover effect */
}

.tips-card:hover {
  transform: translateY(-5px); /* Slight lift on hover */
}

.tips-title {
  font-size: 1.4em;
  color: #333; /* Dark text for strong contrast */
  font-weight: 700;
  margin-bottom: 15px;
  border-bottom: 2px solid #696cff; /* Underline effect */
  padding-bottom: 5px;
}

.tips-list {
  list-style: none;
  padding-left: 0;
  color: #333;
  font-size: 1.05em;
  line-height: 1.6;
}

.tips-list li {
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  color:#696cff;
}

.tips-list li::before {
  content: "✔";
  color: #696cff;
  margin-right: 10px;
  font-size: 1.2em;
}

.tips-list li:hover {
  color: #696cff;
  font-weight: 600;
}
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class=" layout-container">
        <!-- Menu -->

      @include("seller_stock_dashboard.aside")
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

        @include("seller_stock_dashboard.nav")

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-xxl-8 mb-6 order-0">
                  <div class="card">
                      <div class="d-flex align-items-start row">
                          <div class="col-sm-7">
                              <div class="card-body">
                                  <h5 style="font-size: 1.8rem ; font-weight:bold" class="card-title text-primary mb-3">Welcome, Seller! </h5>
                                  <p class="mb-6">
                                    Your vehicle parts stock management is currently in progress!<br />
                                    Please ensure that all parts are readily available for sale to meet customer demand.<br />
                                    For detailed insights, check the stock reports regularly and closely monitor your inventory levels.
                                </p>


                                  <a href="/sales_tracking" class="btn btn-sm btn-outline-primary">View Sale Overview</a>
                              </div>
                          </div>
                          <div class="col-sm-5 text-center text-sm-left">
                              <div class="card-body pb-0 px-0 px-md-6">
                                  <img
                                  src="../assets/img/illustrations/man-with-laptop.png"
                                      height="175"
                                      class="scaleX-n1-rtl"
                                      alt="Manage Vehicle Parts Stock" />
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded text-muted"></i>
                              </button>

                            </div>
                          </div>
                          <p class="mb-1" style="font-size:18px ; font-weight:500">Sales</p>
                          <h4 class="card-title mb-3 text-success" style="font-size:17px ; font-weight:500">TotalSales: {{$totalsales}}</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/wallet-info.png"
                                alt="wallet info"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded text-muted"></i>
                              </button>

                            </div>
                          </div>
                          <p class="mb-1" style="font-size:19px ; font-weight:500">Available Stock</p>
                          <h4 class="card-title mb-3 text-success" style="font-size:17px ; font-weight:500">Total Stock: {{$totalQuantity}}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<!-- Quick Inventory Tips Section -->
<div class="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6">
    <div class="tips-card">
      <h4 class="tips-title">Quick Inventory Tips</h4>
      <ul class="tips-list">
        <li>Track your inventory levels regularly to avoid stockouts.</li>
        <li>Restock high-demand products in advance to prevent delays.</li>
        <li>Label products with clear information for easier sorting and identification.</li>
        <li>Implement FIFO (First In, First Out) for better handling of perishable items.</li>
        <li>Analyze sales trends to forecast demand and maintain optimal stock.</li>
      </ul>
    </div>
  </div>
                <div class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="icon-background">
                              <i style="color: orangered;" class="bx bx-box"></i>
                          </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded text-muted"></i>
                              </button>

                            </div>
                          </div>
                          <p class="mb-1" style="font-size:19px ; font-weight:500">low Stock</p>
                          <h4 class="card-title mb-3 text-success" style="font-size:17px ; font-weight:500">low Stock: {{$totallowquantity}}</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="icon2-background">
                              <i style="color: purple;" class="bx bx-upload"></i>
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded text-muted"></i>
                              </button>

                            </div>
                          </div>
                          <p class="mb-1" style="font-size:18px ; font-weight:500">Available Parts</p>
                          <h4 class="card-title mb-3 text-success" style="font-size:17px ; font-weight:500">TotalParts: {{$totalparts}}</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mb-6">
                      <div class="card h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                          <!-- Restock Alerts Info Section -->
                          <div class="d-flex justify-content-between align-items-start">
                            <!-- Left section for restock alert info -->
                            <div class="d-flex flex-column align-items-start">
                              <div class="card-title mb-2">
                                <h5 class="text-nowrap mb-1 ">Restock Alerts</h5>
                                <span class="badge bg-label-danger">Critical Stock</span>
                              </div>
                              @if($lowStockProducts->isEmpty())
                              <p>All products have sufficient stock.</p>
                          @else

                              <!-- Stock item info -->
                              <span class="text-danger text-nowrap fw-medium">
                                <i class="bx bx-down-arrow-alt"></i> Immediate Restock Needed
                              </span>
                              @foreach ($lowStockProducts as $product )


                              <h6 class="mb-0">Item: {{$product->productName}}</h6>
                              <h6 class="text-muted">Available: {{$product->quantity }}</h6>
                              @endforeach
                            </div>
                          </div>
                          @endif
                          <!-- Button Section, aligned to the bottom -->
                          <div class="mt-3 ">
                            <a href="/low-stock-alerts1" class="btn btn-danger w-100">Urgent Restock</a>
                          </div>
                        </div>
                      </div>
                    </div>




    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
