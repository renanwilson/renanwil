/* AJAX */


function buscaDados(){

// variavel com o nome pesquisado
var nome = document.getElementById("buscar").value;

//Armazena as informações a ser exibida
var result = document.getElementById("dados");;


var ajax  = new XMLHttpRequest();


ajax.open("GET", "acao.php?buscar="+nome,true);

ajax.onreadystatechange = function(){

		// 4: request finished and response is ready
		if(ajax.readyState == 4) {

			if(ajax.status ==200){
				result.innerHTML = ajax.responseText;
			}

		
		else{
			result.innerHTML = "OCORREU UM ERRO "+ ajax.statusText;
		}

	}
};


//Enviar os dados 
		ajax.send(null);

}





