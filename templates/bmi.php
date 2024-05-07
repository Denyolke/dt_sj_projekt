
<body>
    <!--Navbar-->
    <?php
    include_once('partials/header.php');
    include_once('partials/head.php');
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