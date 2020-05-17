const key = "RGAPI-039b63c8-80e6-4473-a09e-8d4bd399f043";
var region = "euw1";
var version = "10.7.1";
startDdragon();
lastRevision();

$.ajax({
  url: `https://${region}.api.riotgames.com/lol/platform/v3/champion-rotations?api_key=${key}`,
  method: "GET",
  success: function (result) {
    console.log(result);
    $.each(result.freeChampionIds, function (index, value) {
      var champ = idToName(result.freeChampionIds[index]);
      $("#champs").append(`<div class="champion">
      <img src="https://ddragon.leagueoflegends.com/cdn/${version}/img/champion/${champ}.png" alt="Imagen de campeones gratuitos">
      <p>${champ}</p>
      </div>`);
    });
    $.each(result.freeChampionIdsForNewPlayers, function (index, value) {
        var champ = idToName(result.freeChampionIds[index]);
        $("#champsNoobs").append(`<div class="champion">
        <img src="https://ddragon.leagueoflegends.com/cdn/${version}/img/champion/${champ}.png" alt="Imagen de campeones gratuitos para nuevas cuentas">
        <p>${champ}</p>
        </div>`);
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

function startDdragon() {
  if (localStorage.getItem("ddragon") === null) {
    $.ajax({
      url: `http://ddragon.leagueoflegends.com/cdn/${version}/data/es_ES/champion.json`,
      method: "GET",
      success: function (result) {
        localStorage.setItem("ddragon", JSON.stringify(result));
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
}

function idToName(id) {
  var name;
  if (localStorage.getItem("ddragon") === null) {
    startDdragon();
  } else {
    var ddragon = JSON.parse(localStorage.getItem("ddragon"));
    $.each(ddragon.data, function (index, champ) {
      if (champ.key === id.toString()) {
        name = champ.id;
      }
    });
  }
  return name;
}

function lastRevision() {
  var fechaActual = new Date();
  var day = fechaActual.getDate();
  var month = fechaActual.getMonth();
  var year = fechaActual.getFullYear();

  const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  var imprimirFecha = fechaActual.toLocaleDateString('es-ES', options);

  $(`<h4>Última revisión: ${imprimirFecha}</h4>`).insertAfter("#rotacion h1");
  $(`<h4>Última revisión: ${imprimirFecha}</h4>`).insertAfter("#noobs h1");
}
