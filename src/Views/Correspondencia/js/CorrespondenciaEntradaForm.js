// VARIABLES DE CONTROL DATOS Y PAGINACIÓN
let allData = [];
let currentPage = 1;
const perPage = 15;

function FetchObtenerCorrespondencia() {
  fetch('./src/Models/Correspondencia/ObtenerCorrespondencia.php')
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        allData = data.data;
        renderTable(currentPage);
        setupPagination(allData.length, currentPage);
      }
    })
    .catch(error => console.error('Error:', error));
}

// ACTUALIZAR LOS REGISTROS DE CORRESPONDENCIA CADA 10 SEGUNDOS
setInterval(FetchObtenerCorrespondencia, 10000)

// FUNCIONES PARA PAGINACIÓN 
function renderTable(page) {
  const start = (page - 1) * perPage;
  const end = start + perPage;
  const tbody = document.getElementById('tbodyCorrespondencia');
  tbody.innerHTML = allData.slice(start, end).map(item => `
                      <tr>
                          <td>${item.PK_IDCorrespondenciaEntrada}</td>
                          <td>${item.Folio}</td>
                          <td>${item.TipoSolicitud}</td>
                          <td>${item.FechaCaptura}</td>
                          <td>${item.NombreRemitente}</td>
                          <td class="${item.EstadoSolicitud === 'EN PROCESO' ? 'text-warning'
      : item.EstadoSolicitud === 'ATENDIDO' ? 'text-success'
        : item.EstadoSolicitud === 'CANCELADO' ? 'text-danger' : ''}">
                                  ${item.EstadoSolicitud}
                          </td>
                          <td>
                          <a href="/AtencionCiudadana/src/Views/Correspondencia/CorrespondenciaEntradaConsultar.php?IDSolicitud=${item.PK_IDCorrespondenciaEntrada}" target="_blank" class="btn btn-success">Ver</a>
                          <button class="btn btn-warning" onclick="EstadoCorrespondencia(${item.PK_IDCorrespondenciaEntrada})">Estado</button>
                          </td>
                      </tr>
                  `).join('');
}

function setupPagination(totalItems, currentPage) {
  const pagination = document.getElementById('pagination');
  pagination.innerHTML = '';
  const totalPages = Math.ceil(totalItems / perPage);
  const maxVisiblePages = 3;

  pagination.appendChild(createPageItem('prev', 'Anterior', currentPage === 1));

  let startPage = Math.max(currentPage - 1, 1);
  let endPage = Math.min(currentPage + 1, totalPages);

  if (startPage > 1) {
    pagination.appendChild(createPageItem(1));
    if (startPage > 2) pagination.appendChild(createEllipsis());
  }

  for (let i = startPage; i <= endPage; i++) {
    pagination.appendChild(createPageItem(i, i, i === currentPage));
  }

  if (endPage < totalPages) {
    if (endPage < totalPages - 1) pagination.appendChild(createEllipsis());
    pagination.appendChild(createPageItem(totalPages));
  }

  pagination.appendChild(createPageItem('next', 'Siguiente', currentPage === totalPages));
}

function createPageItem(action, text = null, disabled = false) {
  const li = document.createElement('li');
  li.className = `page-item ${disabled ? 'disabled' : ''} ${typeof action === 'number' ? (action === currentPage ? 'active' : '') : ''}`;
  li.innerHTML = `<a class="page-link" href="#" data-page="${action}">${text || action}</a>`;
  return li;
}

function createEllipsis() {
  const li = document.createElement('li');
  li.className = 'page-item disabled';
  li.innerHTML = '<span class="page-link">...</span>';
  return li;
}

