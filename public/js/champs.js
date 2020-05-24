import * as Modal from "./modal.js";
var version = "10.7.1";
startDdragon();

/**
 * Recibe y envía información a otra función que se encargará de visializar los datos.
 * @param {*} ddragonResponse
 * respuesta AJAX, la información puede llegar en forma de array o de json
 */
function loadChamps(ddragonResponse) {
  var allChamps = ddragonResponse;
  if (Array.isArray(allChamps)) {
    createChamp(allChamps);
  } else {
    createChamp(allChamps.data);
  }
}

/**
 *  Visualiza a todos los campeones disponibles.
 * @param {*} allChamps
 * respuesta AJAX
 */
function createChamp(allChamps) {
  var mainChamps = $("#champs");
  $.each(allChamps, function (index, value) {
    var champion = $(`<div class="champion" data-toggle="modal" data-target="#${value.id}Modal"></div>`);
    champion.append(`<img id="${value.id}" src="https://ddragon.leagueoflegends.com/cdn/${version}/img/champion/${value.image.full}" alt="Imagen de campeón">`);
    champion.append(`<p id="name">${value.name}</p>`);
    mainChamps.append(champion);
  });

  $("img").click(function (event) {
    var modal = Modal.getChampModal(event.target.id);
    var selected = $(event.target).parent();
    selected.append(modal);
  });
}

/**
 * Obtiene un json con información general de todos los campeones y lo convierte a string para poder guardarlo en localStorage.
 */
function startDdragon() {
  if (localStorage.getItem("ddragon") === null) {
    $.ajax({
      url: `http://ddragon.leagueoflegends.com/cdn/${version}/data/es_ES/champion.json`,
      method: "GET",
      success: function (result) {
        localStorage.setItem("ddragon", JSON.stringify(result));
        loadChamps(JSON.parse(localStorage.getItem("ddragon")));
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
  } else {
    loadChamps(JSON.parse(localStorage.getItem("ddragon")));
  }
}

$("button").click(function (event) {
  if (localStorage.getItem("ddragon") === null) {
    startDdragon();
  }
  var filtro = event.target.id;
  var unfilteredData = JSON.parse(localStorage.getItem("ddragon"));
  var filteredData = [];

  $.each(unfilteredData.data, function (index, value) {
    if (unfilteredData.data[index].tags.find((element) => element === filtro)) {
      filteredData.push(value);
    }
  });

  $("#champs").empty();
  if (filtro === "all") {
    loadChamps(unfilteredData);
  } else {
    loadChamps(filteredData);
  }
});

$("#buscarChamp").keyup(function () {
  if (localStorage.getItem("ddragon") === null) {
    startDdragon();
  }
  var userInput = this.value;
  var unfilteredData2 = JSON.parse(localStorage.getItem("ddragon"));
  var filteredData2 = [];
  $.each(unfilteredData2.data, function (index, value) {
    if (index.includes(userInput)) {
      filteredData2.push(value);
    }
  });
  $("#champs").empty();
  loadChamps(filteredData2);
});
