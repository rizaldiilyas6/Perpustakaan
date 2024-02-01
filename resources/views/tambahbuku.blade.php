<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
  <style>
    .input-group-text{
      width: 120px; 
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
        </ul>
        <span class="navbar-text">
        
        </span>
      </div>
    </div>
  </nav>

<div class="container mt-3">
  <label for="textInput" class="form-label">Judul:</label>
  <input type="text" class="form-control" id="textInput" placeholder="Type something...">
</div>

<div class="container mt-3">
  <label for="textInput" class="form-label">Penulis:</label>
  <input type="text" class="form-control" id="textInput" placeholder="Type something...">
</div>

<div class="container mt-3">
  <label for="textInput" class="form-label">Penerbit:</label>
  <input type="text" class="form-control" id="textInput" placeholder="Type something...">
</div>

<div class="container mt-3">
  <label for="textInput" class="form-label">Tahun Terbit:</label>
  <input type="text" class="form-control" id="textInput" placeholder="Type something...">
</div>



    <div class="container mt-4">
      <label for="dropdownInput" class="form-label">Kategori buku:</label>
      <select class="form-select" id="dropdownInput" aria-label="Select option">
        <option selected>Select an option</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
        <option value="1">Option 1</option>
        <option value="1">Option 1</option>
      </select>
    </div>

      <div class="col mt-3">
        <center><button type="submit" name="submit" class="btn btn-primary">Simpan</button></center>
      </div>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