// INICIALICIÓN DE DOCUMENTO
document.addEventListener('DOMContentLoaded', function () {
  FetchObtenerCorrespondencia();
  document.getElementById('pagination').addEventListener('click', function (e) {
    const target = e.target.closest('a.page-link');

    if (!target) return; // Si no hay target, salimos de la función

    e.preventDefault();

    const action = target.dataset.page;
    const totalPages = Math.ceil(allData.length / perPage);

    if (action === 'prev' && currentPage > 1) currentPage--;
    else if (action === 'next' && currentPage < totalPages) currentPage++;
    else if (!isNaN(action)) currentPage = parseInt(action);

    renderTable(currentPage);
    setupPagination(allData.length, currentPage);
  });
});

// DEPENDIENDO LA SELECCION EL FOLIO SE GENERA CON LAS SIGLAS
document.getElementById('tipoSolicitud').addEventListener('change', function () {
  // Generar folio (tu código existente)
  const prefijos = {
    'Oficialia_Partes': 'OPA',
    'Formato': 'FOR',
    'Correo_Electrónico': 'CRE',
    'SUAC': 'SUAC',
    'Interno': 'INT'
  };
  const añoActual = new Date().getFullYear();
  const numeroAleatorio = Math.floor(1000 + Math.random() * 9000);
  const folio = document.getElementById('folio');
  folio.value = `${prefijos[this.value]}-${añoActual}-${numeroAleatorio}`;

  // Controlar el campo Área
  const areaSelect = document.getElementById('areaSelect');
  const areaInput = document.getElementById('areaInput');
  // Campo SUAC
  const campoTipoSuac = document.getElementById('CampoTipoSuac');
  const selectTipoSuac = document.getElementById('tipoSuac');

  // Reiniciar valores al cambiar el tipo de solicitud
  areaSelect.value = "";
  areaInput.value = "";
  selectTipoSuac.value = ""

  if (this.value === 'SUAC') {
    campoTipoSuac.style.display = 'block';
    campoTipoSuac.disabled = false;
    selectTipoSuac.required = true;
  } else {
    campoTipoSuac.style.display = 'none';
    campoTipoSuac.disabled = true;
    campoTipoSuac.required = false;
  }
  if (this.value === 'Interno') {
    areaSelect.style.display = 'block';
    areaInput.style.display = 'none';
    areaInput.disabled = true;
    areaSelect.disabled = false;
    areaSelect.required = true;
    areaInput.required = false;
  } else {
    areaSelect.style.display = 'none';
    areaInput.style.display = 'block';
    areaSelect.disabled = true;
    areaInput.disabled = false;
    areaSelect.required = false;
    areaInput.required = true;
  }
});

//VALIDACIÓN DE FORMULARIO CON BOOTSTRAP
(() => {
  "use strict";

  const forms = document.querySelectorAll(".needs-validation");

  Array.from(forms).forEach((form) => {
    form.addEventListener("submit", (event) => {
      const alertaError = document.getElementById("alertaError");

      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
        alertaError.classList.remove("d-none"); // Mostrar la alerta
      } else {
        alertaError.classList.add("d-none"); // Ocultar la alerta si todo está correcto
      }

      form.classList.add("was-validated");
    }, false);
  });
})();

//ENVIÓ FORMULARIO DE ALTA DE SOLICITUD
document.getElementById('formAltaSolicitud').addEventListener('submit', async (event) => {
  event.preventDefault();

  const form = event.target;
  const alertaError = document.getElementById("alertaError");

  if (!form.checkValidity()) {
    form.classList.add('was-validated');
    alertaError.classList.remove("d-none"); // Mostrar la alerta si hay error
    return;
  } else {
    alertaError.classList.add("d-none"); // Ocultar la alerta si está correcto
  }

  const formData = new FormData(form);

  try {
    const response = await fetch('/AtencionCiudadana/src/Models/Correspondencia/InsertarCorrespondencia.php', {
      method: 'POST',
      body: formData
    });

    const result = await response.json();

    if (response.ok) {
      form.classList.remove('was-validated'); // Quitar las validaciones de Bootstrap
      // alert('Datos enviados correctamente');
      alertaError.classList.add("d-none"); // Ocultar la alerta si el envío fue exitoso
      Swal.fire({
        title: "¡Éxito!",
        text: "Datos de correspondencia registrados exitosamente.",
        icon: "success",
        timer: 3000, // Duración en milisegundos (3 segundos)
        showConfirmButton: false, // No mostrar botón de aceptar
      }).then(() => {
        location.reload(); // Recarga la página cuando se cierre el alerta
      });

      form.reset();
      // FetchObtenerCorrespondencia();
    } else {
      alert(`Error: ${result.message}`);
    }
  } catch (error) {
    console.error('Error al enviar el formulario:', error);
    alert('Ocurrió un error inesperado.');
  }
});

