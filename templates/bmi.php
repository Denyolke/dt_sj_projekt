<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>BMI Calculator</title>
</head>
<body>
    <!--Navbar-->
    <?php
    include_once('partials/header.php');
    ?>  
<!--BMI-->
<section class ="p-5">
<div class="container w-50 pt-5">
    <h1>BMI Calculator</h1>
    Weight:
    <input
      type="number"
      class="form-control mb-2"
      placeholder="kg"
      id="input1"
    />
    Height:
    <input
      type="number"
      class="form-control mb-2"
      placeholder="cm"
      id="input2"
    />
    <button class="btn btn-outline-info w-100 mb-2" id="submit">
      Vypočítať
    </button>
    <div class="text-bg-light p-3 text-center">
      <h4>Výsledky:</h4>
      <p id="result1" class="mb-0"></p>
      <p id="result2" class="mb-0"></p>
    </div>
  </div>
  </section>
    
<script src="../js/bmi.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>
</html>