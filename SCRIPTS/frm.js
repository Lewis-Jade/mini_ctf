const menu = document.getElementById('test');
const form = document.getElementById('frm');
const exit = document.getElementById('exit');



menu.onclick = function(){

form.classList.add('frm-click')


    
}
exit.onclick = function(){


    form.classList.remove('frm-click')


    
}


