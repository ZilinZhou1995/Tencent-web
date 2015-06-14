window.onload = initAll;

function initAll(){
    document.getElementById('more').onclick = showOrHide;
}

function showOrHide(){
     var divContent = document.getElementById('divContenti');
        if (divContent.style.display == 'none') {
            divContent.style.display = 'block';
        }
        else{
            divContent.style.display = 'none';
        }
}