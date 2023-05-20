window.onload = function() {
    var first = document.getElementById("first");
    var second = document.getElementById("second");

    first.style.display = "block";
    second.style.display = "none";
}

function toSecond(){
    var first = document.getElementById("first");
    var second = document.getElementById("second");

    first.style.display = "none";
    second.style.display = "block";

    var dropdown = document.getElementById("inlineFormCustomSelectPref");
    document.cookie = "type=" + dropdown.options[dropdown.selectedIndex].text;
}

function backTo1(){
    var first = document.getElementById("first");
    var second = document.getElementById("second");

    first.style.display = "block";
    second.style.display = "none";
}

$(function(){

    $("#inlineFormCustomSelectPref").change(function(){
        
        var selected = this.value;

        $.ajax({
            type: "POST",
            url: '',
            data: {'grade':selected},
            success: function(response){

            },
            error: function(){
                alert("Ошибка выполнения запроса!");
            },
        })
    });
});