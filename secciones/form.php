<!doctype html>
<html lang="en">
    <head>
        <title>Fus Alianz</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="row">

<div class="container mt-5">

<div class="row">
    <div class="col-4">
    </div>
    <div class="col-4">
        <img src="../src/img/cpp-logow.png" class="img-fluid" />
    </div>
    <div class="col-4">
    </div>
</div><br>
<h1>Capacidades experimentales Red Nacional de Calificación de la aleación eutéctica de LiPb</h1>
<p>En este formulario se indican distintas propiedades que queremos medir de la aleación eutéctica LiPb y queremos saber de cada participante las capacidades que tiene en sus laboratorios. Indicar la técnica de medición de la propiedad y en caso de que no esté en la lista, por favor indicar la técnica alternativa y en todos los casos los instrumentos de medida disponibles.</p>

<p>En este formulario tenemos: 
<a href="#basicas">Propiedades básicas</a> ·
<a href="#termodinamicas">Propiedades Termodinámicas</a> ·
<a href="#em">Propiedades Electromagnéticas</a> ·
<a href="#hidrogeno">Propiedades Transporte de Isótopos de Hidrógeno</a> ·
<a href="#helio">Propiedades de Transporte de Helio y Correlaciones de dos fases</a> ·
<a href="#corrosion">Propiedades de Corrosión (LLE) y Compatibilidad</a>.
</p>

<div class="row">
    <div class="col-3">
    </div>
    <div class="col-6">
        <img src="../src/img/footer.png" class="img-fluid" />
    </div>
    <div class="col-3">
    </div>
</div><br>
<br>

<form id="miFormulario">

    <div class="mb-3">
        <h5>Email</h5>
        <div class="row">
            <div class="mb-3">
                <input type="text" id="email" class="form-control" placeholder="Introduzca aquí su email">
            </div>
        </div>
    </div><br>


    <div class="mb-3">
        <h5>Indique su Entidad</h5>
        <div class="form-check">
            <input type="radio" id="ciemat" name="opcion" class="form-check-input">
            <label for="ciemat" class="form-check-label">Ciemat</label>
        </div>
        <div class="form-check">
            <input type="radio" id="idonial" name="opcion" class="form-check-input">
            <label for="idonial" class="form-check-label">Idonial</label>
        </div>
        <div class="form-check">
            <input type="radio" id="iqs" name="opcion" class="form-check-input">
            <label for="iqs" class="form-check-label">IQS</label>
        </div>
        <div class="form-check">
            <input type="radio" id="urv" name="opcion" class="form-check-input">
            <label for="urv" class="form-check-label">URV</label>
        </div>
        <div class="form-check">
            <input type="radio" id="uned" name="opcion" class="form-check-input">
            <label for="uned" class="form-check-label">UNED</label>
        </div>
        <div class="form-check">
            <input type="radio" id="ipul" name="opcion" class="form-check-input">
            <label for="ipul" class="form-check-label">IPUL</label>
        </div>
        <div class="form-check">
            <input type="radio" id="rieraNadeu" name="opcion" class="form-check-input">
            <label for="rieraNadeu" class="form-check-label">Riera Nadeu</label>
        </div>
    </div><br>

<h2 id="basicas">Propiedades Básicas</h2>
<hr>

<div class="mb-3">
<h5>Medición del %at Li y %at Li(6)</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="at1" class="form-check-input mt-0">
            <label for="at1">&nbsp;AAS&nbsp;</label>
        </div>
            <input type="text" id="tat1" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Resistividad&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;QMSICP&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Temperatura media del punto de fusión (ºC)</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;AAS&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Resistividad&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;DSC&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Coeficiente de Expansión Volumétrica [&Delta;<sub>Vm</sub>]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Dilatometría&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Difracción&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Masa molecular [g/mol]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Espectometría [QMS]&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Densidad(&rho;) [kg/m<sup>3</sup>]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Pictometría&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Viscosidad dinámica [Pa·s]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Viscosimetría&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Tensión Superficial [N/m]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Sessile drop&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>


<h2 id="termodinamicas">Propiedades Termodinámicas</h2>
<hr>
<div class="mb-3">
<h5>Calor Específico [J/g·K]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;DTA&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dsc" class="form-check-input mt-0">
            <label for="dsc">&nbsp;DSC&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Calor Latente [J/g]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;DTA&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dsc" class="form-check-input mt-0">
            <label for="dsc">&nbsp;DSC&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Presión de Vapor [Pa]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Dif. Manométrica&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Cond. Térmica [W/m·K]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Laser Flash Pulse&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Coeficiente de Expansión Térmica [&Delta;V<sub>m</sub>]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Dilatometría&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<h2 id="em">Propiedades Electromagnéticas</h2>
<hr>
<div class="mb-3">
<h5>Resistividad [&Omega;·m]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Shunt&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Permeabilidad Magnética [N/A<sup>2</sup>]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Rugowsky&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<h2 id="hidrogeno">Propiedades de Transporte de Isótopos de Hidrógeno</h2>
<hr>
<div class="mb-3">
<h5>Constante de Sievert [/Pa]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;IDE&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Permeación&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Coeficiente de Difusión [m<sup>2</sup>/s]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;IDE&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Permeación&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Const. Rec. [m<sup>4</sup>/s/at]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;IDE&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Permeación&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Coeficiente de Transferencia de Masa [m/s]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Contactores de Gas&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<h2 id="helio">Propiedades de Transporte de Helio y Correlaciones de dos fases</h2>
<hr>
<div class="mb-3">
<h5>Constante de Henry [/Pa]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;HP IDE u otros&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Coeficiente de Difusión [m<sup>2</sup>/s]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;HP IDE u otros&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Coeficiente de Disp. de Fase [&Sigma;]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Contactores de Gas&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<h2 id="corrosion">Propiedades de Corrosión (LLE) y Compatibilidad</h2>
<hr>
<div class="mb-3">
<h5>Sol./Dif. (Ni, Mn, Cr, Fe...)</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;MNL20-2ND-EB, STP866-EB&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Interacción aire-agua</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;DSC, &Delta;G (indirecto)&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Estab. Quim. Ceram (&Delta;G[kJ/mol])</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;DSC, &Delta;G (indirecto)&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>

<div class="mb-3">
<h5>Presión de vapor Pb-Po-Hg interm. [Pa]</h5>
    <div class="input-group mb-3">
        <div class="input-group-text">
            <input type="checkbox" id="dta" class="form-check-input mt-0">
            <label for="dta">&nbsp;Manometría Diferencial&nbsp;</label>
        </div>
            <input type="text" id="campoTexto" class="form-control" placeholder="Introduzca aquí modelo del instrumento de medida" disabled>
    </div>
</div><br>


    <!-- Botón final -->
    <br>
    <span class="clearfix"></span>
    <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Guardar y enviar</button>
    </div>
</form>
<br><br><br>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>



<!-- footer cierro 4 divs -->
</div></div></div></div>


</main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <?php include 'form-ctr.php'; ?>
    </body>
</html>