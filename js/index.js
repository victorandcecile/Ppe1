var ecran = document.getElementById('Ecran');
var bout = document.getElementById('bout');
bout.addEventListener('click', function(ev){
   ecran.style.transform = 'translateY(-29.750em)';
   ecran.style.transition = 'all 1.5s'; 
},false);    