<br>
<h3 class="tex-center">
    CORRESPONDENCIA DE ENTRADA (AÑO)
</h3>
<hr>
<form id="formAltaSolicitud" class="needs-validation" autocomplete="off" enctype="multipart/form-data" novalidate>
    <div class="row">
        <div class="col-md-3 mb-3">
            <label class="form-label" for="tipoSolicitud">Tipo de solicitud</label>
            <select class="form-select text-center" id="tipoSolicitud" name="tipoSolicitud" required>
                <option selected disabled value="">Elige una opción</option>
                <option value="Oficialia_Partes">Oficialia de partes</option>
                <option value="Formato">Formato</option>
                <option value="Correo_Electrónico">Correo Electronico</option>
                <option value="SUAC">SUAC</option>
                <option value="Interno">Interno</option>
            </select>
        </div>

        <div class="col-md-3 mb-3" id="CampoTipoSuac" style="display: none;">
            <label for="tipoSuac" class="form-label">Tipo de SUAC</label>
            <select class="form-select text-center" id="tipoSuac" name="tipoSuac">
                <option selected disabled value="">Elige una opción</option>
                <option value="Normal">Normal</option>
                <option value="CxC">Casa por casa</option>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label for="folio" class="form-label text-success">Folio</label>
            <input class="form-control text-center" type="text" id="folio" name="folio" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="oficio" class="form-label">Oficio</label>
            <input class="form-control" type="text" id="oficio" name="oficio" maxlength="" required>
        </div>

        <div class="col-md-3 mb-3">
            <label class="form-label" for="area">Área</label>
            <!-- Select para Interno (INT) -->
            <select class="form-select text-center" id="areaSelect" name="area" style="display: none;">
                <option disabled value="">Elige una opción</option>
                <option value="DG">DIRECCIÓN GENERAL</option>
                <option value="DESC">DIRECCIÓN EJECUTIVA DE SUBSTANCIACIÓN Y CALIFICACIÓN</option>
                <option value="DEVT">DIRECCIÓN EJECUTIVA DE VERIFICACIÓN AL TRANSPORTE</option>
                <option value="DEAJSL">DIRECCIÓN EJECUTIVA DE ASUNTOS JURIDICOS Y SERVICIOS LEGALES</option>
                <option value="DAF">DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS</option>
                <option value="DEVA">DIRECCIÓN EJECUTIVA DE VERIFICACIÓN ADMINISTRATIVA</option>
            </select>
            <!-- Input para otros tipos -->
            <input type="text" class="form-control" id="areaInput" name="area" style="display: none;">
        </div>

        <div class="col-md-3 mb-3">
            <label class="form-label" for="fechaRecepcion">Fecha de recepción</label>
            <input type="date" class="form-control text-center" name="fechaRecepcion" id="fechaRecepcion" required>
        </div>
        <div class="col-md-3 mb-3">
            <label class="form-label" for="fechaDocumento">Fecha del documento</label>
            <input type="date" class="form-control text-center" name="fechaDocumento" id="fechaDocumento" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="funcionarioAsignado" class="form-label">Funcionario designado</label>
            <select class="form-select text-center" id="funcionarioAsignado" name="funcionarioAsignado" required>
                <option selected disabled value="">Elige una opción</option>
                <option value="OPCIÓN 1">OPCIÓN 1</option>
                <option value="OPCIÓN 2">OPCIÓN 2</option>
                <option value="OPCIÓN 3">OPCIÓN 3</option>
            </select>
        </div>

        <!-- <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Archivo en expediente y/o carpeta</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div> -->
        <!-- <div class="col-md-3 mb-3">
                    <label class="form-label" for="">Clasificación</label>
                    <select class="form-select text-center" id="" name="" required>
                        <option selected disabled value="">Elige una opción</option>
                        <option value="">Externo</option>
                        <option value="">Interno</option>
                    </select>
                </div> -->
        <!-- <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Turno</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div> -->

        <!-- <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Dirigido a</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div> -->

        <h5 class="text-center">REMITENTE</h5>
        <hr>
        <div class="col-md-4 mb-3">
            <label for="nombreRemitente" class="form-label">Nombre completo</label>
            <input class="form-control" type="text" id="nombreRemitente" name="nombreRemitente" maxlength="" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="cargoRemitente" class="form-label">Cargo del remitente</label>
            <input class="form-control" type="text" id="cargoRemitente" name="cargoRemitente" maxlength="" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="dependenciaRemitente" class="form-label">Dependencia </label>
            <input class="form-control" type="text" id="dependenciaRemitente" name="dependenciaRemitente" maxlength="" required>
        </div>
        <hr>
        <div class="col-md-4 mb-3">
            <label for="categoria" class="form-label">Categoria (ANTES TEMA)</label>
            <input class="form-control" type="text" id="categoria" name="categoria" maxlength="" required>
        </div>
        <div class="col-md-8 mb-3">
            <label for="asunto" class="form-label">Asunto</label>
            <textarea class="form-control" name="asunto" id="asunto" rows="8" maxlength="400" required> </textarea>
        </div>
        <!-- <div class="col-md-3 mb-3">
                    <label for="" class="form-label text-danger">Fecha del evento</label>
                    <input class="form-control" type="date" id="" name="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label text-danger">Lugar del evento</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="" class="form-label">Referente al caso</label>
                    <input class="form-control" type="text" id="" name="" maxlength="" required>
                </div> -->
    </div>
    <div class="col-12">
        <button class="btn btn-warning" type="submit">Guardar</button>
    </div>
</form>
<!-- MODAL ESTADO SOLICITUD Y SOPORTE -->
<div class="modal fade" id="servicioModal" tabindex="-1" aria-labelledby="servicioModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="servicioModalLabel">Detalles del Servicio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="resultadoModal">

                <!-- Aquí se mostrará la información del servicio -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="saveButtonEstado">Guardar</button>
            </div>
        </div>
    </div>
</div>
<br>
<div id="alertaError" class="alert alert-danger d-none" role="alert">
    Faltan campos por completar. Verifica la información.
</div>

<script src="./src/Views/Correspondencia/js/CorrespondenciaEntradaForm.js"></script>