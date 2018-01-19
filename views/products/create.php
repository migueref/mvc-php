<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>Crear producto</title>
     </head>
     <body>
          <form>
               <input type="text" id="name" placeholder="Nombre de producto">
               <input type="number" id="price" placeholder="Precio">
               <textarea id="description" placeholder="Describe el producto"></textarea>
               <button type="button" onclick="save()">Registrar</button>
          </form>

          <script type="text/javascript">
			function save() {
				var xhr = new XMLHttpRequest();
				var url = 'http://localhost/mvc-pi/controllers/ProductsController.php';
				xhr.open('POST', url, true);
                    var data = new FormData();

                    var name = document.querySelector("#name").value;
                    var price = document.querySelector("#price").value;
                    var description = document.querySelector("#description").value;
                    data.append('name', name);
                    data.append('price', price);
                    data.append('description', description);
                    data.append('action', "create");

				xhr.addEventListener('loadend', function() {
                         console.log("Petición realizada");
				});
				xhr.send(data);
			}
	  	</script>
     </body>
</html>
