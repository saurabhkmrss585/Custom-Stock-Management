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

    <title>Dashboard</title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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



    /* Form Container */
    .form-container {
      background-color: #ffffff;
      padding: 20px 30px;
   min-width: 80%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
      text-align: center;
      margin: 25px 25px;
    }

    /* Form Header */
    .form-container h1 {
      color: #333;
      margin-bottom: 20px;
      font-size: 33px;
      font-weight: bold;
      background-color: #5154fc ;
      color: white;
    }

    /* Form Fields */
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      color: #555;
      font-weight: bold;
      margin-bottom: 12px;
    }
    select, input[type="number"], input[type="date"] {
      width: 100%;
      padding: 8px;
      font-size: 16px;

      border: 1px solid #f2f2f4; /* Purple border */

      background-color:#f4f4f4;
      border-radius: 8px;
      transition: border-color 0.3s;
    }
    select:focus, input[type="number"]:focus, input[type="date"]:focus {
      border-color:  #5154fc ;
      outline: none;
    }

    /* Submit Button */
    .submit-btn {
      background-color: #5154fc;
      color: #ffffff;
      padding: 10px 15px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
      transition: background-color 0.3s;
    }
    .submit-btn:hover {
      background-color: #030305 ;
      color: white;
    }


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
h5{
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
    .component-form {
            margin-bottom: 15px;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        select, input {
          width: 100%; /* Full width */
      padding: 10px;
      font-size: 16px;
      border: 1px solid #f2f2f4; /* Purple border */
      border-radius: 4px;
      background-color:#f4f4f4; /* Light gray background for inputs */
      color: #333; /* Dark text for inputs */
        }

        .added-components {
            margin-top: 10px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
        }

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

            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="bx bx-menu bx-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


              <ul class="navbar-nav flex-row align-items-center ms-auto">

                </li>



                    </ul>
                  </div>
                </nav>

<!-- Navbar -->




</head>
<body>







  <div class="form-container">
    <h1>Sales Entry</h1>
    <form action="/sold_stock" method="post">
      @csrf
      <!-- Sale Date -->
      <div class="form-group">
          <label for="saleDate">Sale Date:</label>
          <input type="date" id="saleDate" name="saleDate" placeholder="select date" required>
      </div>

      <h5>Select Products</h5>
      <label for="componentSelect">Products:</label>
      <select name="product_name[]" id="componentSelect" required>
          @foreach ($stockdata as $s)
              <option value="{{ $s->productName }}" data-quantity="{{ $s->quantity }}" data-price="{{ $s->price }}">
                  {{ $s->productName }}
              </option>
          @endforeach
      </select>

      <!-- Price and Quantity -->
      <div class="form-group">
          <label for="price">Price:</label>
          <input type="number" id="price" name="product_price[]" readonly>
      </div>

      <div class="form-group">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="product_quantity[]" min="1" value="1" required>
      </div>

      <button type="button" id="addComponentBtn" class="btn">Add Products</button>

      <div class="added-components" id="addedComponentsContainer">
          <h5>Selected Products:</h5>
          <ul id="componentList"></ul>
      </div>

      <!-- Hidden input to store selected products and their quantities -->
      <input type="hidden" name="selected_products" id="selected_products" value='[]'>

      <!-- Total Amount -->
      <div class="form-group">
          <label for="totalAmount">Total Amount:</label>
          <input type="text" id="totalAmount" readonly>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="submit-btn">Complete Sale</button>
  </form>

  <script>
    const componentSelect = document.getElementById('componentSelect');
    const quantityInput = document.getElementById('quantity');
    const priceInput = document.getElementById('price');
    const componentList = document.getElementById('componentList');
    const selectedProductsInput = document.getElementById('selected_products');
    let totalAmount = 0;

    // Function to update price based on selected product
    function updatePrice() {
        const selectedOption = componentSelect.options[componentSelect.selectedIndex];
        const price = selectedOption.getAttribute('data-price');
        priceInput.value = price ? parseFloat(price).toFixed(2) : ''; // Set price to 2 decimal places
    }

    // Call updatePrice on page load to set initial price
    document.addEventListener('DOMContentLoaded', function() {
        updatePrice();
    });

    // Update price whenever product selection changes
    componentSelect.addEventListener('change', updatePrice);

    document.getElementById('addComponentBtn').addEventListener('click', function() {
        const selectedOption = componentSelect.options[componentSelect.selectedIndex];
        const selectedComponent = selectedOption.value;
        const componentQuantity = selectedOption.getAttribute('data-quantity');
        const quantityToAdd = parseInt(quantityInput.value);
        const price = parseFloat(priceInput.value);
        if (componentQuantity <= 0) {
        alert(`${selectedComponent} is out of stock and cannot be added.`);
        return;
    }
        // Check if the component is already added
        const existingComponent = Array.from(componentList.getElementsByTagName('li')).find(li => li.textContent.includes(selectedComponent));

        if (existingComponent) {
            alert('This component is already added.');
            return;
        }

        // Add to total amount
        const itemTotalPrice = price * quantityToAdd;
        totalAmount += itemTotalPrice;
        document.getElementById('totalAmount').value = totalAmount.toFixed(2);

        // Create a new list item for the selected component
        const listItem = document.createElement('li');
        listItem.textContent = `${selectedComponent} (Available: ${componentQuantity}, Quantity: ${quantityToAdd}, Price: ${itemTotalPrice.toFixed(2)})`;

        // Append the new item to the list
        componentList.appendChild(listItem);

        // Update the hidden input field with the selected components
        updateSelectedComponents(selectedComponent, quantityToAdd, price);
    });

    function updateSelectedComponents(productName, quantity, price) {
        let selectedProducts = JSON.parse(selectedProductsInput.value);
        selectedProducts.push({ name: productName, quantity: quantity, price: price });
        selectedProductsInput.value = JSON.stringify(selectedProducts);
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        flatpickr("#saleDate", {
            dateFormat: "Y-m-d",
            minDate: "today"
        });
    });
</script>



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
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
