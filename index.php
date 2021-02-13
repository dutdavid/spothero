<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/user.css">

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Spot Hero</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300" style="display: none;">
<g id="RuedaBike">    
<line id="Valvula" x1="150" y1="50" x2="150" y2="75" stroke="#333" stroke-width="4" />
<g id="Rayos" class="Rayo">
  <line x1="150" y1="145" x2="50" y2="140"  />
  <line x1="150" y1="155" x2="50" y2="160"  />
  <line x1="150" y1="145" x2="60" y2="115"  />  
  <line x1="150" y1="155" x2="60" y2="185"  />
</g>
  <use xlink:href="#Rayos" transform="rotate(60, 150, 150)" />
  <use xlink:href="#Rayos" transform="rotate(120, 150, 150)" />
  <use xlink:href="#Rayos" transform="rotate(180, 150, 150)" />
  <use xlink:href="#Rayos" transform="rotate(240, 150, 150)" />
  <use xlink:href="#Rayos" transform="rotate(300, 150, 150)" /> 
<g id="Neumatico">
  <circle cx="150" cy="150" r="100" class="Llanta"/>
  <circle cx="150" cy="150" r="100" class="Tacos"/>
  <circle cx="150" cy="150" r="90" class="Rin"/>
<g id="Eje">
  <circle cx="150" cy="150" r="15" fill="#999"/>
  <circle cx="150" cy="150" r="5" />
</g> 
</g>
</svg>
  
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 800 600" style="display: none;"> 
 <symbol id="Cuadro" viewBox="0 0 800 600">
  <polyline points="323.2,241.7 217.3,354.2 354.5,354.2 318.8,225.8 " stroke-linejoin="round" stroke-width="11"/>
  <polyline points="519.6,213.3 506,177.9 323.2,241.7 " stroke-width="16"/>
  <line x1="354.5" y1="354.2" x2="509" y2="185.7" stroke-width="16"/> 
 </symbol> 
  <path id="Cadena" d="M208,369.2c-5.9-2.5-10-8.3-10-15c0-9,7.3-16.3,16.3-16.3l139.2-1c11.9,0,21.5,9.6,21.5,21.5c0,10.5-7.5,19.2-17.5,21.1 l-158.1,29.3c-4.1,0.8-8.8-2.2-8.8-7.3c0-3,1.8-5.7,4.4-6.8l13.5-6.6C216.4,384.1,216.1,372.6,208,369.2z"/>
</svg>
  <!-- Visible -->  
<div class="Bicicletas">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 800 600" >
<g id="gAnterior">   
  <g class="Pedaleo">
   <line id="PedalI" class="Pedal" x1="344" y1="309" x2="364" y2="309" />
   <line class="PalaPedal" x1="354" y1="309" x2="354" y2="359" />
  </g>
  <g class="Rodando Trasera">
  <use xlink:href="#RuedaBike" width="300" height="300" x="64.28" y="204"  />
  <circle cx="214.28" cy="354" r="25" class="Dientes" stroke="#666" fill="#666"  />
  <circle cx="214.28" cy="354" r="21" class="Dientes" stroke="#999" fill="#999"  />
  <circle cx="214.28" cy="354" r="17" class="Dientes" stroke="#666" fill="#666"  />
  </g>
  <g class="Rodando Delantera">
  <use xlink:href="#RuedaBike" width="300" height="300" x="435.7" y="204"  />
  <use xlink:href="#Estrella" x="114.5" y="-75.5" transform="scale(1.25)" stroke="#999" stroke-width="3.5"/> 
  </g> 
  <g class="Componentes">
    <g id="Cables" stroke-width="2">
      <path d="M548,257c0-24,1-93-40-108"/>
      <path d="M514,151c21-2.8,25,14-6,42"/>
      <path d="M509,195c18-8,37.8-34,7-43"/>
    </g>
    <polygon id="Asiento" points="337.7,141.5 254.7,141.5 280,151.2 " stroke-width="7" fill="black"/>
    <line id="EspigaAsiento" x1="318.8" y1="225.8" x2="297.2" y2="148.1" stroke-width="7"/>
    <polyline id="Manillar" points="504.1,174.1 498.3,159 520.3,145.8 499.1,137 " stroke-width="13" stroke-linecap="round"/>
    <line id="Tijera" x1="580.9" y1="359" x2="524.5" y2="211.4" stroke-width="13"/>
  </g> 
</g>  
<use xlink:href="#Cuadro" class="CuadroI" />
<g id="gPosterior"> 
  <g class="Pedaleo">
    <g stroke="#666" stroke-width="4">
  <g id="Estrella" >
  <line id="Gajo" x1="350" y1="350" x2="370" y2="350" fill="none" />
  <use xlink:href="#Gajo" transform="rotate(60, 354, 359)" />
  <use xlink:href="#Gajo" transform="rotate(120, 354, 359)" />
  <use xlink:href="#Gajo" transform="rotate(180, 354, 359)" />
  <use xlink:href="#Gajo" transform="rotate(240, 354, 359)" />
  <use xlink:href="#Gajo" transform="rotate(300, 354, 359)" />
  <circle cx="354" cy="359" r="18.5" fill="none"  />
  </g> </g>
  <circle cx="354" cy="359" r="20" class="Dientes" stroke="#666" fill="none"  />
  <circle cx="354" cy="359" r="8"/> 
   </g>
  <circle id="Estrellita" cx="198" cy="401" r="6" class="Dientes" stroke="#999" fill="#999"  />
  <use xlink:href="#Cadena" class="CadenaA" />
  <use xlink:href="#Cadena" class="CadenaB" />
  <use xlink:href="#Cadena" class="CadenaC" />
  <g class="Rodando Trasera">
  <circle cx="214.28" cy="354" r="13" class="Dientes" stroke="#999" fill="#999"  />
  <circle cx="214.28" cy="354" r="9" class="Dientes" stroke="#666" fill="#666"  />
  <circle cx="214.28" cy="354" r="5" class="Dientes" stroke="#999" fill="#999"  />
  </g>
  <polyline class="CuadroI" points="323.2,241.7 217.3,354.2 289.7,354.2 " stroke-width="11" stroke-linejoin="round"/>
  <g class="Pedaleo"> 
  <line class="PalaPedal" x1="354" y1="359" x2="354" y2="409" />
  <line id="PedalD" class="Pedal" x1="344" y1="409" x2="364" y2="409" />
  </g>
  <polyline class="Componentes" points="198,401 223,387 201,367 217,354 " stroke-width="6" stroke-linecap="round"/>
</g>
</svg>  
  </div>
</body>

  </html>
