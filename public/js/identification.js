const identificationForm = $("#identification");

identificationForm.on("submit", e => {
    // Don't go to the next page
    e.preventDefault();
    const data = identificationForm.serializeArray();

    $.ajax({
        url: "?r=validateLoginKey",
        method: "GET",
        data: data,
        success: (response) => {
            response = JSON.parse(response);
            console.log(response);
            if (response.valid.valid) {
                // Remove all the classes from $("#userlog") and set alert alert-success
                $("#userlog").removeClass().addClass("alert alert-success");
                $("#userlog").html(response.valid.message);
                // Enable submit button
                $("#submit").prop("disabled", false);

                // Redirect to the next page
                window.location.href = "?r=inscriptions";
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
});