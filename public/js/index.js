const registrationForm = $("#registration");

// When some input is changed execute an anonymous function
registrationForm.on("keyup", () => {
    validateRegistrationData();
});

registrationForm.on("change", () => {
    validateRegistrationData();
});

function validateRegistrationData() {
    // Get an object with all the data from the form
    const data = registrationForm.serializeArray();
    const payment = $("[name='payment']").val();
    data.push({ name: "payment", value: payment });

    $.ajax({
        url: "?r=validateRegistrationData",
        method: "GET",
        data: data,
        success: (response) => {
            response = JSON.parse(response);
            if (response.valid.valid) {
                // Remove all the classes from $("#userlog") and set alert alert-success
                $("#userlog").removeClass().addClass("alert alert-success");
                $("#userlog").html(response.valid.message);
                // Enable submit button
                $("#submit").prop("disabled", false);
            } else {
                // Remove all the classes from $("#userlog") and set alert alert-danger
                $("#userlog").removeClass().addClass("alert alert-danger");
                $("#userlog").html(response.valid.message);
                // Disable submit button
                $("#submit").prop("disabled", true);
            }
        },
        error: (error) => {
            console.log(error);
            $("#userlog").removeClass().addClass("alert alert-danger");
            $("#userlog").html("Error a la base de dades. Contacta amb l'administrador.");
        }
    })
};


$("#cookiesDetonator").click();

$("#acceptCookies").click(() => {
    $.ajax({ url: "?r=acceptCookies" })
})