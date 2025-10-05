
function confirmaAcao(url) {
	const loader2=document.getElementById('loader2');
	const iframe=document.getElementById('janela');

	loader2.style.display='block';

	iframe.onload= function(){
		loader2.style.display='none';
	}
	iframe.src=url;
}
