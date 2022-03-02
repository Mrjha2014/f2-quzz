// redurect on chose of test subjest redurect 
function WinOpen() {
    var url = document.test_type.selection.value
    document.location.href = url

}
// check box for rule page
function checked(e) {
    var submit = document.getElementById("btnSubmit");

    submit.classList.toggle("button-grey");
    submit.classList.toggle("button-orange");
    submit.disabled = !submit.disabled;
}

var chkBox = document.getElementById("chkBox");

chkBox.addEventListener("change", checked);