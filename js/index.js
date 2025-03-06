// FECHA Y HORA AUTOMATICA ACTUAL
const fechaCaptura = document.getElementById("fechaCaptura");
const date = new Date();

// Formatear a YYYY-MM-DDTHH:mm (hora local)
const year = date.getFullYear();
const month = String(date.getMonth() + 1).padStart(2, '0'); // Meses son 0-based
const day = String(date.getDate()).padStart(2, '0');
const hours = String(date.getHours()).padStart(2, '0');
const minutes = String(date.getMinutes()).padStart(2, '0');

fechaCaptura.value = `${year}-${month}-${day}T${hours}:${minutes}`;

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
    const folio = document.getElementById('Folio');
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
    selectTipoSuac.value=""

    if(this.value === 'SUAC'){
        campoTipoSuac.style.display = 'block';
        campoTipoSuac.disabled = false;
        campoTipoSuac.required = true;
    } else{
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