//MODAL ESTADO DE LA SOLICITUD
function EstadoCorrespondencia(id) {
  fetch(`/AtencionCiudadana/src/Models/Correspondencia/ObtenerCorrespondenciaEstado.php?IDSolicitud=${id}`)
    .then((response) => response.json())
    .then((data) => {
      if (!data.success) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: data.error || "Error desconocido",
        });
      } else {
        mostrarDatos(data.data); // Se asegura de pasar solo los datos
      }
    })
    .catch((error) => {
      Swal.fire({
        icon: "error",
        title: "Error de conexión",
        text: error.message,
      });
    });

    function mostrarDatos(correspondencia) {
      const { PK_IDCorrespondenciaEntrada, EstadoSolicitud, OficioAtencion } = correspondencia;
      ObtenerCorrespondenciaDetalles(PK_IDCorrespondenciaEntrada);
    let ModalContentEstado = `
     <div class="card mb-3">
            <div class="card-body" id="contenidoDetalle">
                <!-- Aquí se mostrarán los datos dinámicamente -->
            </div>
      </div>
        <form id="CorrespondenciaEstadoForm" class="needs-validation" enctype="multipart/form-data">
          <label for="IDCorrespondencia" class="form-label" style="display:none;">ID Servicio:</label>
          <input type="text" class="form-control text-center" style="display:none;" id="IDCorrespondencia" name="IDCorrespondencia" value="${PK_IDCorrespondenciaEntrada}" readonly>
          
          <div class="row justify-content-center text-center">
            <div class="col-md-6">
              <label for="estadoSolicitud" class="form-label">Estado de Solicitud:</label>
              <select class="form-select text-center" id="estadoSolicitud" name="EstadoSolicitud" required>
              <option selected disabled value="">Elige una opción</option>
              <option value="EN PROCESO" disabled ${EstadoSolicitud === "EN PROCESO" ? "selected" : ""
              }>EN PROCESO</option>
              <option value="ATENDIDO" ${EstadoSolicitud === "ATENDIDO" ? "selected" : ""
              }>ATENDIDO</option>
              <option value="CANCELADO" ${EstadoSolicitud === "CANCELADO" ? "selected" : ""
              }>CANCELADO</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="soporteDocumental">Soporte Documental:</label>
                ${OficioAtencion
                ? `<br><a href="/AtencionCiudadana/src/Models/Correspondencia/${OficioAtencion}" target="_blank" class="btn btn-link">Ver documento</a>`
                : `<input type="file" class="form-control" id="soporteDocumental" name="soporteDocumental" required>`
              }
            </div>
          </div>
          </form>
    `;
    // Mostrar contenido en el modal
    document.getElementById("resultadoModal").innerHTML = ModalContentEstado;
    let myModalEstado = new bootstrap.Modal(
      document.getElementById("servicioModal")
    );
    myModalEstado.show();
    document.getElementById("saveButtonEstado").onclick = function () {
      // Obtener los valores de los campos
      const idServicio = document.getElementById("IDCorrespondencia").value;
      const estadoSolicitud = document.getElementById("estadoSolicitud").value;
      // Verificar si el campo 'soporteDocumental' existe antes de acceder a su valor
      const soporteDocumentalInput =
        document.getElementById("soporteDocumental");
      const soporteDocumental = soporteDocumentalInput
        ? soporteDocumentalInput.files[0]
        : null;

      // Inicializar un objeto FormData para almacenar los datos
      const formData = new FormData();
      formData.append("IDCorrespondencia", idServicio);
      formData.append("EstadoSolicitud", estadoSolicitud);

      // Solo agregar soporteDocumental si existe
      if (soporteDocumental) {
        formData.append("SoporteDocumental", soporteDocumental);
      }
      // Enviar los datos al backend usando fetch
      fetch(
        "/AtencionCiudadana/src/Models/Correspondencia/ActualizarCorrespondenciaEstado.php",
        {
          method: "POST",
          body: formData,
        }
      )
        .then((response) => {
          if (!response.ok) {
            throw new Error("Error en la solicitud al servidor");
          }
          return response.json();
        })
        .then((data) => {
          // Manejar la respuesta del servidor
          if (data.error) {
            Swal.fire({
              icon: "error",
              title: "Oops...",
              text: data.error,
            });
          } else {
            Swal.fire({
              title: "¡Éxito!",
              text: "Estado de solicitud actualizado exitosamente",
              icon: "success",
              timer: 3000, // Duración en milisegundos (3 segundos)
              showConfirmButton: false, // No mostrar botón de aceptar
            });
            FetchObtenerCorrespondencia();
            // Aquí puedes cerrar el modal o actualizar la vista
            myModalEstado.hide();
          }
        })
        .catch((error) => {
          alert(error.message);
        });
    };
  }
}

