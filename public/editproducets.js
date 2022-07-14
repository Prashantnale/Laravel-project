
function producet() {
  var pro = document.getElementById('pro').value;

  axios.get(`/user/${pro}`)
    .then(function (response) {
      console.log(response.data);
      document.getElementById('qty').value = 1;
      document.getElementById('rate').value = response.data.data.p_purchess_price;
      document.getElementById('unit').value = response.data.unit.unit;
      document.getElementById('tax_p').value = response.data.p_tax.t_per;
    })
    .catch(function (error) {
      console.log(error);
    })
};

function totales() {

  var rate = document.getElementById('rate').value;
  var qty = document.getElementById('qty').value;
  var tax_p = document.getElementById('tax_p').value;
  var dis = document.getElementById('dis').value;
  var basic = rate * qty;
  var tax1 = basic * tax_p / 100;
  var totale = basic - dis + tax1;
  var dis_a = (dis * rate) / 100;

  document.getElementById('basic').value = basic;
  document.getElementById('tax').value = tax1;
  document.getElementById('totale').value = totale;
  document.getElementById('dis_a').value = dis_a;
}








//data
document.getElementById('btn').addEventListener('click', btng);
var pp;
function btng() {
  var formdata = obaject();
  console.log(formdata);
  if (pp == null) {
    insert(formdata);
  }
  else {
    updated(formdata);
    pp = null;
  }
  reset();
}


function obaject() {

  var data = {};
  data['produect_name'] = document.getElementById('pro').value;
  data['qty'] = document.getElementById('qty').value;
  data['rate'] = document.getElementById('rate').value;
  data['dis'] = document.getElementById('dis').value;
  data['unit'] = document.getElementById('unit').value;
  data['dis_a'] = document.getElementById('dis_a').value;
  data['basic'] = document.getElementById('basic').value;
  data['tax_p'] = document.getElementById('tax_p').value;
  data['tax'] = document.getElementById('tax').value;
  data['totale'] = document.getElementById('totale').value;
  return data;
}

function insert(formdata) {
  var table = document.getElementById("myTable");
  var row = table.insertRow();
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);
  var cell9 = row.insertCell(8);
  var cell10 = row.insertCell(9);
  var cell11 = row.insertCell(10);
  var cell12 = row.insertCell(11);

  cell1.innerHTML = `<input type="text" style="border: none" class="form-control" name="produect_name[]" readonly value="${formdata.produect_name}">`;

  cell2.innerHTML = `<input type="text" style="border: none" class="form-control" name="qty[]" readonly value="${formdata.qty}">`;

  cell3.innerHTML = `<input type="text" class="form-control" style="border: none" name="rate[]" readonly value="${formdata.rate}">`;

  cell4.innerHTML = `<input type="text" class="form-control" style="border: none" name="dis[]" readonly value="${formdata.dis}">`;

  cell5.innerHTML = `<input type="text" class="form-control" style="border: none" name="dis_a[]" readonly value="${formdata.dis_a}">`;

  cell6.innerHTML = `<input type="text" class="form-control" style="border: none" name="unit[]" readonly value="${formdata.unit}">`;

  cell7.innerHTML = `<input type="text" class="form-control" style="border: none" name="basic[]" readonly value="${formdata.basic}">`;

  cell8.innerHTML = `<input type="text" class="form-control" style="border: none" name="tax_p[]" readonly value="${formdata.tax_p}">`;

  cell9.innerHTML = `<input type="text" class="form-control" style="border: none" name="tax[]" readonly value="${formdata.tax}">`;

  cell10.innerHTML = `<input type="text" class="form-control" style="border: none" name="totale[]" readonly value="${formdata.totale}">`;

  cell11.innerHTML = `<a class="btn btn-success" onclick="edit(this)">Edit</a>`;
  cell12.innerHTML = `<a class="btn btn-danger" onclick='return deleted(this);'>Deleted</a>`;
}

function deleted(td) {
  if (confirm('Do you deleted')) {
    var row = td.parentElement.parentElement;
    var a = document.getElementById('myTable').deleteRow(row.rowIndex);
  }
}

function edit(td) {
  pp = td.parentElement.parentElement;
  document.getElementById('pro').value = pp.cells[0].children[0].value;
  document.getElementById('qty').value = pp.cells[1].children[0].value;
  document.getElementById('rate').value = pp.cells[2].children[0].value;
  document.getElementById('dis').value = pp.cells[3].children[0].value;
  document.getElementById('dis_a').value = pp.cells[4].children[0].value;
  document.getElementById('unit').value = pp.cells[5].children[0].value;
  document.getElementById('basic').value = pp.cells[6].children[0].value;
  document.getElementById('tax_p').value = pp.cells[7].children[0].value;
  document.getElementById('tax').value = pp.cells[8].children[0].value;
  document.getElementById('totale').value = pp.cells[9].children[0].value;
}

function updated(formdata) {
  pp.cells[0].children[0].value = formdata.produect_name;
  pp.cells[1].children[0].value = formdata.qty;
  pp.cells[2].children[0].value = formdata.rate;
  pp.cells[3].children[0].value = formdata.dis;
  pp.cells[4].children[0].value = formdata.dis_a;
  pp.cells[5].children[0].value = formdata.unit;
  pp.cells[6].children[0].value = formdata.basic;
  pp.cells[7].children[0].value = formdata.tax_p;
  pp.cells[8].children[0].value = formdata.tax;
  pp.cells[9].children[0].value = formdata.totale;

}

function reset() {
  document.getElementById('pro').value = "";
  document.getElementById('qty').value = "";
  document.getElementById('rate').value = "";
  document.getElementById('dis').value = "";
  document.getElementById('unit').value = "";
  document.getElementById('dis_a').value = "";
  document.getElementById('basic').value = "";
  document.getElementById('tax_p').value = "";
  document.getElementById('tax').value = "";
  document.getElementById('totale').value = "";
}


//axios

function edited(id,currentRow) {
   console.log(currentRow.parentElement.parentElement.remove());

  axios.get(`/editax/${id}`)
    .then(function (response) {
      console.log(response.data);
      document.getElementById('pro').value=response.data.product_name;
      document.getElementById('qty').value=response.data.qty;
      document.getElementById('rate').value=response.data.rate;
      document.getElementById('dis').value=response.data.dis_p;
      document.getElementById('unit').value=response.data.unit;
      document.getElementById('dis_a').value=response.data.dis_a;
      document.getElementById('basic').value=response.data.basic;
      document.getElementById('tax_p').value=response.data.tax_p;
      document.getElementById('tax').value=response.data.tax_a;
      document.getElementById('totale').value=response.data.totale;
      deletedax(id);
    })
    .catch(function (error) {
      console.log(error);
    });
}


function deletedax(id,currentRow){
  console.log(currentRow.parentElement.parentElement.remove());
  axios.get(`/deleteda/${id}`)
  .then(function (response) {
    console.log(response.data);
   
  })
  .catch(function (error) {
    console.log(error);
  });
}

