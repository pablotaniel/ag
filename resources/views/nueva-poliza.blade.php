@extends('template')

@section('todo')


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->
    <link href="css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <link href="css/new-policy.css" rel="stylesheet" />



    <!--h2>Tabs</h2-->

    <div class="tab">
        <div class="fortab"><button class="tablinks" onclick="opentab(event, 'tipo')">1. Tipo de declación</button>
        </div>
        <div class="fortab"><button class="tablinks" onclick="opentab(event, 'ietacion')">2. Importador /Exportador</button>
        </div>
        <div class="fortab"><button class="tablinks" onclick="opentab(event, 'lugares')">3. Lugares</button>
        </div>
        <div class="fortab"><button class="tablinks" onclick="opentab(event, 'totales')">4. Totales</button>
        </div>





        <div class="fortab"><button class="tablinks" onclick="opentab(event, 'transporte')">5. Info. transporte</button>
        </div>
        <div class="fortab"><button class="tablinks" onclick="opentab(event, 'facturas')">6. Facturas</button></div>
        <div class="fortab"><button class="tablinks" onclick="opentab(event, 'partida')">7. Detall de Partida</button></div>
        <div class="fortab"><button class="tablinks" onclick="opentab(event, 'liquidacion')">8. Liquidacion</button></div>
        <div class="fortab"><button class="tablinks" onclick="opentab(event, 'otros')">9. Otros Datos</button></div>
    </div>



    <form action="generar" method="POST">

        @csrf

        <div id="tipo" class="tabcontent">
            <h3>Tipo de declación</h3>
            <label>Regimen</label>
            <select class="form-control select" name=regimen1>
                <option value="ID" selected>ID: Importacion Directa</option>
                <option>LZ: Cambio de régimen de importación temporal para retorno en el mismo estado a importación
                    definitiva</option>
            </select>

            <div class="a">
                <select class="form-control select" name=regimen2>
                    <option value="23">23</option>
                    <option value="10" selected>10</option>
                </select>
            </div>

            <p>Tipo de operación
                <select name="" id="" class="form-control select">
                    <option value="929">929</option>
                </select>
            </p>


            <p>Clase de declaracion
                <select name="" id="" class="form-control select">
                    <option value="10">10</option>
                </select>
            </p>


            <p>Naturaleza de la transacción
                <select name="" id="" class="form-control select">
                    <option value="01">01</option>
                </select>
            </p>



        </div>



        <div id="ietacion" class="tabcontent">
            <h3>Importador o Exportador</h3>

            <p>Importador
                <select name="nombre_importador" id="" class="form-control select">
                    <option value="86952-5">Farmacias Galeno</option>
                </select>
            </p>

            <p>Numero de identificacion (NIT):
                <input type="text" name="nit">
            </p>

            <p>Domicilio Fiscal:
                <input type="text" name="domicilio">
            </p>

            <p>Ciudad:
                <input type="text" name="ciudad">
            </p>

            <p>Tipo doc ID:
                <input type="text" name="tipo-doc-id ">
            </p>

            <p>Pais Emisor ID:
                <input type="text" name="pais-emisor-id ">
            </p>


            <p>Telefono/Fax
                <input type="tel" name="tel">
            </p>

            <p>Email:
                <input type="email" name="email">
            </p>

            <p>Condicion de comerciante
                <select name="condicion" id="" class="form-control select">
                    <option value="minorista">MINORISTA</option>
                </select>
            </p>

        </div>


        <div id="lugares" class="tabcontent">
            <h3>Lugares</h3>
        </div>

        <div id="totales" class="tabcontent">
            <h3>Totales</h3>
        </div>

        <div id="transporte" class="tabcontent">
            <h3>Info. Transporte</h3>
        </div>

        <div id="facturas" class="tabcontent">
            <h3>Facturas</h3>
        </div>

        <div id="partida" class="tabcontent">
            <h3>Detalles de Partida</h3>
        </div>

        <div id="liquidacion" class="tabcontent">
            <h3>Liquidación</h3>
        </div>

        <div id="otros" class="tabcontent">
            <h3>Otros Datos</h3>
        </div>

        <button type="submit">Generar poliza</button>
    </form>

    <script>
        function opentab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

    </script>

    <script>
        $('.select').select2();

    </script>

@endsection
