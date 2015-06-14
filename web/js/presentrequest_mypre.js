window.onload = initAll;

function initAll(){
	var array = document.getElementsByClassName("showpresent");
	for(var i=0;i < array.length; i ++) {
		array[i].onclick = initRedirect;
	}
}

function initRedirect(){
	window.parent.window.location.href = "presentdetail.php";
}