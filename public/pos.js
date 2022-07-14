function myFunction(id) {

    axios.get(`/posaxios/${id}`)
        .then(function (response) {
            console.log(response.data);

            var table = document.getElementById("myTable");
            var row = table.insertRow();
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            cell1.innerHTML += `<input type="hidden" class="form-control" name="p_name[]" style="border: none"  readonly value="${response.data.p_id}"><p>${response.data.p_name}</p>`;
            cell2.innerHTML += `
                              <div class="input-group input-group-sm mb-3">
                              <a class="input-group-text m" onclick="mmm(this);"><i class="fa-solid fa-circle-minus"></i></a>
                              <input type="text" class="form-control text-center inpc" name="qty[]" style="border: none"  readonly value="1">
                              <a class="input-group-text p" onclick="add(this);"><i class="fa-solid fa-circle-plus"></i></a>
                              </div>`;

            cell3.innerHTML += `<input type="text" class="form-control" name="price[]" style="border: none"  readonly value="${response.data.p_sales_price}">`;
            cell4.innerHTML += `<input type="text" class="form-control pp" name="subtotal[]" style="border: none"  readonly value="${response.data.p_sales_price}">`;
            cell5.innerHTML += `<a class="btn btn-danger" onclick="remove(this);">Remove</a>`;
            addition();
        })
        .catch(function (error) {
            console.log(error);
        });

}

function remove(td){
    td.parentElement.parentElement.remove();
    addition();
}


function addition(){
   var price=document.getElementsByClassName('pp');
    var ss=0;
    for(var i=0;i<price.length;i++){
        ss=Number(ss)+Number(price[i].value);
       document.getElementById('price').value=ss;
    }
    oncpp();
}

//addition multiply

function add(td){
    td.parentElement.parentElement.children[0].children[1].value =  Number(td.parentElement.parentElement.children[0].children[1].value) + Number(1);

    var subtotal=Number(td.parentElement.parentElement.children[0].children[1].value)*Number(td.parentElement.parentElement.parentElement.children[2].children[0].value);

  td.parentElement.parentElement.parentElement.children[3].children[0].value=subtotal;
  addition();
}

function mmm(td){
    var xx=td.parentElement.parentElement.children[0].children[1].value;
    
    if(xx>0){
    td.parentElement.parentElement.children[0].children[1].value =  Number(td.parentElement.parentElement.children[0].children[1].value) - Number(1);

    var subtotal=Number(td.parentElement.parentElement.children[0].children[1].value)*Number(td.parentElement.parentElement.parentElement.children[2].children[0].value);

    td.parentElement.parentElement.parentElement.children[3].children[0].value=subtotal;
    addition();
    }
}

function oncpp(){
    var ps=document.getElementById('price');
    var pp=document.getElementById('dis');
    var pa=document.getElementById('dis_amt');
    var a=(ps.value*pp.value)/100;
    pa.value=a.toFixed(0);
    
   var total=ps.value-a;
   document.getElementById('totale').value=total.toFixed(0);
   document.getElementById('tot').value=total.toFixed(0);
   var online=document.getElementById('online');
   var cash=document.getElementById('cash');
      var tot=total-online.value;
      var old=tot-cash.value;
    var pa=document.getElementById('old').value=old.toFixed(0);

}
