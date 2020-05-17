const key = "RGAPI-44774ded-8481-4974-bb9f-a9c816618daf";

$("#region").change(function () {
  var region = $("#region option:selected").text();
  if (region != "") {
    $.ajax({
      url: `https://${region}.api.riotgames.com/lol/status/v3/shard-data?api_key=${key}`,
      method: "GET",
      success: function (result) {
        console.log(result);
        $("#info").empty();
        $.each(result.services, function (index, value) {
          $("#info").append(
            `<div id="${value.name}" style="display:none">
              <h1 class="title"></h1>
              <p style="text-transform: capitalize;">Estatus: ${value.status} <i class="fas fa-circle" style="color: green;"></i></p>
            </div>`
          );
        });
      },
      error: function(jqXHR, exception) {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = `Uncaught Error. ${jqXHR.statusText} [${jqXHR.status}]`;
        }
        toastr.error(msg);
      }
    });
  }
});

$(".statusButton").click(function (event) {
  var boton = $(event.target).val();
  if ($(`#${boton}`).length) {
    $("#info").children().hide();
    $(`#${boton}> .title`).empty().append(`${$(event.target).text()}`);
    $(`#${boton}`).show();
  }
});
