<?php
session_start();
setcookie("session_id" , "abc12rkwfeinfe", time() + 3600);
setcookie("usuario", "rad", time() + 3600);
setcookie("rol", "admin", time() + 3600);
?>

<!DOCTYPE html>
<html>
  <head>
  <title>xss</title>
  <style>
   body {
    font-family: sans-serif;
    display: flex;
    justify-content: center;
    padding-top: 80px;
    background: #f0f2f5;
   }
  .card {
    background: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadown: 0 2px 10px rgba(0,0,0,0.1);
    width: 300px;
  }

  h2 {
    margin: 0 0 1rem;
    color: #333;
  }

  input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #dddd;
    border-radius: 6px;
    box-sizing: border-box;
  }

  button {
    with: 100%;
    padding: 9px;
    background: #5f7d88;
    color: white;
    border :none;
    border-radius: 6px;
  }

  .msg {
   margin-top: 1rem;
   padding: 10px;
   background: #ede9fe;
   border-radius: 6px;
   color: #4f46e5;
  }
  </style>
  </head>
<body>
  <div class="card">
  <h2>buscá tu interés</h2>
  <form method="GET">
    <input type="text" name="nombre" placeholder="ejemplo">
    <button type="submit">buscar</button>
  </form>
  <?php if (isset($_GET['nombre'])): ?>
    <div class="msg">Resultado para: <?= $_GET['nombre'] ?>!</div>
  <?php endif; ?>
  </div>
</body>
</html>
