<script>
function movetoNext(current, nextFieldID) {
    if (current.value.length >= current.maxLength) {
        document.getElementById(nextFieldID).focus();
    }
}

function selectPhone(type) {
    var usnumber = document.getElementById("usnumber");
    var internumber = document.getElementById("internumber");
    if (type == "inter") {
        usnumber.style.display = "none";
        internumber.style.display = "grid";
    }
    if (type == "us") {
        usnumber.style.display = "grid";
        internumber.style.display = "none";
    }
}


function validate() {
    $("#btnconfirm").attr("disabled", true);
    $("#swapconfirm").submit();
}
</script>