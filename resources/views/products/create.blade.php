<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crear Producto</title>
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
form {
  background-color: white;
  max-width: 500px;
  margin: 40px auto;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}
h2 {
  text-align: center;
  margin-bottom: 20px;
}
label {
  display: block;
  margin: 10px 0 5px;
  font-weight: bold;
}
input[type="text"],
input[type="number"],
textarea {
  width: 100%;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
}
textarea {
  resize: none;
  height: 80px;
}
button {
  background-color: #FFD814;
  border: 1px solid #FCD200;
  padding: 10px 15px;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  margin-top: 15px;
  font-size: 16px;
}
button:hover {
  background-color: #F7CA00;
}
</style>
</head>
<body>
<header>
  <h1>MiTienda</h1>
</header>

<form>
  <h2>Crear nuevo producto</h2>

  <label>Nombre del producto</label>
  <input type="text" placeholder="Ej. Audífonos Bluetooth" required>

  <label>Precio</label>
  <input type="number" placeholder="Ej. 59.99" required>

  <label>Descripción</label>
  <textarea placeholder="Escribe una descripción del producto"></textarea>

  <label>URL de la imagen</label>
  <input type="text" placeholder="https://...">

  <button type="submit">Guardar producto</button>
</form>
</body>
</html>
