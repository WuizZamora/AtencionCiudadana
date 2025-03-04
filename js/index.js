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
document.getElementById('tipoSolicitud').addEventListener('change', function() {
    // Generar folio (tu código existente)
    const prefijos = {
        'OFP': 'OFP',
        'INT': 'INT',
        'ATC': 'ATC',
        'CRE': 'CRE',
        'CXC': 'CXC'
    };
    const añoActual = new Date().getFullYear();
    const numeroAleatorio = Math.floor(1000 + Math.random() * 9000);
    const folio = document.getElementById('Folio');
    folio.value = `${prefijos[this.value]}-${añoActual}-${numeroAleatorio}`;

    // Controlar el campo Área
    const areaSelect = document.getElementById('areaSelect');
    const areaInput = document.getElementById('areaInput');
    
    if (this.value === 'INT') {
        areaSelect.style.display = 'block';
        areaInput.style.display = 'none';
        areaSelect.required = true;
        areaInput.required = false;
        areaInput.value = "";
    } else {
        areaSelect.style.display = 'none';
        areaInput.style.display = 'block';
        areaSelect.required = false;
        areaInput.required = true;
        areaSelect.value="";
    }
});

