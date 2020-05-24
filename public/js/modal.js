var modal;
var version = "10.7.1";
export function getChampModal(champ) {
  if (localStorage.getItem(`${champ}Data`) === null) {
    $.ajax({
      url: `http://ddragon.leagueoflegends.com/cdn/${version}/data/es_ES/champion/${champ}.json`,
      method: "GET",
      async: false,
      success: function(result) {
        localStorage.setItem(`${champ}Data`, JSON.stringify(result));
        createModal(JSON.parse(localStorage.getItem(`${champ}Data`)), champ);
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
    createModal(JSON.parse(localStorage.getItem(`${champ}Data`)), champ);
  }
  return modal;
}

function createModal(response, champ) {
  if (document.getElementById(`${champ}Modal`) === null) {
    var champData = response;
    modal = $(
      `<div class="modal fade" id="${champData.data[champ].id}Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">`
    );
    var b4Dialog = $(`<div class="modal-dialog" role="document">`);
    var b4Content = $(`<div class="modal-content">`);

    var b4Header = $(`<div class="modal-header">
    <img id="${champData.data[champ].id}" class="splash" src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/${champData.data[champ].id}_0.jpg" alt="Imagen de campeón">
    <h1>${champData.data[champ].name}</h1>
    <h6 class="modal-title" id="exampleModalLabel">${champData.data[champ].title}</h6>
    </div>`);

    var b4Body = $(`<div class="modal-body">`);

    var champInfo = $(`<div id="champInfo">
    <h1>Roles</h1>
    <h5>${champData.data[champ].tags}</h5>
    <h1>Historia</h1>
    ${champData.data[champ].lore}
    <h1>Habilidades</h1></div>`);

    var spells = $(`<div id="spells">`);
    var mediaList = $(`<ul class="list-unstyled">`);
    
    mediaList.append(`
      <li class="media" id="passive">
      <img class="align-self-start mr-3" src="http://ddragon.leagueoflegends.com/cdn/${version}/img/passive/${champData.data[champ].passive.image.full}" alt="Imagen de habilidad (pasiva)">
      <div class="media-body">
        <h5 class="mt-0">${champData.data[champ].passive.name} (Pasiva)</h5>
        <p>${champData.data[champ].passive.description}</p>
      </div>
      </li>
      `);

    for (var i = 0; i < 4; i++) {
      mediaList.append(`
        <li class="media" id="spell">
        <img class="align-self-start mr-3" src="http://ddragon.leagueoflegends.com/cdn/${version}/img/spell/${champData.data[champ].spells[i].id}.png" alt="Imagen de habilidad">
        <div class="media-body">
          <h5 class="mt-0">${champData.data[champ].spells[i].name}</h5>
          <p>${champData.data[champ].spells[i].description}</p>
        </div>
        </li>
      `);
    }

    spells.append(mediaList);

    var b4Footer = $(
      `<div class="modal-footer"><button type="button" class="btn" data-dismiss="modal">Cerrar</button>`
    );

    modal.append(
      b4Dialog.append(
        b4Content
          .append(b4Header)
          .append(b4Body.append(champInfo).append(spells))
          .append(b4Footer)
      )
    );
  }
}