function ObtenerCorrespondenciaDetalles(id) {
  fetch(`/AtencionCiudadana/src/Models/Correspondencia/ObtenerCorrespondenciaDetalle.php?IDSolicitud=${id}`)
    .then(response => response.json())
    .then(data => {
      if (data.success && data.data) {
        const row = data.data;
        // Generar el contenido dinámicamente
        const contenidoHTML = `
      <div class="row">
          <div class="col-md-3 mb-3"><strong>Tipo de solicitud:</strong> <br> ${row.TipoSolicitud}</div>
          <div class="col-md-3 mb-3"><strong>Folio:</strong> <br> ${row.Folio}</div>
          <div class="col-md-3 mb-3"><strong>Tipo de SUAC:</strong> <br> ${row.TipoSUAC}</div>
          <div class="col-md-3 mb-3"><strong>Fecha de Captura:</strong> <br> ${row.FechaCaptura}</div>
          <div class="col-md-3 mb-3"><strong>Oficio:</strong> <br> ${row.Oficio}</div>
          <div class="col-md-3 mb-3"><strong>Área:</strong> <br> ${row.Area}</div>
          <div class="col-md-3 mb-3"><strong>Fecha de Recepción:</strong> <br> ${row.FechaRecepcion}</div>
          <div class="col-md-3 mb-3"><strong>Fecha del Documento:</strong> <br> ${row.FechaDocumento}</div>
          <div class="col-md-3 mb-3"><strong>Funcionario designado:</strong> <br> ${row.FuncionarioAsignado}</div>
          <div class="col-md-3 mb-3"><strong>Turno OP:</strong> <br> ${row.Turno}</div>
          <hr>
          <h5 class="text-center">REMITENTE</h5>
          <div class="col-md-4 mb-3"><strong>Nombre:</strong> <br> ${row.NombreRemitente}</div>
          <div class="col-md-4 mb-3"><strong>Cargo:</strong> <br> ${row.CargoRemitente}</div>
          <div class="col-md-4 mb-3"><strong>Dependencia:</strong> <br> ${row.DependenciaRemitente}</div>
          <hr>
          <div class="col-md-3 mb-3"><strong>Categoria:</strong> <br> ${row.Categoria}</div>
          <div class="col-md-9 mb-3"><strong>Asunto:</strong> <br> ${row.Asunto}</div>
      </div>
  `;

        // Insertar el contenido en el contenedor
        document.getElementById('contenidoDetalle').innerHTML = contenidoHTML;
      }
    })
    .catch(error => console.error('Error:', error));
}