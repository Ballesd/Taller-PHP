# Taller-PHP
https://github.com/Ballesd/Taller-PHP.git
integrantes: Juan Camilo Ballesteros Delgado, Danny Vasquez, Erik Palacios. La página estara basada en la venta de productos de alcohol.


Taller de PHP de un catálogo de productos. El contenido del sitio web es dinámico, lo que quiere decir que la información que se despliega se actualizará a partir de lo que se encuentre en una base de datos, por lo tanto, deben tenerse opciones para crear productos, mostrar productos, editar productos, eliminar productos.


Base de datos:
	taller-php

productos{
	*ref //Referencia del prodcuto
	foto //Foto de la botella de alcohol
	tipo //Que tipo de alcohol es
	grado //Grado de alcohol
	cantidad // cantidad del producto
	marca //marca 
	creacion //fecha de creación
	vencimiento / fecha de vencimiento
}	
Usuario{
 	id // identificación
	nombre 
	apellido
	fecha de nacimiento
	cargo //A que se dedica 	
}