/**
 * A JavaScript file to add functionality
 * to the signupEmployee.php form page.
 * 
 * @author JM Bell
 * @version 3/1/25 
 */


window.onload = function() {
    $("occupationDDL").onchange = occupationChanged;
}

/**
 * A function that shows or hides 
 * the 'Years of Experience' and 
 * 'Specialty' form elements depending
 * on the option chosen for the 
 * 'Occupation' form element.
 */
function occupationChanged() {
    if ($("occupationDDL").value != "Doctor") {
        $("experience").disable($("experience"));
        $("experience").hide();
        $("experiencelabel").hide();
        $("specialtyDDL").disable($("specialtyDDL"));
        $("specialtyDDL").hide();
        $("specialtylabel").hide();
    }
    else {
        $("experience").enable($("experience"));
        $("experience").show();
        $("experiencelabel").show();
        $("specialtyDDL").enable($("specialtyDDL"));
        $("specialtyDDL").show();
        $("specialtylabel").show();
    }
}