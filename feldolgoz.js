function $(nev) {
    return document.querySelectorAll(nev);
}
function ID(nev) {
    return document.getElementById(nev);
}
function kiir() {
    var txt = "<select>";
    for (var i = 0; i < teendok.length; i++) {
        txt += "<option>" + teendok[i].ID + "</option>";
    }
    txt += "</select>";
    $("#legordulo").html(txt);
}
var teendok = [];
function be() {
    console.log($("#esemeny").val());
    $.ajax({
        type: "GET",
        url: "feldolgoz.php",
        success: function (result) {
            console.log(result);
            teendok = JSON.parse(result);
            console.log(teendok);
//            kiir();
        },
        error: function () {
            alert("Hiba az adatok betöltésekor!");
        }
    });
}