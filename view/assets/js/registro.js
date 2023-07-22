var id;
function create() {
  let data = `tipoDoc=${selTipoDoc.value}&identificacion=${txtIdentificacion.value}&nombre=${txtNombre.value}&apellido=${txtApellido.value}&correo=${txtCorreo.value}&password=${txtPassword.value}&direccion=${txtDireccion.value}&telefono=${txtTelefono.value}&genero=${selGenero.value}&rol=${selRol.value}`;

  axios
    .post("../controller/registro.create.php", data)
    .then(function (response) {
      console.log(response);
      cleares();
    })
    .catch(function (error) {
      console.log(error);
    });
  alert("Usuario Creado");
}

function selectRol() {
  axios
    .get("../controller/rol.read.php")
    .then(function (response) {
      let roles = "";
      response.data.forEach((element) => {
        roles += `<option value="${element.id}">${element.nombreRol}</option>`;
      });
      selRol.innerHTML = roles;
      selRolMod.innerHTML = roles;
    })
    .catch(function (error) {
      console.log(error);
    });
}

function cleares() {
  selTipoDoc.value = "";
  txtIdentificacion.value = "";
  txtNombre.value = "";
  txtApellido.value = "";
  txtCorreo.value = "";
  txtDireccion.value = "";
  txtTelefono.value = "";
  txtPassword.value = "";
}
