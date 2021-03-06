<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template array</title>
</head>
<body>
	<h1>Template array</h1>
	<p>Esto está fuera de template</p>

  <div id="div-array"></div>

  <div>welcome to the jungle</div>
	<template id="templatesimple">
		<style>
		h1{
			color: red;
		}
		p{
			background-color: #ddd;
		}
		</style>
		<h1>Ciudades del mundo</h1>
		<template id="templateciudades">
			<p></p>
		</template>
	</template>

<script>
var ciudades = ["Madrid", "Barcelona", "Valencia"];

var template = document.querySelector('#templatesimple').content;
var p = template.querySelector("#templateciudades").content.querySelector("p");
ciudades.forEach(function(ciudad){
	var newP = p.cloneNode(true);
	newP.textContent = ciudad;
	template.appendChild(newP);
});
var clone = document.importNode(template, true);
let divArray = document.getElementById('div-array');
divArray.appendChild(clone);
</script>
</body>
</html>