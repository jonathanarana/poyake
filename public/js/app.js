console.log('ready');
get_all();
function get_all() {
  fetch('/?route=get-all-lista').then(function (res) {
    return res.json();
  }).then(function (data) {
    let lista = document.getElementById('lista');
    lista.innerHTML='';
    data.forEach(function (item) {
      lista.innerHTML += '<tr><td>'+item.quantity+'</td><td>'+item.description+'</td><td>'+item.price+'</td><td>'+item.active+'</td></tr>';
    });
  })
}

let submit = document.getElementById('submit');
submit.addEventListener('click',function (event) {
  event.preventDefault();
  let datos = new FormData();

  let data = document.querySelectorAll('input.input');
  data.forEach(function (item) {
    	datos.append(item.name, item.value);
  });
  datos.append('active', false);

  console.log(JSON.stringify(datos));
  fetch('/?route=add-to-list', {
    method: 'POST',
    body: datos
  }).then(response => response)
  .then(data => {
    console.log(data);
    get_all();
  })
});
