@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Dimensionnements</h6>
            </div>
            
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Calculer/Dimensionner</h6>
            </div>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>[Solar wallet] Dimensionner son installation photovoltaïque</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="./lib/style.css" media="screen" rel="stylesheet" type="text/css" />	
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="-1">
		<script> 
	<!-- https://www.browser-update.org/ -->
	var $buoop = {vs:{i:10,f:40,o:-8,s:8,c:50},api:4}; 
	function $buo_f(){ 
	 var e = document.createElement("script"); 
	 e.src = "//browser-update.org/update.min.js"; 
	 document.body.appendChild(e);
	};
	try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
	catch(e){window.attachEvent("onload", $buo_f)}
	</script>
	<script src="./lib/jquery-3.1.1.min.js"></script> 
</head>
<body>
		<div id="languesLegende" style="display: none"></div>
	<div id="page-wrap">
		<h1>Dimensionner son installation photovoltaïque</h1><!--<p style="padding : 5px 10px; background : #FFFF99; border : 1px dotted #FFCC33;">
	<b>La base de donnée d'ensoleillement est actuellement inaccessible, je vous propose de passer sur une très vieille version de CalcPv (beaucoup moins de fonctionnalitée mais qui fonctionne pour l'heure : <a href="http://calcpv.net/v2.2/" target="_blank">Cliquer ici</a></b>
