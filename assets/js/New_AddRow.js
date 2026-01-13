// JavaScript Document
// function addRow(tableID) {
//   var table = document.getElementById(tableID);
//   var rowCount = table.rows.length;
//   var row = table.insertRow(rowCount);
//   var colCount = table.rows[0].cells.length;

//   for (var i = 0; i < colCount; i++) {
//     var newcell = row.insertCell(i);
//     newcell.innerHTML = table.rows[0].cells[i].innerHTML;

//     // Regenerate classes and IDs for the new cell
//     if (table.rows[0].cells[i].className) {
//       newcell.className = table.rows[0].cells[i].className;
//     }
//     if (table.rows[0].cells[i].id) {
//       newcell.id = table.rows[0].cells[i].id;
//     }

//     // Copy styles from the original cell to the new cell
//     newcell.style.cssText = table.rows[0].cells[i].style.cssText;

//     var child = newcell.children;
//     for (var i2 = 0; i2 < child.length; i2++) {
//       var test = newcell.children[i2].tagName;
//       switch (test) {
//         case "INPUT":
//           if (newcell.children[i2].type == "checkbox") {
//             newcell.children[i2].value = "";
//             newcell.children[i2].checked = false;
//           } else {
//             newcell.children[i2].value = "";
//           }
//           break;
//         case "SELECT":
//           newcell.children[i2].value = "";
//           break;
//         case "BUTTON":
//           newcell.children[i2].value = "";
//           break;
//         case "IMG":
//           newcell.children[i2].src =
//             window.location.origin +
//             "/rnd/assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/images/icons/jpg.png";
//           break;
//         default:
//           newcell.children[i2].text = "";
//           break;
//       }

//       // Copy styles from the original child element to the new child element
//       if (newcell.children[i2].style) {
//         newcell.children[i2].style.cssText =
//           table.rows[0].cells[i].children[i2].style.cssText;
//       }

//       // Regenerate classes and IDs for child elements
//       if (newcell.children[i2].className) {
//         // newcell.children[i2].className += "-" + rowCount;
//         newcell.children[i2].className;
//       }
//       if (newcell.children[i2].id) {
//         // newcell.children[i2].id += "-" + rowCount;
//         newcell.children[i2].id;
//       }
//     }
//   }
// }

function addRow(tableID) {
  var table = document.getElementById(tableID);
  var rowCount = table.rows.length;
  var row = table.insertRow(rowCount);
  var colCount = table.rows[0].cells.length;

  for (var i = 0; i < colCount; i++) {
    var newcell = row.insertCell(i);
    var originalCell = table.rows[0].cells[i];

    // Copy the inner HTML content
    newcell.innerHTML = originalCell.innerHTML;

    // Copy className, id, and inline styles
    if (originalCell.className) {
      newcell.className = originalCell.className;
    }
    if (originalCell.id) {
      newcell.id = originalCell.id;
    }
    if (originalCell.style.cssText) {
      newcell.style.cssText = originalCell.style.cssText;
    }

    // Iterate over children to copy their attributes and styles as well
    var child = newcell.children;
    for (var i2 = 0; i2 < child.length; i2++) {
      var originalChild = originalCell.children[i2];
      var newChild = child[i2];

      if (newChild.tagName) {
        switch (newChild.tagName) {
          case "INPUT":
            if (newChild.type == "checkbox") {
              newChild.checked = false;
            } else {
              newChild.value = "";
            }
            break;
          case "SELECT":
            newChild.value = "";
            break;
          case "BUTTON":
            newChild.value = "";
            break;
          case "IMG":
            newChild.src =
              window.location.origin +
              "/rnd/assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/images/icons/jpg.png";
            break;
          default:
            newChild.text = "";
            break;
        }

        // Copy className, id, and inline styles
        if (originalChild.className) {
          newChild.className = originalChild.className;
        }
        if (originalChild.id) {
          newChild.id = originalChild.id;
        }
        if (originalChild.style.cssText) {
          newChild.style.cssText = originalChild.style.cssText;
        }
      }
    }
  }
}

// $(document).ready(function () {
//   // Apply fixed column styles on initial load
//   applyFixedColumnStyles();
// });

function addRow_0(tableID) {
  var table = document.getElementById(tableID);
  var rowCount = table.rows.length;
  var row = table.insertRow(rowCount);
  var colCount = table.rows[0].cells.length;
  for (var i = 0; i < colCount; i++) {
    var newcell = row.insertCell(i);
    newcell.innerHTML = table.rows[0].cells[i].innerHTML;
    var child = newcell.children;
    for (var i2 = 0; i2 < child.length; i2++) {
      var test = newcell.children[i2].tagName;
      switch (test) {
        case "INPUT":
          if (newcell.children[i2].type == "checkbox") {
            newcell.children[i2].value = "0";
            newcell.children[i2].checked = false;
            // console.log(colCount);
            // console.log(child);
          } else {
            newcell.children[i2].value = "0";
            // console.log(colCount);
            // console.log(child);
          }
          break;
        case "SELECT":
          newcell.children[i2].value = "";
          // console.log(colCount);
          // console.log(child);
          break;
        case "BUTTON":
          newcell.children[i2].value = "";
          // console.log(colCount);
          // console.log(child);
          break;
        case "IMG":
          newcell.children[i2].src =
            window.location.origin +
            "/rnd/assets/admin-vuexy-v4.1/vuexy-html-admin/app-assets/images/icons/jpg.png";
          // newcell.children[i2].value = "";
          // console.log(colCount);
          // console.log(child);
          break;
        default:
          newcell.children[i2].text = "";
          // console.log(child);
          break;
      }
    }
  }
}

function deleteRow(tableID) {
  try {
    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
    for (var i = 0; i < rowCount; i++) {
      var row = table.rows[i];
      var chkbox = row.cells[0].childNodes[0];
      if (null != chkbox && true == chkbox.checked) {
        if (rowCount <= 1) {
          alert("Tidak dapat menghapus semua baris.");
          break;
        }
        table.deleteRow(i);
        rowCount--;
        i--;
      }
    }
  } catch (e) {
    alert(e);
  }
}

function InsertRow(tableID) {
  try {
    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
    for (var i = 0; i < rowCount; i++) {
      var row = table.rows[i];
      var chkbox = row.cells[0].childNodes[0];
      if (null != chkbox && true == chkbox.checked) {
        var newRow = table.insertRow(i + 1);
        var colCount = table.rows[0].cells.length;
        for (h = 0; h < colCount; h++) {
          var newCell = newRow.insertCell(h);
          newCell.innerHTML = table.rows[0].cells[h].innerHTML;
          var child = newCell.children;
          for (var i2 = 0; i2 < child.length; i2++) {
            var test = newCell.children[i2].tagName;
            switch (test) {
              case "INPUT":
                if (newCell.children[i2].type == "checkbox") {
                  newCell.children[i2].value = "";
                  newCell.children[i2].checked = false;
                } else {
                  newCell.children[i2].value = "";
                }
                break;
              case "SELECT":
                newCell.children[i2].value = "";
                break;
              default:
                break;
            }
          }
        }
      }
    }
  } catch (e) {
    alert(e);
  }
}
