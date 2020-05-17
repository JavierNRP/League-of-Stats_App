/**
 * SOLO FUNCTIONA CON EL PLUGIN ALLOW CORS 
 * Llamadas a la API necesarias
SUMMONER-V4 (Recogeremos la información del usuario introducido, es necesario el ID Account)
/lol/summoner/v4/summoners/by-name/{summonerName}

MATCH-V4 (Cogemos el ID Account del usuario insertado y cogeremos los gameId de las últimas 10 o 20 partidas jugadas)
/lol/match/v4/matchlists/by-account/{encryptedAccountId}

MATCH-V4 (Para mostrar la información de las últimas partidas jugadas y los campeones utilizados)
/lol/match/v4/matches/{matchId}

CHAMPION-MASTERY-V4 (Para recoger el total de maestría)
/lol/champion-mastery/v4/scores/by-summoner/{encryptedSummonerId} 

icono: http://ddragon.leagueoflegends.com/cdn/10.6.1/img/profileicon/685.png
*/

const key = "RGAPI-44774ded-8481-4974-bb9f-a9c816618daf";
var version = "10.7.1";
startDdragon();
$("#searchButton").click(function () {
  getBasicInfo();
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
            
        }
        toastr.error(msg);
      }
    });
  }
}

function getBasicInfo() {
  var region = $("#region option:selected").text();
  var summonerName = $("#name").val();
  $.ajax({
    url: `https://${region}.api.riotgames.com/lol/summoner/v4/summoners/by-name/${summonerName}?api_key=${key}`,
    method: "GET",
    success: function (result) {
      console.log(result);
      createSummoner(result, region, summonerName);
    },
    error: function() {
      $("#main").empty();
      $("#mastery").empty();
      $("#match").empty();
      $("#error").empty();
      $("#error").append(`<img src="/img/error_invocador.png" alt="Error en la búsqueda del invocador">`);
    },
  });
}

function createSummoner(ajaxResponse, region, summonerName) {
  $("#main").empty();
  $("#mastery").empty();
  $("#match").empty();
  var title = $(`<h1>Perfil del Invocador</h1>`);
  var summonerDiv = $(`<div class="media" id="summoner">`);
  var summonerMedia = $(`<div class="media-body">`);
  var name = $(`<h1>${ajaxResponse.name}</h1>`);
  var icon = $(`<img class="mr-3" src="http://ddragon.leagueoflegends.com/cdn/${version}/img/profileicon/${ajaxResponse.profileIconId}.png" alt="Icono de Invocador">`);
  var level = $(`<h4>Nivel ${ajaxResponse.summonerLevel}</h4>`);
  summonerMedia.append(name).append(level);
  summonerDiv.append(icon).append(summonerMedia);
  $("#main").append(title).append(summonerDiv);

  $.ajax({
    url: `https://${region}.api.riotgames.com/lol/match/v4/matchlists/by-account/${ajaxResponse.accountId}?api_key=${key}`,
    method: "GET",
    success: function (result) {
      console.log(result);
      matchlist(result, region, summonerName);
    },
    error: function() {
      $("#match").append(`<img id="errorPartidas" src="/img/error_partidas.png" alt="Este invocador no tiene partidas recientes">`);
    }
  });

  $.ajax({
    url: `https://${region}.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/${ajaxResponse.id}?api_key=${key}`,
    method: "GET",
    success: function (result) {
      console.log(result.slice(0, 3));
      getTopMasteries(result.slice(0, 3));
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

function matchlist(matchHistory, region, summonerName) {
  $("#error").empty();
  $("#match").empty();
  $("#match").append(`<h1>Últimas partidas</h1>`);
  var max = 3;
  for (var i = 0; i < max; i++) {
    var match = $(`<div class="media" id="match">`);
    var championName = idToName(matchHistory.matches[i].champion);
    var usedChamp = $(`<img class="mr-3" src="https://ddragon.leagueoflegends.com/cdn/${version}/img/champion/${championName}.png" alt="Icono de campeón. Últimas partidas">`);
    match.append(usedChamp);
    $("#match").append(match);
    advancedMatchlist(match);
  }

  function advancedMatchlist(match) {
    var matchInfo = $(`<div class="media-body" id="matchInfo">`);
    $.ajax({
      url: `https://${region}.api.riotgames.com/lol/match/v4/matches/${matchHistory.matches[i].gameId}?api_key=${key}`,
      method: "GET",
      success: function (result) {
        console.log(result);
        var modoJuego = $( `<h3>Modo de juego: <strong>${result.gameMode}</strong></h3>`);
        var duracion = $( `<h4>Duración de la partida: <strong>${secondsToHMS(result.gameDuration)}</strong></h4>`);
        var kda;
        result.participantIdentities.filter(function(value, index) {
          if (
            value.player.summonerName.toUpperCase().split(" ").join("") ===
            summonerName.toUpperCase().split(" ").join("")
          ) {
            var playerId = value.participantId;
            result.participants.filter(function (value, index) {
              if (playerId === value.participantId) {
                kda = $(
                  `<h5>KDA: <strong>${value.stats.kills}/${value.stats.deaths}/${value.stats.assists}</strong></h5>`
                );
              }
            });
          }
        });
        match.append(matchInfo.append(modoJuego).append(duracion).append(kda));
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

function getTopMasteries(masteries) {
  if (masteries.length === 0) {
    $("#mastery").empty();
    $("#mastery").append(`<img src="/img/error_maestrias.png" id="errorMaestrias" alt="Este invocador aun no tiene suficientes maestrias de campeón">`);
  } else {
    $("#mastery").empty();
    var top = 3;
    var title = $("<h1>Maestrías de campeón</h1>");
    $("#mastery").append(title);
    $.each(masteries, function (index, value) {
      var champName = idToName(value.championId);
      var champMastery = $(`<div class="media" id="champMastery">`);
      var champMedia = $(`<div class="media-body">`);
      var champIcon = $(`<img class="mr-3" src="https://ddragon.leagueoflegends.com/cdn/${version}/img/champion/${champName}.png" alt="Icono de campeón. Maestrías de campeón">`);
      var level = `<h2>Nivel: <strong>${value.championLevel}</strong></h2>`;
      var maxPoints = `<h3>Puntos: <strong>${value.championPoints}</strong></h3>`;
      var tokens = `<h4>Fragmentos de campeón: <strong>${value.tokensEarned}</strong></h4>`;
      champMedia.append(level).append(maxPoints).append(tokens);
      champMastery.append(champIcon).append(champMedia);
      $("#mastery").append(champMastery);
    });
  }
}

function idToName(id) {
  var name;
  var ddragon = JSON.parse(localStorage.getItem("ddragon"));
  $.each(ddragon.data, function (index, champ) {
    if (champ.key === id.toString()) {
      name = champ.id;
    }
  });
  return name;
}

function secondsToHMS(s) {
  var h = Math.floor(s / 3600);
  s -= h * 3600;
  var m = Math.floor(s / 60);
  s -= m * 60;
  if (h != 0) {
    return (h + "h " + (m < 10 ? "0" + m : m) + "m " + (s < 10 ? "0" + s : s) + "s");
  }
  return (m < 10 ? "0" + m : m) + "m " + (s < 10 ? "0" + s : s) + "s";
}
