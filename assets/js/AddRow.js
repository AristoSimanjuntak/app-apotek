// JavaScript Document
function addRow(tableID) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        var colCount = table.rows[0].cells.length;
        for(var i=0; i<colCount; i++) {
            var newcell = row.insertCell(i);
            newcell.innerHTML = table.rows[0].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch(newcell.childNodes[0].type) {
                case "text":
                        newcell.childNodes[0].value = "";
                        break;
                case "checkbox":
                        newcell.childNodes[0].checked = false;
                        newcell.childNodes[0].value = "";
                        break;
            }
			
        }
    }

    function addRow_0(tableID) {
        var table    = document.getElementById(tableID);
        var rowCount = table.rows.length;
        var row      = table.insertRow(rowCount);
        var colCount = table.rows[0].cells.length;
        for(var i=0; i<colCount; i++) {
            var newcell       = row.insertCell(i);
            newcell.innerHTML = table.rows[0].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch(newcell.childNodes[0].type) {
                case "text":
                        newcell.childNodes[0].value = "0";
                        break;
                case "checkbox":
                        newcell.childNodes[0].checked = false;
                        newcell.childNodes[0].value   = "0";
                         console.log(colCount);
                         console.log(child);
                        break;
            }
            
        }
    }
	
    function deleteRow(tableID)
{
        try
             {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
                for(var i=0; i<rowCount; i++)
                    {
                    var row = table.rows[i];
                    var chkbox = row.cells[0].childNodes[0];
                    if (null != chkbox && true == chkbox.checked)
                        {
                        if (rowCount <= 1)
                            {
                            alert("Tidak dapat menghapus semua baris.");
                            break;
                            }
                        table.deleteRow(i);
                        rowCount--;
                        i--;
                        }
                    }
                } catch(e)
                    {
                    alert(e);
                    }
 }
 
 function InsertRow(tableID)
{
        try
             {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
                for(var i=0; i<rowCount; i++)
                    {
                    var row = table.rows[i];
                    var chkbox = row.cells[0].childNodes[0];
                    if (null != chkbox && true == chkbox.checked)
                        {
						var newRow = table.insertRow(i+1);
						var colCount = table.rows[0].cells.length;
						for (h=0; h<colCount; h++){
							var newCell = newRow.insertCell(h);
							newCell.innerHTML = table.rows[0].cells[h].innerHTML;
							switch(newCell.childNodes[0].type) {
								case "text":
										newCell.childNodes[0].value = "";
										break;
								case "checkbox":
										newCell.childNodes[0].checked = false;
										break;
							}
						}
                        }
						
                    }
                } catch(e)
                    {
                    alert(e);
                    }
 }
