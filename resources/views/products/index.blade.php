<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tienda - Lista de productos</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #eaeded;
  margin: 0;
}
header {
  background-color: #131921;
  color: white;
  padding: 15px 30px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
header h1 {
  font-size: 22px;
}
.search-bar input {
  width: 300px;
  padding: 6px;
  border-radius: 4px;
  border: none;
}
.container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 20px;
  padding: 20px;
}
.product {
  background-color: white;
  border-radius: 6px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.2);
  padding: 15px;
  text-align: center;
  transition: 0.3s;
}
.product:hover {
  transform: scale(1.03);
}
.product img {
  width: 100%;
  height: 180px;
  object-fit: contain;
}
.product h2 {
  font-size: 16px;
  color: #007185;
  margin: 10px 0 5px;
}
.product p {
  color: #B12704;
  font-weight: bold;
  font-size: 15px;
}
.button {
  background-color: #FFD814;
  border: 1px solid #FCD200;
  padding: 8px 12px;
  border-radius: 4px;
  cursor: pointer;
}
.button:hover {
  background-color: #F7CA00;
}
</style>
</head>
<body>
<header>
  <h1>MiTienda</h1>
  <div class="search-bar">
    <input type="text" placeholder="Buscar productos...">
  </div>
</header>

<div class="container">
  <div class="product">
    <img src="https://via.placeholder.com/200x180?text=Audífonos" alt="Audífonos Bluetooth">
    <h2>Audífonos Bluetooth</h2>
    <p>$25.99</p>
    <button class="button">Ver detalles</button>
  </div>

  <div class="product">
    <img src="https://via.placeholder.com/200x180?text=Smartwatch" alt="Smartwatch Pro">
    <h2>Smartwatch Pro</h2>
    <p>$49.90</p>
    <button class="button">Ver detalles</button>
  </div>

  <div class="product">
    <img src="https://via.placeholder.com/200x180?text=Laptop" alt="Laptop X200">
    <h2>Laptop X200</h2>
    <p>$699.00</p>
    <button class="button">Ver detalles</button>
  </div>

  <div class="product">
    <img src="https://via.placeholder.com/200x180?text=Mouse+Gamer" alt="Mouse Gamer RGB">
    <h2>Mouse Gamer RGB</h2>
    <p>$29.99</p>
    <button class="button">Ver detalles</button>
  </div>

  <div class="product">
    <img src="https://via.placeholder.com/200x180?text=Teclado+Mecánico" alt="Teclado Mecánico">
    <h2>Teclado Mecánico</h2>
    <p>$59.99</p>
    <button class="button">Ver detalles</button>
  </div>
</div>

</body>
</html>
