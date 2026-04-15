<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CBKR</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <div class="d-flex p-2 bg-dark text-white justify-content-center">
    <div class="w-auto p-3">
      <img src="logo.png" width="200px" height="100px"></img>
    </div>
  </div>
  <div class="d-flex p-2 bg-white text-dark justify-content-center">
    <h1>Calculadora de rendimiento</h3>
  </div>
  <div class="d-flex p-3 text-white justify-content-center" style="background:#064D3B;">
  </div>
  <div class="container-sm d-flex p-2 text-white justify-content-center" style="background:#064D3B;">
    <h2>Selecciona el plan de ahorro:<h2>
  </div>
  <div class="container-sm d-flex p-4 text-white justify-content-center" style="background:#064D3B;">
    <select class="form-select form-select-lg mb-1" size="3" aria-label="size 3 select example" id="meses">
      <option selected value="1">Un mes</option>
      <option value="2">6 meses</option>
      <option value="3">12 meses</option>
    </select>
  </div>
  <div class="container-sm d-flex p-2 text-white justify-content-center" style="background:#0B3E42;">
    <h2>Tu dinero: <h2>
  </div>
  <div class="container-sm d-flex p-2 text-white justify-content-center" style="background:#0B3E42;">
    <span class="input-group-text">$</span>
    <input type="text" class="form-control" id="miDinero">
  </div>
  </div>
  <div class="container-sm d-flex p-3 text-white justify-content-center" style="background:#1BBC8F;">
    <h2>Intereses: $<h2><h2 id="ganancia"></h2>
  </div>
  <div class="container-sm d-flex p-3 text-dakr justify-content-center" style="background:#FFFFFF ;">
    <h2>Total: $<h2><h2 id="total"></h2>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="script.js" async></script>
</body>

</html>