/* let myData = {}

fetch('https://wojciech00pal.github.io/json/json.json')
  .then(response => response.json())
  .then(data => ala(data));
 */

  window.addEventListener("load",function(){

    let myData = {}
  
    fetch('https://wojciech00pal.github.io/json/json.json')
    .then(response => response.json())
    .then(data => ala(data));
  });

function ala(doc){
    const a = doc
   console.log(a.length)

    
    var html ="<table>";
    html+=   "<tr><th>L.p</th><th>Imie i Nazwisko</th><th>Data od</th><th>Data do</th>"+   
    "<th>Miejsce wyjazdu</th><th>Miejsce przyjazdu</th></tr>";

      for (var j=0;j<a.length;j++)
      {
        console.log(a[j])

        html+="<tr>";
        
        html+='<th>'+a[j].lp+'</th>';  
        html+='<th>'+a[j].imie+" "+a[j].nazwisko+'</th>'; 
        html+='<th>'+a[j].data_od+'</th>'; 
        html+='<th>'+a[j].data_do+'</th>'; 
        html+='<th>'+a[j].miejsce_wyjazdu+'</th>'; 
        html+='<th>'+a[j].miejsce_przyjazdu+'</th>'; 

        html+="</tr>";
        
      }

    html+="</table>"	
    
    console.log(html);
    document.getElementById("myin").innerHTML =html;
    
 
}
