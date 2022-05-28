function sendPetition(clase, metode, params, callback) {
  $.ajax({
    url: "frontController",
    type: "POST",
    data: {
      class: clase,
      metode: metode,
      params: params,
    },
    success: function (r) {
      callback(r);
    },
    error: function (xhr, status) {
      console.log("hubo un error");
    },
  });
}

function parserForm(form) {
  let formulario = form.serializeArray();
  let data = {};
  for (let i = 0; i < formulario.length; i++) {
    data[formulario[i].name] = formulario[i].value;
  }
  return data
}
