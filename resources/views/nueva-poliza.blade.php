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

            <div class=salida-entrada>
                <p>Aduana Entrada/Salida
                    <select name="aduana-origen" id="" class="form-control select">
                        <option value="puerto-quetzal">Puerto Quetzal</option>
                    </select>
                </p>

                <p>Deposito temporal aduana
                    <select name="deposito-temporal" id="" class="form-control select">
                        <option value="deposito1">deposito1</option>
                    </select>
                </p>

                <p>Delegacion
                    <input type="text" name="delegacion">
                </p>



                <p>Aduana Despacho/Destino
                    <select name="aduana-despacho" id="" class="form-control select">
                        <option value="puerto-quetzal">Puerto Quetzal</option>
                    </select>
                </p>

            </div>


            <div>
                <p>Modo de transporte
                    <select name="transporte" id="" class="form-control select">
                        <option value="1">1. Maritimo</option>
                    </select>
                </p>

                <div>

                    <p>Pais de procedencia
                        <select name="aduana" id="" class="form-control select">
                            <option value="puerto-quetzal">Puerto Quetzal</option>
                        </select>
                    </p>

                    <p>Pais de embarque
                        <select name="aduana" id="" class="form-control select">
                            <option value="pais-embarque">US. Estados Unidos</option>
                        </select>
                    </p>

                    <p>Puerto embarque
                        <select name="aduana" id="" class="form-control select">
                            <option value="puerto-embarque">puerto 1</option>
                        </select>
                    </p>


                    <p>Lugar de exportacion
                        <input type="text" name="lugar-exportacion">

                    </p>

                </div>



            </div>


        </div>

        <div id="totales" class="tabcontent">
            <h3>Totales</h3>

            <div class="">
                <label class="">
                    <input type="checkbox" class="form-check-input" name="prorrateo" id="" value="true" checked>
                    Hacer prorrateo de gastos
                </label>
            </div>


            <div class="form-check">
                <label for=""></label>

                <p>Formato de prorrateo:</p>
                <input type="radio" id="fob" name="formato-prorrateo" value="fob" checked>
                <label for="fob">Segun valores FOB</label><br>
                <input type="radio" id="cif" name="formato-prorrateo" value="cif">
                <label for="cif">Segun valores CIF</label><br>


            </div>


            <div>
                <div>
                    <label for="total-fob">Total FOB US$</label>
                    <input type="number" name="total-fob" id="" min="0.00" max="10000.00" step="0.01" value=0.00>

                    <label for="valor-transaccion">Valor transaccion US$</label>
                    <input type="number" name="valor-transaccion" id="" min="0.00" max="10000.00" step="0.01" value=0.00>
                </div>

                <div>
                    <label for="total-flete">Total Flete US$</label>
                    <input type="number" name="total-flete" id="" min=" 0.00" max="10000.00" step="0.01" value=0.00>
                </div>

                <div>
                    <label for="total-seguro">Total Seguro US$</label>
                    <input type="number" name="total-seguro" id="" min=" 0.00" max="10000.00" step="0.01" value=0.00>
                    <a href="#" class="button">Calcular seguro</a>
                </div>


                <div>
                    <label for="total-otros-gastos">Total FOB US$</label>
                    <input type="number" name="total-otros-gastos" id="" min="0.00" max="10000.00" step="0.01" value=0.00>
                </div>

                <div>
                    <label for="total-cif">Total CIF US$</label>
                    <input type="number" name="total-cif" id="" min="0.00" max="10000.00" step="0.01" value=0.00>
                </div>

                




            </div>

            <div>
                <div>
                    <label for="total-bultos">Total bultos</label>
                    <input type="number" name="total-bultos" id="" min="0" max="10000" value=0>
                </div>

                <div>
                    <label for="total-peso-bruto">Total Peso Bruto</label>
                    <input type="number" name="total-peso-bruto" id="" min=" 0.000" max="10000.00" step="0.001" value=0.000>
                  
                    <input type="checkbox" class="prorrateo-pesos-parciales" name="prorrateo-pesos-parciales" id="" value="true" checked>
                    Prorrateo pesos parciales
                
                
                </div>


                <div>
                    <label for="total-peso-bruto">Total Peso Bruto</label>
                    <input type="number" name="total-peso-bruto" id="" min=" 0.000" max="10000.00" step="0.001" value=0.000>
                </div>

                <div>
                    <label for="total-peso-neto">Total Peso Neto</label>
                    <input type="number" name="total-peso-neto" id="" min=" 0.000" max="10000.00" step="0.001" value=0.000>
                </div>

                <div>
                    <label for="tipo-cambio">Tipo de cambio Q US$</label>
                    <input type="number" name="tipo-cambio" id="" min=" 0.00000" max="100000.00000" step="0.00001" value=0.00000>
                    <a href="#" class="button">Usar cambio de sistema</a>
                    <a href="#" class="button">Consultar cambio</a>
               
                </div>


                
                <div>
                    <label for="valor-en-aduana">Valor en aduana</label>
                    <input type="number" name="valor-en-aduana" id="" min=" 0.000" max="10000.00" step="0.001" value=0.000>
                </div>

                

            </div>




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
