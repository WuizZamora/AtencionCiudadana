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
    const prefijos = {
        'OFP': 'OFP',
        'INT': 'INT',
        'ATC': 'ATC',
        'CRE': 'CRE',
        'CXC': 'CXC'
    };
    
    const añoActual = new Date().getFullYear();
    const numeroAleatorio = Math.floor(1000 + Math.random() * 9000); // Número de 4 dígitos
    const folio = document.getElementById('Folio');
    
    folio.value = `${prefijos[this.value]}-${añoActual}-${numeroAleatorio}`;
});