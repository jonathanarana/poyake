console.log('ready');
get_all();
function get_all() {
  fetch('Lista/getAll').then(function (res) {
    return res.json();
  }).then(function (data) {
    let lista = document.getElementById('lista');
    let content='';

    data.forEach(function (item) {
      content += '<tr><td>'+item.quantity+'</td><td>'+item.description+'</td><td>'+item.price+'</td> <td> <input type="checkbox" ';
      if (item.active == 1) {
        content += ' checked ';

      }
      content += ' onchange="changeStatus('+ item.id +')" > <button type="button" onclick="deleteItem('+ item.id +')"> X </button> </td></tr>';
    });
    lista.innerHTML = content;
  })
}

function deleteItem(id) {
  console.log(id);
}

function changeStatus(id) {
  console.log(id);
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
  fetch('/Lista/create', {
    method: 'POST',
    body: datos
  }).then(response => response.json())
  .then(data => {
    console.log(data);
    get_all();
  })
});
