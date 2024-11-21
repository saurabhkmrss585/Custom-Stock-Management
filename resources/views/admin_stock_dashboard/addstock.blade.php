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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

.revenue-amount,
.product-info {
  font-size: 24px; /* Font size for the revenue amount and product info */
  color: #4CAF50; /* Default color for revenue */
}

.product-info {
  color: #FF5722; /* Color for product info */
}

.icon {
  font-size: 58px; /* Icon size */
  margin-left: 16px; /* Add left margin for spacing */
}

/* Responsive Styles */
@media (max-width: 768px) {
  .sub-card {
    flex-direction: column; /* Stack elements vertically on smaller screens */
    align-items: flex-start; /* Align items to the start */
  }

  .icon {
    margin-left: 0; /* Remove left margin on smaller screens */
    margin-top: 8px; /* Add top margin for separation */
  }
}

    .container {
      max-width: 90%; /* Increased width */
      margin: 2rem auto;
      background-color: #ffffff; /* White background for the form container */
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333; /* Dark color for heading */
      font-weight: bolder;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #696CFF; /* Purple color for labels */
    }

    input[type="text"],
    input[type="number"],
    select {
      width: 100%; /* Full width */
      padding: 10px;
      font-size: 16px;
      border: 1px solid #f2f2f4; /* Purple border */
      border-radius: 4px;
      background-color:#f4f4f4; /* Light gray background for inputs */
      color: #333; /* Dark text for inputs */
    }

    select {
      cursor: pointer;
    }

    .form-group-inline {
      display: flex;
      justify-content: space-between;
      gap: 15px;
    }

    .form-group-inline .form-group {
      flex: 1;
    }

    .btn,.btn-reset {
      display: block;
      width: 100%; /* Full width */
      background-color: #696CFF; /* Purple button */
      color: white;
      border: none;
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px; /* Space between buttons */
    }

    .btn:hover {
      background-color: #5154fc; /* Purple button */
      color: white;
    }

    .btn-reset {
      background-color: #2B2C40; /* Red for reset button */
    }

    .btn-reset:hover {
      background-color: #030305 ;
      color: white; /* Darker red on hover */
    }

    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class=" layout-container">
        <!-- Menu -->


     @include("admin_stock_dashboard.aside")
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

       @include("admin_stock_dashboard.nav")
          <!-- / Navbar -->

          <div class="container" style=" max-width: 90%; margin: 2.5rem auto; background-color: #ffffff; padding: 20px;border-radius: 8px;  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
            <h2 style="font-weight: bolder; font-size:2.2rem ; margin-bottom: 20px;
      color: #333;" >Add Stock - Car/Bike Parts</h2>

            <form action="/store_stock" method="Post">

            @if (session('stockstatus'))
    <script>
        document.addEventListener('DOMContentLoaded',function(){
            alert("{{session('stockstatus')}}")
        })
    </script>

    @endif
                @csrf
              <!-- Product Name -->
              <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" placeholder="Enter product name" required>
              </div>

              <!-- Product Type (Car or Bike Part) -->
              <div class="form-group">
                <label for="productType">Product Type</label>
                <select id="productType" name="productType" required>
                  <option value="" disabled selected>Select type</option>
                  <option value="car">Car Part</option>
                  <option value="bike">Bike Part</option>
                </select>
              </div>

              <!-- Part Number -->
              <div class="form-group">
                <label for="partNumber">Part Number</label>
                <input type="text" id="partNumber" name="partNumber" placeholder="Enter part number" required>
              </div>

              <!-- Quantity and Price (inline fields) -->
              <div class="form-group-inline">
                <!-- Quantity -->
                <div class="form-group">
                  <label for="quantity">Quantity</label>
                  <input type="number" id="quantity" name="quantity" placeholder="Enter quantity" min="1" required>
                </div>

                <!-- Price -->
                <div class="form-group">
                  <label for="price">Price per Unit (Rs)</label>
                  <input type="number" id="price" name="price" placeholder="Enter price" min="0" required>
                </div>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn">Add Stock</button>

              <!-- Reset Button -->
              <button type="reset" class="btn-reset ">Reset Form</button>
            </form>
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
