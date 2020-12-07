"use strict";
function anything() {
    const checkBox = document.getElementById("checkbox");
    var meh = document.getElementById("result");
    if (checkBox.checked == true)
    {
        //console.log(checkBox.checked);
        var inputveld = document.createElement("input");
        inputveld.id = "removeable";
        document.getElementById("result").appendChild(inputveld);
        meh.style.display = "block";
    }
    else
    {
        //meh.parentNode.removeChild(inputveld);
        //inputveld.remove();
        meh.style.display = "none";
        var removing = document.getElementById("removeable");
        removing.remove();
    }
}