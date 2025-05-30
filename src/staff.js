/**
 * A JavaScript file that populate the 
 * Staff page with the current doctors 
 * at the hospital along with various
 * information about each doctor
 * 
 * @author JM Bell
 * @version 3/2/25
 */

window.onload = function() {
    new Ajax.Request(
        "https://webhome.auburn.edu/~jmb0288/FinalProject(WD2)/doctors_json.php",
        {
            method: "get",
            onSuccess: showDoctors,
            onFailure: ajaxFailed
        }
    );
}

/**
 * A function that returns the doctors 
 * information from the Ajax request as
 * HTML elements to display to the user
 */
function showDoctors(ajax) {
    var data = JSON.parse(ajax.responseText);
    for (let i = 0; i < data.length; i++) {
        var doctor = data[i];
        var firstName = doctor.First_Name;
        var lastname = doctor.Last_Name;
        var experience = doctor.Years_Of_Experience;
        var specialty = doctor.Specialty;
        var h2 = document.createElement("h2");
        h2.innerHTML = "Dr. " + firstName + " " + lastname;
        $("Doctors").appendChild(h2);
        var p = document.createElement("p");
        p.innerHTML = experience + " Years of Experience<br />" +
                    "Specialty: " + specialty;
        $("Doctors").appendChild(p);
      }
      
}

/**
 * A function that is called in case
 * an ajax request failes.
 * 
 * @param {string} ajax - request to fetch baby name ranks
 */
function ajaxFailed(ajax) {
    var errorMsg = "Error Retrieving Data: " + ajax.responseText +
    "Server status: " + ajax.status + "Status text: " + ajax.statusText;
    $("errors").innerHTML = errorMsg;
}