<br />
<br />
L'incident est ouvert <a href="https://framagit.org/kepon/CalcPvAutonome/issues/34">ici</a>
</p>
-->
<!--
<div style="padding : 5px 10px; background : #FFFF99; border : 1px dotted #FFCC33;">
	La carte pour déterminer votre lieux géographique ne fonctionne plus. Vous pouvez : 
	<ul>
		<li>Passer sur une très vieille version de CalcPv (beaucoup moins de fonctionnalitée mais qui fonctionne pour l'heure : <a href="http://calcpv.net/v2.2/" target="_blank">Cliquer ici</a></li>
		<li>Entrer vos coordonnées GPS à la mains : <a href="https://www.coordonnees-gps.fr/">https://www.coordonnees-gps.fr/</a></li>
	</ul>
L'incident est ouvert <a href="https://framagit.org/kepon/CalcPvAutonome/-/issues/35">ici</a>
</div>
-->


<div style="padding : 5px 10px; background : #73e09b; border : 1px dotted #33d18f;">
/!\	La détermination du régulateur de charge n'est pas bonne.

L'incident est ouvert <a href="https://framagit.org/kepon/CalcPvAutonome/-/issues/37">ici</a>
</div>

<!--<p style="padding : 5px 10px; background : #FFFF99; border : 1px dotted #FFCC33;">
	<b>Ce logiciel est libre, colaboratif et indépendant financièrement. Afin qu\'il le reste, n\'hésitez pas à <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=MBDD2TG6D4TPC&lc=FR&item_name=CalcPvAutonome&item_number=calcpvautonome&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted" target="_blank">faire un don</a></b>
</p>-->
<!--
<p style="padding : 5px 10px; background : #FFFF99; border : 1px dotted #FFCC33;">
	<b>La version 4.3 que vous utilisez est juste sortie, en cas de bug n'hésitez pas à vous diriger vers l'<a href="http://calcpv.net/v4.3/">ancienne version</a> (plus stable) </b>
</p>
-->
<!--<p>Vous pouvez donner votre avis sur la méthode de calcul, l'orthographe, les idées de fonctionnalités qui vous manque, la couleur qui vous pique les yeux etc... <a href="http://david.mercereau.info/contact/" target="_blank">Envoyez tout ça par email</a> ou directement sur le <a href="https://framagit.org/kepon/CalcPvAutonome">dépôt Git</a> du projet</p>-->
<p>Rendez-vous sur la <a href="https://crwd.in/calcpvautonome" target="_blank">plateforme collaborative de traduction</a> pour nous aider à traduire ce logiciel.</p> <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
<script src="./lib/Chart.min.js"></script>
<form method="get" action="#" id="formulaireCalcPvAutonome">
	
	<div class="blocs" id="BlocIntro">
		<div class="form Ni">
			<label>Votre degré de connaissance en photovoltaïque : </label>
			<select id="Ni" name="Ni">
				<option value="1">Débutant</option>
				<option value="2" selected="selected">Eclairé</option>
				<option value="3">Expert</option>
			</select>
		</div>
		
		<div class="conseil debutant">
			<!--
			<p><a href="http://david.mercereau.info/formation-pv/" target="_blank"><img style="float: right; padding: 10ppx" width="100	" src="./lib/FormationPv.png" alt="" /></a><b>Suggestion</b> : regarder la petite <a href="http://david.mercereau.info/formation-pv/" target="_blank">formation vidéo sur l'autonomie électrique photovoltaïque</a> pour un meilleur usage de ce calculateur.</p>

				<p style="padding : 5px 10px; background : #FFFF99; border : 1px dotted #FFCC33;">
					Une formation de 2 jours pour comprendre et concevoir votre installation solaire électrique autonome en Juillet 2023 (<a href="https://david.mercereau.info/stage-atelier-comprendre-et-concevoir-votre-installation-solaire-electrique-autonome-07-2023/">plus d'info</a>)
				</p>
-->
					</div>

		<h2 class="titre vous">Votre consommation :</h2>	
				
			<p>C'est l'étape la plus importante pour votre dimensionnement. Si vous ne connaissez pas cette valeur rendez-vous sur notre <b><a href="/besoin" id="besoin">interface de calcul de besoins journaliers</a></b></p>
			<p>C'est l'étape la plus importante pour votre dimensionnement. Si vous ne connaissez pas cette valeur rendez-vous sur notre <b><a href="/feuillecalcul" id="feuillecalcul">interface de calcul de besoins journaliers</a></b></p>
			
			<div class="form Bj">
				<label>Vos besoins électriques journaliers :</label>
				<input id="Bj" type="number" min="1" max="99999" style="width: 100px;" value="" name="Bj" />  Wh/j			</div>
			
			<div class="form Pmax">
				<label>Votre besoin en puissance électrique maximum :</label>
				<input id="Pmax" type="number" min="1" max="99999" style="width: 100px;" value="" name="Pmax" />  W <a rel="tooltip" class="bulles" title="Il s'agit de la somme des puissances des appareils branché au même moment. <br />Par exemple si vous aviez un réfrégirateur de (70W), une scie sauteuse (500W) et une ampoule (7W) qui sont suceptibles d'être allumés en même temps votre besoin en puissance max est de 577W (70+500+7)">?</a>
			</div>
			
				</div>
	
	<div id="BlocLocalisation" class="blocs part localisation">
		<h2 class="titre localisation">Localisation géographique	</h2>

		<ul id="onglets">
			<li class="actif">Carte</li>
			<li id="EjOnglet">Manuel</li>
		</ul>
		<div id="contenu">
			
			<div class="modePvgis item">				
				<p>Cliquer sur la carte pour déterminer votre position géographique et ainsi déduire l'ensoleillement : </p>

				<div id="mapid" style="width: 75%; height: 275px;"></div>
				<script>
					// Création de la carte
										var mymap = L.map('mapid').setView([0, 0], 2);
					
					L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoia2Vwb24iLCJhIjoiY2pldnR2b2ZvMGtvZzJ3bDdkODhsZnJmbiJ9.g13B9PWURuLBzTRz6LYyzg', {
						maxZoom: 18,
						id: 'mapbox/streets-v11',
						tileSize: 512,
						zoomOffset: -1,
						accessToken: 'pk.eyJ1Ijoia2Vwb24iLCJhIjoiY2pldnR2b2ZvMGtvZzJ3bDdkODhsZnJmbiJ9.g13B9PWURuLBzTRz6LYyzg'
					}).addTo(mymap);
					
					// Avant :
					//~ L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
						//~ maxZoom: 18,
						//~ attribution: '<a href="http://openstreetmap.org">OpenStreetMap</a>',
						//~ id: 'mapbox.streets'
					//~ }).addTo(mymap);

					var popup = L.popup();

										
					function onMapClick(e) {
						popup
							.setLatLng(e.latlng)
							.setContent("Position sélectionnée : " + e.latlng.toString())
							.openOn(mymap);
					
						var split1 = e.latlng.toString().split("(")
						var split2 = split1[1].split(")")
						var split3 = split2[0].split(", ")
						var lat = split3[0];
						var lon = split3[1];
						$( "#lat" ).val(lat);	
						$( "#lon" ).val(lon);
						sumbitEnable();	 
											}
					
					mymap.on('click', onMapClick);
				</script>
				<div style="text-align: center">
					Latitude : 
					<input type="number" min="-180" max="180" step="0.000001" style="width: 100px;"  name="lat" id="lat" value="" />
					Longitude : 
					<input type="number" min="-180" max="180" step="0.000001" style="width: 100px;" name="lon" id="lon" value="" />
				</div>				
				<p><small>Les données de rayonnement sont collectées sur <a href="https://re.jrc.ec.europa.eu/pvg_tools/en/tools.html" target="_blank">PVGIS</a>.</small></p>
			</div>
			<div class="modeInput item">
				<div class="form Ej">
					<label>Donner la valeur du rayonnement moyen quotidien du mois le plus défavorable dans le plan (l'inclinaison) du panneau :</label>
					<input maxlength="4" size="4" id="Ej" type="number" step="0.01" min="0" max="50" style="width: 100px;" value="" name="Ej" /> kWh/m&sup2;/j
									</div>
			</div>
			
		</div>
		
	</div>
	
	
	<div id="BlocPV" class="blocs part pv">
		<h2 class="titre pv">Dimensionnement des panneaux photovoltaïques</h2>
		
				
		<div class="form inclinaison">
			<label>Inclinaison des panneaux :</label>
			<input name="inclinaison" id="inclinaison" type="number" min="-90" max="90" style="width: 100px;" value="0" />
			(<a onClick="window.open('http://ines.solaire.free.fr/pages/inclinaison.htm','Z','status=no ,scrollbars=no,width=350,height=350,top=50,left=50')">?</a>)
		</div>
		<div class="form orientation">
			<label>Orientation des panneaux :</label>
			<input name="orientation" id="orientation" type="number" min="-180" max="180" style="width: 100px;" value="0" />
			(<a onClick="window.open('http://ines.solaire.free.fr/pages/orientation.htm','Z','status=no ,scrollbars=no,width=350,height=350,top=50,left=50')">?</a>)		</div>
		
		<p><input type="checkbox" id="tracking" name="tracking"  /> J'utilise un traqueur solaire sur les 2 axes</p>
		
		<div class="form periode">
			<label>Autonomie souhaitée :</label>
			<select name="periode" id="periode">
				<option value="complete" selected="selected">Annuelle / complète</option>
				<option value="partielle">Saisonnière / partielle</option>
			</select>
			<div class="form periodeDebutFin">
				<label>Sélectiononer la période :</label>
				<select name="periodeDebut">
					<option value="1">Janvier</option><option value="2">FÃ©vrier</option><option value="3">Mars</option><option value="4">Avril</option><option value="5" selected="selected">Mai</option><option value="6">Juin</option><option value="7">Juillet</option><option value="8">Aout</option><option value="9">Septembre</option><option value="10">Octobre</option><option value="11">Novembre</option><option value="12">Decembre</option>				</select>
				<select name="periodeFin">
					<option value="1">Janvier</option><option value="2">FÃ©vrier</option><option value="3">Mars</option><option value="4">Avril</option><option value="5">Mai</option><option value="6">Juin</option><option value="7">Juillet</option><option value="8">Aout</option><option value="9" selected="selected">Septembre</option><option value="10">Octobre</option><option value="11">Novembre</option><option value="12">Decembre</option>				</select>
			</div>
		</div>

		<div class="form ModPv">
			<label><a onclick="window.open('https://calcpv.net/?p=Modeles&data=pv','Modèle de panneau','directories=no,menubar=no,status=no,location=no,resizable=yes,scrollbars=yes,height=500,width=600,fullscreen=no');">Modèle de panneau</a> : </label>
			<select id="ModPv" name="ModPv">
				<option value="auto">Automatique</option>
				<option value="perso" style="font-weight: bold">Personnaliser</option>
				<option value="PV_Mono_30">Monocristalin 30W</option>
<option value="PV_Mono_50">Monocristalin 50W</option>
<option value="PV_Mono_80">Monocristalin 80W</option>
<option value="PV_Mono_100">Monocristalin 100W</option>
<option value="PV_Mono_130">Monocristalin 130W</option>
<option value="PV_Mono_190">Monocristalin 190W</option>
<option value="PV_Mono_240">Monocristalin 240W</option>
<option value="PV_Mono_270">Monocristalin 270W</option>
<option value="PV_Mono_300">Monocristalin 300W</option>
<option value="PV_Mono_360">Monocristalin 360W</option>
<option value="PV_Mono_400">Monocristalin 400W</option>
<option value="PV_Mono_500">Monocristalin 500W</option>
<option value="PV_Mono_540">Monocristalin 540W</option>
<option value="PV_Poly_20">Polycristallin 20W</option>
<option value="PV_Poly_30">Polycristallin 30W</option>
<option value="PV_Poly_40">Polycristallin 40W</option>
<option value="PV_Poly_50">Polycristallin 50W</option>
<option value="PV_Poly_75">Polycristallin 75W</option>
<option value="PV_Poly_80">Polycristallin 80W</option>
<option value="PV_Poly_100">Polycristallin 100W</option>
<option value="PV_Poly_140">Polycristallin 140W</option>
<option value="PV_Poly_175">Polycristallin 175W</option>
<option value="PV_Poly_260">Polycristallin 260W</option>
<option value="PV_Poly_270">Polycristallin 270W</option>
<option value="PV_Poly_290">Polycristallin 290W</option>
<option value="PV_Poly_330">Polycristallin 330W</option>
			</select> 
		</div>
		<div class="form TypePv">
			<label>Technologie préférée de panneau : </label>
			<select id="TypePv" name="TypePv">
				<option value="monocristalin">Monocristalin</option>
				<option value="polycristallin">Polycristallin</option>
			</select> 
		</div>
		
		<div class="form PersoPv">
			<p>Vous pouvez détailler les caractéristiques techniques de votre panneau : </p>
			<ul>
				<li>
					<label>Puissance maximum (Pmax)  : </label>
					<input type="number" min="1" max="9999" style="width: 70px;" value=""  name="PersoPvW" />W
				</li>
				<li>
					<label>Tension en circuit ouvert (Voc) </label>
					<input type="number" step="0.01" min="1" max="99" style="width: 70px;" value=""  name="PersoPvVdoc" />V
				</li>
				<li>
					<label>Courant de court circuit (Isc)</label>
					<input type="number" step="0.01" min="0,01" max="99" style="width: 70px;" value=""  name="PersoPvIsc" />A
				</li>
			</ul>
		</div>
			
		<div class="form Rb">
			<label>Rendement électrique des batteries : </label>
			<input maxlength="4" size="4" id="Rb" type="number" step="0.01" min="0" max="1" style="width: 70px;" value="0.85" name="Rb" />
		</div>
		<div class="form Ri">
			<label>Rendement électrique du reste de l’installation (régulateur de charge…) : </label>
			<input maxlength="4" size="4" id="Ri" type="number" step="0.01" min="0" max="1" style="width: 70px;" value="0.87" name="Ri" />
		</div>
	</div>
	
	<div class="blocs" id="BlocBat">
		
		<div class="part bat">
			<h2 class="titre bat">Dimensionnement du parc de batteries</h2>
			<p>Cette application est pré-paramétrée pour des batteries plomb (AGM/Gel/OPvS/OPzV)</p>
			<div class="form Aut">
				<label>Nombre de jours d'autonomie : </label>
				<input maxlength="2" size="2" id="Aut" type="number" step="0.1" min="0" max="50" style="width: 50px" value="2" name="Aut" />
			</div>
			<div class="form U">
				<label>Tension finale du parc de batterie : </label>
				<select id="U" name="U">
					<option value="0" selected="selected">Auto</option>
					<option value="12">12</option>
					<option value="24">24</option>
					<option value="48">48</option>
				</select> V <a rel="tooltip" class="bulles" title="En mode automatique la tension des batteries sera déduite du besoin en panneaux<br />De 0 à 500W : 12V<br />De 500 à 1500 W : 24V<br />Au dessus de 1500 W : 48V">(?)</a>
			</div>
			<div class="form DD">
				<label>Degré de décharge limite : </label>
				<input maxlength="2" size="2" id="DD" type="number" step="1" min="0" max="100" style="width: 70px" value="30" name="DD" /> %
			</div>
			<div class="form ModBat">
				<label><a onclick="window.open('https://calcpv.net/?p=Modeles&data=batterie','Modèle de batterie','directories=no,menubar=no,status=no,location=no,resizable=yes,scrollbars=yes,height=500,width=600,fullscreen=no');">Modèle de batterie</a> (<a href="http://www.batterie-solaire.com/batterie-delestage-electrique.htm" target="_blank">exprimé en C10</a>) : </label>
				<select id="ModBat" name="ModBat">
					<option value="auto">Automatique</option>
					<option value="perso" style="font-weight: bold">Personnaliser</option>
					<option value="GEL_12_55">GEL 12V 55Ah (60Ah en C20)</option>
<option value="GEL_12_80">GEL 12V 80Ah (90Ah en C20)</option>
<option value="GEL_12_100">GEL 12V 100Ah (110Ah en C20)</option>
<option value="GEL_12_120">GEL 12V 120Ah (130Ah en C20)</option>
<option value="GEL_12_150">GEL 12V 150Ah (165Ah en C20)</option>
<option value="GEL_12_200">GEL 12V 200Ah (220Ah en C20)</option>
<option value="GEL_12_250">GEL 12V 250Ah</option>
<option value="OPzV_2_250">OPzV 2V 204Ah (250Ah en C20)</option>
<option value="OPzV_2_420">OPzV 2V 391Ah (420Ah en C20)</option>
<option value="OPzV_2_600">OPzV 2V 600Ah</option>
<option value="OPzV_2_800">OPzV 2V 800Ah</option>
<option value="OPzV_2_1000">OPzV 2V 1000Ah</option>
<option value="OPzV_2_1200">OPzV 2V 1200Ah</option>
<option value="OPzV_2_1500">OPzV 2V 1500Ah</option>
<option value="OPzV_2_2000">OPzV 2V 2000Ah</option>
<option value="OPzV_2_2500">OPzV 2V 2500Ah</option>
<option value="OPzV_2_3000">OPzV 2V 3000Ah</option>
<option value="AGM_12_7">AGM 12V 7Ah (8Ah en C20)</option>
<option value="AGM_12_12">AGM 12V 12Ah (14Ah en C20</option>
<option value="AGM_12_20">AGM 12V 20Ah (22Ah en C20)</option>
<option value="AGM_12_35">AGM 12V 35Ah (38Ah en C20)</option>
<option value="AGM_12_55">AGM 12V 55Ah (60Ah en C20)</option>
<option value="AGM_12_80">AGM 12V 80Ah (90Ah en C20)</option>
<option value="AGM_12_100">AGM 12V 100Ah (110Ah en C20)</option>
<option value="AGM_12_120">AGM 12V 120Ah (130Ah en C20)</option>
<option value="AGM_12_150">AGM 12V 150Ah (165Ah en C20)</option>
<option value="AGM_12_200">AGM 12V 200Ah (220Ah en C20)</option>
<option value="OPzS_2_280">OPzS 2V 213 (280Ah en C20)</option>
<option value="OPzS_2_520">OPzS 2V 390Ah (520Ah en C20)</option>
<option value="OPzS_2_910">OPzS 2V 686Ah (910Ah en C20)</option>
<option value="OPzS_2_1520">OPzS 2V 1140Ah (1520Ah en C20)</option>
<option value="OPzS_2_2540">OPzS 2V 1881Ah (2540Ah en C20)</option>
<option value="OPzS_2_4340">OPzS 2V 3220Ah (4340Ah en C20)</option>
<option value="OPzS_4_770">OPzS 4V 546Ah</option>
<option value="OPzS_4_1557">OPzS 4V 1104Ah</option>
<option value="OPzS_4_1904">OPzS 4V 1135Ah</option>
<option value="OPzS_4_2062">OPzS 4V 1460Ah</option>
<option value="OPzS_6_770">OPzS 6V 546Ah</option>
<option value="OPzS_6_963">OPzS 6V 683Ah</option>
<option value="OPzS_6_1156">OPzS 6V 820Ah</option>
<option value="OPzS_6_1259">OPzS 6V 893Ah</option>
<option value="LITIUM_12_7">Litium 12V 7Ah</option>
<option value="LITIUM_12_12">Litium 12V 12Ah</option>
<option value="LITIUM_12_40">Litium 12V 40Ah</option>
<option value="LITIUM_12_60">Litium 12V 60Ah</option>
<option value="LITIUM_12_90">Litium 12V 90Ah</option>
<option value="LITIUM_12_100">Litium 12V 100Ah</option>
<option value="LITIUM_12_150">Litium 12V 150Ah</option>
<option value="LITIUM_12_160">Litium 12V 160Ah</option>
<option value="LITIUM_12_200">Litium 12V 200Ah</option>
<option value="LITIUM_12_300">Litium 12V 300Ah</option>
<option value="LITIUM_24_100">Litium 24V 100Ah</option>
<option value="LITIUM_24_180">Litium 24V 180Ah</option>
<option value="LITIUM_24_200">Litium 24V 200Ah</option>
				</select> <a rel="tooltip" class="bulles" title="En mode automatique, au dessus de 500A, seront utilisées des batteries GEL OPzV">(?)</a>
			</div>
			<div class="form TypeBat">
				<label>Technologie de batteries préférée : </label>
				<select id="TypeBat" name="TypeBat">
					<option value="auto">Auto.</option>
					<option value="AGM">AGM</option>
					<option value="GEL">Gel</option>
					<option value="OPzV">OPzV</option>
					<option value="OPzS">OPzS</option>
					<option value="Litium">Litium</option>
				</select> 
			</div>
			<script type="text/javascript">
				$( "#TypeBat" ).change(function () {
					if ($( "#TypeBat" ).val() == 'Litium') {
						$( "#DD" ).val(50);
						$( "#IbatCharge" ).val(50);
						$( "#IbatDecharge" ).val(50);
					} else {
						$( "#DD" ).val(30);
						$( "#IbatCharge" ).val(20);
						$( "#IbatDecharge" ).val(20);
					}
				});
				$( "#ModBat" ).change(function () {
					var MotBatSplit = $( "#ModBat" ).val().split("_");
					if (MotBatSplit[0] == 'LITIUM') {
						$( "#DD" ).val(50);
						$( "#IbatCharge" ).val(50);
						$( "#IbatDecharge" ).val(50);
					} else {
						$( "#DD" ).val(30);
						$( "#IbatCharge" ).val(20);
						$( "#IbatDecharge" ).val(20);
					}
				});
			</script>
			<div class="form PersoBat">
				<p>Vous pouvez détailler les caractéristiques techniques de votre batterie : </p>
				<ul>
					<li>
						<label>Capacité (C10) : </label>
						<input type="number" min="1" max="9999" style="width: 70px;" value=""  name="PersoBatAh" />Ah
					</li>
					<li>
						<label>Tension : </label>
						<select id="PersoBatV" name="PersoBatV">
							<option value="2">2</option>
							<option value="4">4</option>
							<option value="6">6</option>
							<option value="12" selected="selected">12</option>
						</select> V
					</li>
				</ul>
			</div>
			<div class="form IbatCharge">
				<label>Capacité de courant de charge max : </label>
				<input maxlength="2" size="2" id="IbatCharge" type="number" step="1" min="0" max="100" style="width: 70px" value="20" name="IbatCharge" /> %
			</div>
			<div class="form IbatDecharge">
				<label>Capacité de courant de décharge max : </label>
				<input  maxlength="2" size="2" id="IbatDecharge" type="number" step="1" min="0" max="100" style="width: 70px" value="20" name="IbatDecharge" /> %
			</div>
		</div>
		
		<div class="part regu">
			<h2 class="titre regu">Regulateur de charge</h2>
			<div class="form ModRegu">
				<label><a onclick="window.open('https://calcpv.net/?p=Modeles&data=regulateur','Modèle de régulateur','directories=no,menubar=no,status=no,location=no,resizable=yes,scrollbars=yes,height=500,width=670,fullscreen=no');">Modèle de régulateur</a> : </label>
				<select id="ModRegu" name="ModRegu">
					<option value="auto">Automatique</option>
					<option value="perso" style="font-weight: bold">Personnaliser</option>
					<option value="MPPT_75_10">MPTT 75/10</option>
<option value="MPPT_75_15">MPTT 75/15</option>
<option value="MPPT_100_15">MPTT 100/15</option>
<option value="MPPT_100_30">MPTT 100/30</option>
<option value="MPPT_100_50">MPTT 100/50</option>
<option value="MPPT_150_35">MPTT 150/35</option>
<option value="MPPT_150_45">MPTT 150/45</option>
<option value="MPPT_150_60">MPTT 150/60</option>
<option value="MPPT_150_70">MPTT 150/70</option>
<option value="MPPT_150_85">MPTT 150/85</option>
<option value="MPPT_150_100">MPTT 150/100</option>
<option value="MPPT_250_60">MPTT 250/65</option>
<option value="MPPT_250_85">MPTT 250/85</option>
<option value="MPPT_250_100">MPTT 250/100</option>
				</select>
			</div>
			<div class="form PersoRegu">
				<p>Vous pouvez détailler les caractéristiques techniques de votre régulateur solaire : </p>
				<ul>
					<li>
						<label>Tension finale des batteries : <a rel="tooltip" class="bulles" title="Cette valeur se change dans 'Dimensionnement du parc batteries'"><span id="PersoReguVbat"></span>V</a></label>
					</li>
					<li>
						<label>Puissance maximale PV : </label>
						<input type="number" min="1" max="9999" style="width: 70px;" value=""  name="PersoReguPmaxPv" />W
					</li>
					<li>
						<label>Tension PV maximale de circuit ouvert : </label>
						<input type="number" min="1" max="9999" style="width: 70px;" value="" name="PersoReguVmaxPv" />V
					</li>
					<li>
						<label>Max. PV courant (Puissance / Tension) :</label>
						<input type="number" step="0.01" min="0,01" max="999" style="width: 70px;" value=""  name="PersoReguImaxPv" />A
					</li>
				</ul>
			</div>
			<div class="form reguMargeIsc">
				<label>Marge de sécurité du courant de court-circuit Isc des panneaux : </label>
				<input maxlength="2" size="2" id="reguMargeIsc" type="number" step="1" min="0" max="100" style="width: 70px" value="10" name="reguMargeIsc" /> %
			</div>
			<div class="form reguMargeVoc">
				<label>Marge de sécurité du Voc des panneaux : </label>
				<input maxlength="2" size="2" id="reguMargeVoc" type="number" step="1" min="0" max="100" style="width: 70px" value="20" name="reguMargeVoc" /> %
			</div>
		</div>
		
		<div class="part cable">
			<h2 class="titre cable">Câblage</h2>
			<p>On considère un câblage solaire souple en cuivre.</p>
			<div class="form cablePvRegu">
				<label>Distance (aller simple) entre les panneaux et le régulateur : </label>
				<input maxlength="2" size="2" id="distancePvRegu" type="number" step="0.5" min="0" max="100" style="width: 70px" value="8" name="distancePvRegu" /> m
			</div>
			<div class="form cableReguBat">
				<label>Distance (aller simple) entre le régulateur et les batteries : </label>
				<input maxlength="2" size="2" id="distanceReguBat" type="number" step="0.5" min="0" max="100" style="width: 70px" value="1.5" name="distanceReguBat" /> m
			</div>
			<div class="form cablageRho">
				<label>La résistivité du conducteur (rhô) mm&sup2;/m  : </label>
				<input maxlength="4" size="4" id="cablageRho" type="number" step="0.001" min="0" max="10" style="width: 70px" value="0.019" name="cablageRho" /> ohm
			</div>
			<div class="form cablagePtPourcent">
				<label>Chute de tension tolérable : </label>
				<input maxlength="2" size="2" id="cablagePtPourcent" type="number" step="0.1" min="0" max="100" style="width: 70px" value="1" name="cablagePtPourcent" /> %
			</div>
			<div class="form cablageRegleAparMm">
				<label>Ratio pour se prémunir de l'échauffement du câble : </label>
				<input maxlength="2" size="2" id="cablageRegleAparMm" type="number" step="0.1" min="0" max="100" style="width: 70px" value="6" name="cablageRegleAparMm" /> A/mm&sup2;
			</div>
		</div>
	</div>
	<div id="BlocSubmit"  class="form End">
		<input id="Reset" type="button" value="Remise à 0" name="reset" />
		<input id="donate" type="button" value="Soutenir, contribuer" />
		<input id="Submit" type="submit" value="Lancer le calcul" name="submit" />
		<a rel="tooltip" class="bulles"  title="Au minimum, vous devez : <br />* indiquer vos besoins électriques journaliers<br />* indiquer vos besoin en puissance électrique maximale  <br />* votre position (cliquez sur la carte)" id="SubmitBulles">Pourquoi ce n'est pas possible de cliquer sur Lancer le calcul ?</a>
	</div>
		<div class="form ModeDebug"><input type="checkbox" name="debug"  />Activer le mode transparent/debug pour mieux comprendre le fonctionnement</div>
</form>
		
     
	
<!-- Donate campagne -->
<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
	<span class="closeDonate close">&times;</span>
	<img id="DonateImg" src="./lib/reconnaissance.jpg" />
		<h1>Soutenez CaclPvAutonome</h1>
		<p style="font-size: 140%">Ce logiciel est <b>gratuit</b>, <b>libre de droit</b>, collaboratif et <b>indépendant</b> financièrement. Afin qu'il puisse le rester, nous avons besoin de votre soutien.</p>
		<p>Pour nous aider, vous pouvez aussi <a href="https://framagit.org/kepon/CalcPvAutonome" target="_blank">contribuer à son amélioration</a>, sa <a href="https://crwd.in/calcpvautonome" target="_blank">traduction</a>.</p>
		<p onclick="location.href='https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=MBDD2TG6D4TPC&lc=FR&item_name=CalcPvAutonome&item_number=calcpvautonome&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted';" class="DonateBouton" style="background-color: #4B82B8; color: #FFFFFF">Je souhaite faire un don sécurisé ponctuel avec Paypal</p>
		<p onclick="location.href='https://fr.liberapay.com/DavidMercereau/donate';" class="DonateBouton" style="background-color: #E6D815; color: #FFFFFF">Je souhaite faire un don récurent, libre et sécurisé avec liberapay</p>
		<p class="PasDonateButon closeDonate">Non merci, je souhaite seulement lancer le calcul</p>
		<p class="PasDonateButon closeDonate" >Je soutiens déjà CalcPvAutonome</p>
	</div>
</div>
<script type="text/javascript">
	/* Donate Campagne */
	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}
	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	$( "#Submit" ).click(function( event ) {
		if (getCookie("donate") == "") {
			event.preventDefault();
			donatePopupOn();
			$(".PasDonateButon").show();
		} 
	});
	$( "#donate" ).click(function() {
		$('.PasDonateButon').hide();
		donatePopupOn();		
	});
	$( ".closeDonate" ).click(function() {
		donatePopupOff();		
	});
	function donatePopupOn() {
		$( "#myModal" ).show();
	}
	function donatePopupOff() {
		$( "#myModal" ).hide();
		setCookie('donate', 'off', 5)
	}
	/*window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}*/
</script>		 

<!-- Détection des changement dans le formulaire -->
<input type="hidden" value="0" id="ModificationDuFormulaire" />

<script type="text/javascript">
// Détection des changement dans le formulaire
$( "input" ).change(function () {
	if ($( "#ModificationDuFormulaire" ).val() == 0) {
		$( "#ModificationDuFormulaire" ).val(1);		
	}
});
$( "select" ).change(function () {
	if ($( "#ModificationDuFormulaire" ).val() == 0) {
		$( "#ModificationDuFormulaire" ).val(1);		
	}
});
$('#DemandeCalcPvAutonome').click(function() {
	if ($( "#ModificationDuFormulaire" ).val() == 1) {
		return confirm("Vous avez commencé à remplir ce formulaire, vous allez perdre ces informations en continuant.");
	}
});

$( "#periode" ).change(function () {
	periodeChange();
});
$( "#ModPv" ).change(function () {
	modPvChange();
});
$( "#ModBat" ).change(function () {
	modBatChange();
});
$( "#ModRegu" ).change(function () {
	modReguChange();
});
$( "#tracking" ).change(function () {
	trackingChange();
});
$( "#U" ).change(function () {
	$( "#PersoReguVbat" ).text($( "#U" ).val());
});

// Bouton Submit activation / désactivation
function sumbitEnable() {
	if (($( "#lat" ).val() != '' && $( "#lon" ).val() != '' && $( "#Bj" ).val() > 0 && $( "#Pmax" ).val() > 0)
	|| ($( "#Ej" ).val() != '' 	&& $( "#Bj" ).val() > 0 && $( "#Pmax" ).val() > 0)) {
		$( "#Submit" ).prop('disabled', false);
		$( "#SubmitBulles" ).hide();
	} else {
		$( "#Submit" ).prop('disabled', true);
		$( "#SubmitBulles" ).show();
	}
}
$( "#Bj" ).change(function() {
	sumbitEnable();
	});
$( "#Pmax" ).change(function() {
	sumbitEnable();
	});
$( "#lat" ).change(function() {
	sumbitEnable();
});
$( "#lon" ).change(function() {
	sumbitEnable();
});
$( "#Ej" ).change(function() {
	sumbitEnable();
});

// Période
function periodeChange() {
	if ($( "#periode" ).val() == 'partielle') {
		$( ".periodeDebutFin" ).show();
	} else {
		$( ".periodeDebutFin" ).hide();
	}
}
// Changement de modèle de PV
function modPvChange() {
	if ($( "#ModPv" ).val() == 'auto') {
		$( ".form.TypePv" ).show();
		$( ".form.PersoPv" ).hide();
	} else if ($( "#ModPv" ).val() == 'perso') {
		$( ".form.TypePv" ).hide();
		$( ".form.PersoPv" ).show();
	} else {
		$( ".form.TypePv" ).hide();
		$( ".form.PersoPv" ).hide();
	}
}
// Changement de modèle de batterie
function modBatChange() {
	if ($( "#ModBat" ).val() == 'auto') {
		$( ".form.TypeBat" ).show();
		$( ".form.PersoBat" ).hide();
	} else if ($( "#ModBat" ).val() == 'perso') {
		$( ".form.TypeBat" ).hide();
		$( ".form.PersoBat" ).show();
	} else {
		$( ".form.TypeBat" ).hide();
		$( ".form.PersoBat" ).hide();
	}
}
// Changement modèle régulateur
function modReguChange() {
	if ($( "#ModRegu" ).val() == 'auto') {
		$( ".form.TypeRegu" ).show();
		$( ".form.PersoRegu" ).hide();
		if ($("#U option").length == 3) {
			$("#U").append('<option value="0">Auto</option>');
		}
	} else if ($( "#ModRegu" ).val() == 'perso') {
		$( ".form.TypeRegu" ).hide();
		$( ".form.PersoRegu" ).show();
		$("#U option[value='0']").remove();
		$( "#PersoReguVbat" ).text($( "#U" ).val());
	} else {
		$( ".form.TypeRegu" ).hide();
		$( ".form.PersoRegu" ).hide();
		if ($("#U option").length == 3) {
			$("#U").append('<option value="0">Auto</option>');
		}
	}
	
}
function trackingChange() {
	if ($('#tracking').is(':checked')) {
		$( ".form.orientation" ).hide();
		$( ".form.inclinaison" ).hide();
	} else {
		$( ".form.orientation" ).show();
		$( ".form.inclinaison" ).show();
	}
}
// Changement de niveau
$( "#Ni" ).change(function () {
	changeNiveau();
});
function changeNiveau() {
	// Debutant (1)
	if ($( "#Ni" ).val() == 1) {
		$( ".conseil.debutant" ).show();
		$( "#EjOnglet" ).hide();
		$( ".form.Ri" ).hide();
		$( ".form.Rb" ).hide();
		$( ".form.AUT" ).hide();
		$( ".form.U" ).hide();
		$( ".form.DD" ).hide();
		$( ".part.bat" ).hide();
		$( ".part.regu" ).hide();
		$( ".form.ModBat" ).hide();
		$( ".form.IbatCharge" ).hide();
		$( ".form.IbatDecharge" ).hide();
		$( ".form.ModPv" ).hide();
		$( ".form.TypePv" ).hide();
		$( ".part.cable" ).hide();
		$( ".form.ModeDebug" ).hide();
	// Eclaire (2)
	} else if  ($( "#Ni" ).val() == 2) {
		$( ".conseil.debutant" ).show();
		$( "#EjOnglet" ).show();
		$( ".form.Ri" ).hide();
		$( ".form.Rb" ).hide();
		$( ".form.AUT" ).show();
		$( ".form.U" ).hide();
		$( ".form.DD" ).hide();
		$( ".part.bat" ).show();
		$( ".part.regu" ).hide();
		$( ".form.ModBat" ).hide();
		$( ".form.IbatCharge" ).hide();
		$( ".form.IbatDecharge" ).hide();
		$( ".form.ModPv" ).hide();
		$( ".form.TypePv" ).show();
		$( ".part.cable" ).show();
		$( ".form.cablageRho" ).hide();
		$( ".form.cablagePtPourcent" ).hide();
		$( ".form.cablageRegleAparMm" ).hide();
		$( ".form.ModeDebug" ).hide();
	// Expert (3)
	} else if ($( "#Ni" ).val() == 3) {
		$( ".conseil.debutant" ).hide();
		$( "#EjOnglet" ).show();
		$( ".form.Ri" ).show();
		$( ".form.Rb" ).show();
		$( ".form.AUT" ).show();
		$( ".form.U" ).show();
		$( ".form.DD" ).show();
		$( ".part.bat" ).show();
		$( ".part.regu" ).show();
		$( ".form.ModBat" ).show();
		$( ".form.IbatCharge" ).show();
		$( ".form.IbatDecharge" ).show();
		$( ".form.ModPv" ).show();
		$( ".form.TypePv" ).show();
		$( ".part.cable" ).show();
		$( ".form.cablageRho" ).show();
		$( ".form.cablagePtPourcent" ).show();
		$( ".form.cablageRegleAparMm" ).show();
		$( ".form.ModeDebug" ).show();
	}
}

// Onglet carte zone
// http://dmouronval.developpez.com/tutoriels/javascript/mise-place-navigation-par-onglets-avec-jquery/
$(function() {
	$('#onglets').css('display', 'block');
	$('#onglets').click(function(event) {
		var actuel = event.target;
		if (!/li/i.test(actuel.nodeName) || actuel.className.indexOf('actif') > -1) {
			//alert(actuel.nodeName)
			return;
		}
		$(actuel).addClass('actif').siblings().removeClass('actif');
		setDisplay();
		$( "#Ej" ).val('');
	});
	function setDisplay() {
		var modeAffichage;
		$('#onglets li').each(function(rang) {
			modeAffichage = $(this).hasClass('actif') ? '' : 'none';
			$('.item').eq(rang).css('display', modeAffichage);
		});
	}
	setDisplay();
});

// Reset form
$( "#Reset" ).click(function() {
	window.location = 'https://calcpv.net/';
});

$(document).ready(function() {
	// Init formulaire 
	changeNiveau();
	modPvChange(); 
	modBatChange();
	modReguChange(); 
	periodeChange();
	trackingChange();
	sumbitEnable();	
}); 


</script>
        	</div>
	<div id="bg">
		<img src="./lib/solar-panel-1393880_1280.png" alt="">
	</div>
	<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  // tracker methods like "setCustomDimension" should be called before "trackPageView"
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.zici.fr/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '12']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
<!-- Userback 
<script>
    Userback = window.Userback || {};
    Userback.access_token = '1033|1178|xCRLoKh0EIYoUaky27RFtoVCauwNk8CRLtC9eTaSC9gxjA5mHW';

    (function(id) {
        if (document.getElementById(id)) {return;}
        var s = document.createElement('script');
        s.id = id;
        s.src = 'https://static.userback.io/widget/v1.js';
        var parent_node = document.head || document.body;
        parent_node.appendChild(s);
    })('userback-sdk');
