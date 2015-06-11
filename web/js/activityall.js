window.onload = initAll;

function initAll(){
    document.getElementById('more').onclick = showOrHide;
}

function showOrHide(){
     var divContent = document.getElementById('divContent');
        if (divContent.style.display == 'none') {
            divContent.style.display = 'block';
        }
        else{
            divContent.style.display = 'none';
        }
}