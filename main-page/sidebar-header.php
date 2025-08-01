<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../index.php");
    exit();
}

?>



<!DOCTYPE html>
<html>
  <title>Clinical Inventory Management System</title>
  <head>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="clinic/styles/general.css">
    <link rel="stylesheet" href="clinic/styles/header.css">
    <link rel="stylesheet" href="clinic/styles/sidebar.css">
    <link rel="stylesheet" href="clinic/styles/content.css">


  </head>

<body>

<div class="header">  
      
  <div class="left-section">
     <div> 
        <img class="med-logo" src="clinic/icons/med-logo.png">
      </div>
  </div>
            <div class="middle-section">
              <input class="search-bar" type="text" placeholder="Search...">
                <button class="search-button"> 
                  <img class="search-icon" src="clinic/icons/search.svg">
                  <div class="tooltip">Search</div>
                </button>
            </div>
                 
                    <h1 class="user-style">Welcome, <span><?= $_SESSION['name']; ?></span></h1>           
                      <div href="#" onclick="window.location.href='../login-register/logout.php'">
                        <a href="#" class="logout-button" onclick="window.location.href='../logout.php'">Logout</a>
                      </div> 
                      
                  
  </div>
</div>
             
 
  </div>
</div>

<!-- SIDEBAR BUTTON WITH LINK ATTACHED TO DIV -->

<div class="sidebar">
      
      <div class="sidebar-link" href="clinic/content/home.html" onclick="loadIframe('clinic/content/home.html')">
          <img class="image-expand" src="clinic/icons/home.png">
              <div>
                Home
              </div> 
              
      </div>

          <div class="sidebar-link" href="#" onclick="loadIframe('clinic/content/dashboard.html')">
              <img class="image-expand" src="clinic/icons/dashboard.png"> 
                  <div>
                    Dashboard
                  </div>
          </div>

                    <div class="sidebar-link" href="#" onclick="loadIframe('clinic/content/inventory-management.html')">
                          <img class="image-expand" src="clinic/icons/inventory-management.png">
                              <div style="text-align: center;">
                                    Inventory management
                              </div>
                    </div>

                              <div class="sidebar-link" href="#" onclick="loadIframe('clinic/content/expiry-monitor.html')">
                                    <img class="image-expand" src="clinic/icons/expiry-monitor.png">
                                        <div>
                                          Expiry Monitor
                                        </div>
                              </div>

                    <div class="sidebar-link" href="#" onclick="loadIframe('clinic/content/add-new-item.html')">
                          <img class="image-expand" src="clinic/icons/add-new-item.png">
                              <div>
                                Add New item
                              </div>
                    </div>

              <div class="sidebar-link" href="#" onclick="loadIframe('clinic/content/stock-alerts.html')">
                    <img class="image-expand" src="clinic/icons/alert.png">
                        <div>
                          Stock Alerts
                        </div>
              </div>

      <div class="sidebar-link" href="#" onclick="loadIframe('clinic/content/about-us.html')">
            <img class="image-expand" src="clinic/icons/about-us.png">
              <div>
                About Us
              </div>
      </div>
</div>

</body>

<!-- MAIN FRAME CONTENT -->

<div class="content" style="width: 90vw; height: 300vh; background-color: rgb(255, 255, 255);">

  <iframe id="mainFrame" width="100%" height="100%" style="border:1px solid rgb(63, 62, 62);"></iframe>
  <iframe id="myHome" width="100%" height="100%"></iframe>
  <!-- SOURCE OF SCRIPT -->
    <script src="clinic/scripts/mainFrame.js"></script>

   

</div>



</html>

 