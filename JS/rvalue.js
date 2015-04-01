function Clear() {
    var str1 = document.getElementById("fn").value;
    var str2 = document.getElementById("ln").value;
    document.getElementById("us").value = str1.concat(str2);
}

function updateTextInput(val) {
      document.getElementById('textInput').value=val; 
}

function updaterangeInput(val2) {
      document.getElementById('rangeInput').value=val2; 
}