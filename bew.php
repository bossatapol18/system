<table id="myTable">
</table>
<br>
<button onclick="add_row()">+</button>
<button onclick="del_row()">-</button>
<script>
function add_row() {
    var table = document.getElementById("myTable");
    count_rows = table.getElementsByTagName("tr").length;

    var row = table.insertRow(count_rows);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);

    cell1.innerHTML = "<input type='text' name='txtA'"+count_rows+" value>";
    cell2.innerHTML = "<input type='text' name='txtB'"+count_rows+" value>";
    cell3.innerHTML = "<input type='text' name='txtB'"+count_rows+" value>";
    cell4.innerHTML = "<input type='text' name='txtB'"+count_rows+" value>";
    cell5.innerHTML = "<input type='text' name='txtB'"+count_rows+" value>";
}


function del_row(){
    var table = document.getElementById("myTable");
    count_rows = table.getElementsByTagName("tr").length;
    document.getElementById("myTable").deleteRow(count_rows-1);
}
</script>