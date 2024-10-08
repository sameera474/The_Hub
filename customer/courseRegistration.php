<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Initial Registration</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>
<style>
    /* General Style */
body {
  font-family: 'Open Sans', sans-serif;
  color: #444444;

  background-color: #f8f9fa;
}

h2, h3 {
  color:#444444;
  margin-bottom: 20px;
}
.container1 {
    background-color: #fff;
    padding: 20px;
    margin: 0 auto;
    max-width: 800px;
    border-radius: 8px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

/* Form */
form {
  background-color: white;
  padding: 30px;
  margin: 20px 0;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
form h4 {
    margin-top: 30px;
    margin-bottom: 20px;
    font-size: 20px;
    color: #006fbe;
}

form label {
 
  display: block;
  margin-top: 15px;
  color: #444444;
}

form input, form select, form textarea {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

form input[type="text"], 
form input[type="date"],
form input[type="number"], 
form textarea {
  font-size: 16px;
  padding: 10px;
}

form button[type="submit"] {
  background-color: #006fbe;
  color: white;
  font-size: 16px;
  padding: 12px;
  margin-top: 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

form button[type="submit"]:hover {
  background-color: #008df1;
}



    </style>
<body>


<?php include 'header.php'; ?>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Course Registration</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Course Registration</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  <div class="container1">
    
    <form action="/submit_registration" method="post">

      <!-- Course Resigtration -->
    
      <h4>Fill the Course Details</h4>
      <label for="course_title">Course Title:</label>
      <input type="text" id="courseName" name="course_name" placeholder="Course Name: Mathematics, English, IT" required />

      <label for="course_id">Course Identification Number (Course ID):</label>
      <input type="number" id="course_id" placeholder="ID_1" name="course_id" required />

      <label for="course_start_date">Course Strat Date:</label>
      <input type="date" id="course_start_date" name="course_start_date" required />

      <label for="course_end_date">Course End Date:</label>
      <input type="date" id="course_end_date" name="course_end_date" required />

      <label for="brief_course_description">Course Description in Brief:</label>
      <textarea id="brief_course_description" name="brief_course_description" placeholder="Course Details in brief for Overview page" rows="1" maxlength="100"></textarea>

      <label for="course_description">Course Description:</label>
      <textarea id="course_description" name="course_description" rows="5" ></textarea>

      <label for="course_amount">Course Amount:</label>
      <input type="number" id="course_amount" name="course_amount" placeholder="Enter course amount" step="0.01" min="0">
      
      <label for="currency">Currency:</label>
      <select id="currency" name="currency">
        <option value="USD">$ (USD)</option>
        <option value="EUR">€ (Euro)</option>
        <option value="LKR">LKR (Sri Lankan Rupee)</option>
      </select>

      <label for="study_places">No of Study Places:</label>
      <input type="number" id="places" name="places" placeholder="student count" required />

      <label for="course_dashboard_image">Upload Course Dashboard Image:</label>
      <input type="file" id="course_dashboard_image" name="course_dashboard_image" accept="image/*">

      <!-- Submit Button -->
      <button type="submit">Submit Registration</button>

    </form>
  </div>
   
  <?php include 'footer.php'; ?>
    
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
    
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
    

</body>

</html>
