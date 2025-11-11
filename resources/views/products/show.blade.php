
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detalle del Producto</title>
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
}
.container {
  display: flex;
  flex-wrap: wrap;
  background-color: white;
  margin: 30px;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}
.image-section {
  flex: 1 1 300px;
  text-align: center;
}
.image-section img {
  width: 80%;
  max-width: 350px;
  object-fit: contain;
}
.details {
  flex: 2 1 400px;
  padding: 20px;
}
.details h1 {
  font-size: 24px;
  margin-bottom: 10px;
}
.details p {
  margin: 10px 0;
}
.price {
  color: #B12704;
  font-size: 22px;
  font-weight: bold;
}
.button {
  background-color: #FFD814;
  border: 1px solid #FCD200;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}
.button:hover {
  background-color: #F7CA00;
}
</style>
</head>
<body>
<header>
  <h1>MiTienda</h1>
</header>

<div class="container">
  <div class="image-section">
    <img src="https://via.placeholder.com/350x350?text=Producto" alt="Producto">
  </div>
  <div class="details">
    <h1>Producto de ejemplo</h1>
    <p class="price">$49.99</p>
    <p>Descripción detallada del producto. Este artículo es de alta calidad, con excelente rendimiento y garantía incluida.</p>
    <ul>
      <li>Característica 1 destacada</li>
      <li>Característica 2 destacada</li>
      <li>Característica 3 destacada</li>
    </ul>
    <button class="button">Agregar al carrito</button>
  </div>
</div>
</body>
</html>
