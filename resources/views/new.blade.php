@extends('basic-template')

@section('seccion')

<style>
    body {font-family: Arial;}
    
    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }
    
    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }
    
    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }
    
    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }
    
    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }
    </style>
    </head>
    <body>
    
    <h2>Tabs</h2>
    <p>Click on the buttons inside the tabbed menu:</p>


    
    <?php
    $array = array('tipo' => '1. Tipo de declación', 'ietacion' => "2. Importador/Exportador");


    echo '<form action="">';
        



    echo '<div class="tab">';
    foreach ($array as $key => $value) {
        $event='"'.$key.'"';
        echo "<button  class='tablinks' onclick='openCity(event, $event)'>$value</button>";
    }

    echo ' </div>';


    foreach ($array as $key => $value) {
        echo "<div id=$key class='tabcontent'><h3>$value</h3> <p>$value</p> </div>";
      
    }

    echo '</form> ';

    


    ?>
    
    
   
    
    
        
    
    <script>
    function openCity(evt, cityName) {
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
    
@endsection