</script>
-->
<!--Start of Tawk.to Script
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/592c470eb3d02e11ecc674d8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
-->
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?4qhkK9y8Eb2wRiKgYhYljX8bz72zH97b";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

<script type="text/javascript">
$(document).ready(function() {	
	/* infobulles http://javascript.developpez.com/tutoriels/javascript/creer-info-bulles-css-et-javascript-simplement-avec-jquery/ */
    // Sélectionner tous les liens ayant l'attribut rel valant tooltip
    $('a[rel=tooltip]').mouseover(function(e) {
		// Récupérer la valeur de l'attribut title et l'assigner à une variable
		var tip = $(this).attr('title');   
		// Supprimer la valeur de l'attribut title pour éviter l'infobulle native
		$(this).attr('title','');
		// Insérer notre infobulle avec son texte dans la page
		$(this).append('<div id="tooltip"><div class="tipBody">' + tip + '</div></div>');    
		// Ajuster les coordonnées de l'infobulle
		$('#tooltip').css('top', e.pageY - 30 );
		$('#tooltip').css('left', e.pageX - 145 );
		// Faire apparaitre l'infobulle avec un effet fadeIn
	}).mousemove(function(e) {
		// Ajuster la position de l'infobulle au déplacement de la souris
		$('#tooltip').css('top', e.pageY - 30 );
		$('#tooltip').css('left', e.pageX - 145 );
	}).mouseout(function() {
		// Réaffecter la valeur de l'attribut title
		$(this).attr('title',$('.tipBody').html());
		// Supprimer notre infobulle
		$(this).children('div#tooltip').remove();
	});
}); 
</script>
</body>
</html>

          </div>
        </div>
      </div>
    </div>
  </main>
  
  @endsection
