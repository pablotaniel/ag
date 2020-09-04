<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->
    <link href="css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <link href="css/new-policy.css" rel="stylesheet" />

</head>


<body>



    <div id="escritor"></div>

    <div id="escritor2"></div>

    <button type="button" id="agregar">Agregar</button>

</body>

<script>
    var dict = {};
    var dict = {
        "zero": "A",
        "one": "B",
        "dos": "some value"
    };

    console.log(dict);

    for (const [key, value] of Object.entries(dict)) {
        console.log(key, value);
    }


    class GenerateHtml {

        input(name, value) {
            var input = document.createElement("INPUT");
            input.setAttribute("type", "text");
            input.setAttribute("name", name);
            input.setAttribute("value", value);
            return input;
        }

        

        simpleSelect(options, name, classE) {
            var select = document.createElement("select");
            select.setAttribute("class", classE);
            select.setAttribute("name", name);

            var option1 = document.createElement("option");
            option1.setAttribute("value", "1");
            var t = document.createTextNode("Volvo");
            option1.appendChild(t);
            select.appendChild(option1);

            for (const [key, value] of Object.entries(options)) {
                console.log(key, value);
                var option1 = document.createElement("option");
                option1.setAttribute("value", value);
                var t = document.createTextNode(key);
                option1.appendChild(t);
                select.appendChild(option1);
            }

            return select;

        }

        selectSearch(options, name){
            return this.simpleSelect(options, name, "form-control select");
        }


        /*static addElement(element, name) {
            // crea un nuevo div 
            // y añade contenido 
            var newDiv = document.createElement("div");
            //var newContent = document.createTextNode("Hola!¿Qué tal?");
            newDiv.setAttribute("name", name);
            newDiv.appendChild(element); //añade texto al div creado. 
            newDiv.appendChild(element); 
           

            // añade el elemento creado y su contenido al DOM 
            var currentDiv = document.getElementById("escritor");
            document.body.insertBefore(newDiv, currentDiv);
           // document.body.remove("escritor");
        }*/

    }

    var contenedor = document.getElementById('escritor');
    var btnAgregar = document.getElementById('agregar');


    //var input1 = new GenerateHtml().textbox();
    //console.log(input1) ;



    // document.body.onload = GenerateHtml.addElement(input1, "diva");






    function btnAgregar_Click(event) {
        // document.body.innerHTML = "<h1>Time right now is:  " 
        //document.body.innerHTML=input1;
        var divMaster = document.createElement('div');
        divMaster.appendChild(new GenerateHtml().input("a", "b"));
        divMaster.appendChild(new GenerateHtml().input("c", "d"));
        divMaster.appendChild(new GenerateHtml().selectSearch(dict));
        var parent = document.getElementById("escritor");
        var parent2 = document.getElementById("escritor2");

        parent.appendChild(divMaster);
        parent2.appendChild(new GenerateHtml().input("a", "b"));

    }



    //btnAgregar.addEventListener('click', btnAgregar_Click);

    document.body.onload = btnAgregar_Click();


    $('.select').select2();

</script>




</html>
