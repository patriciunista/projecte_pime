<form action="#" method="POST" id="formulari-hores">
        <div class="row">
            <div id="camp-data" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <label for="data">Data</label><br/>
                <input type="date" id="data" class="form-control" name="data">
            </div>
            <div id="camp-hora-inici" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <label for="hora_inici">Hora Inici</label><br/>
                <input type="time" step="900" value="07:30" name="hora_inici" id="hora_inici" class="form-control">
            </div>
            <div id="camp-hora-fi" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <label for="hora_fi">Hora Fi</label><br/>
                <input type="time" step="900" value="07:30" name="hora_fi" id="hora_fi" class="form-control">
            </div>
        </div>
        <div class="row">
            <!-- <div id="camp-tipus" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <label for="tipus">Tipus</label><br>
                <select name="tipus" id="tipus" class="form-control">
                    <option value="0">Remot</option>
                    <option value="1">Presencial</option>
                </select>
            </div> -->
            <div id="camp-client" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <label for="client">Client</label><br>
                <input type="text" name="client" id="client" class="form-control">
            </div>
            <div id="camp-concepte" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <label for="conc">Concepte</label><br>
                <input type="text" name="conc" id="conc" class="form-control">
            </div>
        </div>
        <div class="row">
            <div id="camp-descripcio" class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <label for="descripcio">Descripcio</label><br>
                <input type="text" name="descripcio" id="descripcio" class="form-control">
            </div>
            <div id="camp-boto-formulari" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <input type="hidden" name="temps_total" id="temps_total">
                <button id="boto-formulari" type="submit" class="btn btn-default">Entrar Hora</button>
            </div>
        </div>
        <div class="row">
            <div id="missatge-error" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span></span>
            </div>
        </div>
    </div>
</form>