
function changenav(id1) {
  var a = document.querySelector('.active2');
  var d = document.getElementById(id1);
  d.classList.add('active2');
  a.classList.remove('active2');

}

// document.querySelector(".addRow").addEventListener('onclick', ()=> {
//   console.log("qadama naraz ha");
//   element = document.querySelector('#addr0');
//   document.querySelector(".addtable1").append(element);
// })
function adrow(tbname) {
  let randomSelect = Math.random();
  element = `
  <tr id="${randomSelect}">
  <td><input type="text" name='name[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
  <td><input type="text" name='name[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
  <td> <input type="text" name='name[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
  <td><select class="selectpicker" style="max-width: 100% !important; width: 100%;">
          <option value="Miljødeklaration">KWH</option>
          <option value="Eldeklaration">MWH</option>
          <option value="Eldeklaration">GJ</option>
      </select></td>
  <td><input type="text" name='name[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
  <td><input type="text" name='name[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
  <td><input type="text" name='name[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
  <td><input type="text" name='name[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
  <td><input type="text" name='name[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
  <td><i class="fa fa-trash text-danger" onclick="this.parentElement.parentElement.remove();" aria-hidden="true"></i></td>
  </tr>`;
  let tbody = document.querySelector(tbname);
  let tbodyContent = tbody.innerHTML;
  tbodyContent = tbodyContent + element;
  tbody.innerHTML = tbodyContent;
}
function adrow1(tbname) {
  let element1 = document.querySelector(tbname + ' .row1');
  let ab = element1.innerHTML;
  let del = '<td><i class="fa fa-trash text-danger" onclick="this.parentElement.parentElement.remove();" aria-hidden="true"></i></td>';
  let fg = ab + del;
  let tbody = document.querySelector(tbname);
  let tbodyContent = tbody.innerHTML;
  tbodyContent = tbodyContent + fg;
  tbody.innerHTML = tbodyContent;
}
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
// $(document).ready(function(){
//   var i=4;
//  $("#add_row").click(function(){b=i-1;
//   $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
//   $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
//   i++;
// });
//  $("#delete_row").click(function(){
//    if(i>1){
//  $("#addr"+(i-1)).html('');
//  i--;
//  }
// });

// })