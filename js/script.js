
document.addEventListener('DOMContentLoaded',function(){
	const formulario=document.getElementById('formulario');
	const loader=document.getElementById('loader');
	formulario.addEventListener('submit',function(){
		loader.style.display='block';
	});
});
