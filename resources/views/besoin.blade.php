<!DOCTYPE html PUBLIC >
	
<head>
	<title>[Solar walet] Dimensionner son installation photovoltaïque</title>
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
		

	<div id="page-wrap">
		<h1>Calculer ses besoins électriques journaliers</h1><!--<p style="padding : 5px 10px; background : #FFFF99; border : 1px dotted #FFCC33;">
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



<!--<p style="padding : 5px 10px; background : #FFFF99; border : 1px dotted #FFCC33;">
	<b>Ce logiciel est libre, colaboratif et indépendant financièrement. Afin qu\'il le reste, n\'hésitez pas à <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=MBDD2TG6D4TPC&lc=FR&item_name=CalcPvAutonome&item_number=calcpvautonome&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted" target="_blank">faire un don</a></b>
</p>-->
<!--
<p style="padding : 5px 10px; background : #FFFF99; border : 1px dotted #FFCC33;">
	<b>La version 4.3 que vous utilisez est juste sortie, en cas de bug n'hésitez pas à vous diriger vers l'<a href="http://calcpv.net/v4.3/">ancienne version</a> (plus stable) </b>
</p>
-->
<!--<p>Vous pouvez donner votre avis sur la méthode de calcul, l'orthographe, les idées de fonctionnalités qui vous manque, la couleur qui vous pique les yeux etc... <a href="http://david.mercereau.info/contact/" target="_blank">Envoyez tout ça par email</a> ou directement sur le <a href="https://framagit.org/kepon/CalcPvAutonome">dépôt Git</a> du projet</p>-->

<script src="./lib/jquery-ui.js"></script> 

<p>Pour connaître la consommation (en Watt) de vos appareils électriques vous pouvez : 
<ul>
	<li>Regarder sur la notice ou sur l'appareil lui même parfois ;</li>
	<li>Vous procurer un Wattmètre () il se branche entre la prise et votre appareil et vous indique précisément la consommation ;</li>
</ul></p>
<p>Pour dimensionner une installation photovoltaïque autonome, réfléchissez comme si c'était l'hiver (le temps d'éclairage est plus long par exemple, le réfrigérateur est peut-être débranché du fait qu'il fait déjà froid dehors...) :</p>
<ul>
	<li><a href="https://conso.calcpv.net/?EquiNom1=Ordinateur%20Portable&EquiPuis1=45&EquiNb1=1&EquiUti1=6&EquiPmax1=1&EquiNom2=Aspirateur%20Classe%20A&EquiPuis2=700&EquiNb2=1&EquiUti2=0.25&EquiNom3=Ampoule%20Led&EquiPuis3=7&EquiNb3=4&EquiUti3=7&EquiNom4=Machine%20%C3%A0%20coudre&EquiPuis4=100&EquiNb4=1&EquiUti4=0.5&EquiNom5=Mini%20cha%C3%AEne%20(musique)&EquiPuis5=16&EquiNb5=1&EquiUti5=6&EquiPmax5=1&EquiNom6=Recharge%20t%C3%A9l%C3%A9phone%20portable&EquiPuis6=6&EquiNb6=1&EquiUti6=2&EquiPmax6=1&EquiNom7=Pompe%20immerg%C3%A9e&EquiPuis7=400&EquiNb7=1&EquiUti7=0.5&EquiPmax7=1&&p=CalcConsommation&equiIncrement=7">Premier exemple sobre</a></li>
	<li><a href="https://conso.calcpv.net/?EquiNom1=Aspirateur%20Classe%20A&EquiPuis1=700&EquiNb1=1&EquiUti1=0.25&EquiPmax1=1&EquiNom2=Cong%C3%A9lateur%20Bahut%20200L%20Classe%20A&EquiPuis2=370&EquiNb2=1&EquiUti2=24&EquiTotalInput2=800&EquiPmax2=1&EquiNom3=Ampoule%20%C3%A0%20incandescence&EquiPuis3=75&EquiNb3=3&EquiUti3=8&EquiPmax3=1&EquiNom4=Ordinateur%20de%20bureau%20+%20%C3%A9cran&EquiPuis4=140&EquiNb4=1&EquiUti4=0&EquiNom5=T%C3%A9l%C3%A9phone%20fixe&EquiPuis5=2&EquiNb5=1&EquiUti5=24&EquiTotalInput5=48&EquiPmax5=1&EquiNom6=Box%20Internet&EquiPuis6=20&EquiNb6=1&EquiUti6=24&EquiTotalInput6=480&EquiPmax6=1&EquiNom7=T%C3%A9l%C3%A9&EquiPuis7=70&EquiNb7=1&EquiUti7=0&EquiPmax7=1&EquiNom8=Rasoir&EquiPuis8=5&EquiNb8=1&EquiUti8=0.08&&p=CalcConsommation&equiIncrement=8">Deuxième exemple</a></li>
</ul>
<form id="formEqui" method="post" action="#">

<!-- Boutton -->
<div style="margin-bottom: 10px">
	<input id="new" type="button" value="Nouveau" />
	<input id="open" type="button" value="Ouvrir" />
	<input id="saveAs" type="button" value="Enregistrer sous..." /></div>


<input type="hidden" value="" name="conso_id" />
<table>
	<tr>
		<th>Equipement</th>
		<th>Puissance (Watt)</th>
		<th>Allumer<br />simultanément</th>
		<th>Nombre</th>
		<th>Temps d'utilisation<br /> quotidien</th>
		<th>Calcul consommation<br /> automatique</th>
		<th>Consommation <br />quotidienne</th>
		<th>.</th>
	</tr>
</table>

<p id="resultatConsoTotal">Vos besoins électriques journaliers : <b><span id="ConsoTotal">0</span> Wh/j</b>
<br />Votre besoin en puissance électrique maximum : <b><span id="PmaxTotal">0</span> W</b> '<a rel="tooltip" class="bulles" title="Somme de la puissance des appareils suceptibles d'être allumés en même temps OU valeur de l'appareil le plus puissant si celui-ci n'est pas branché en même temps que le reste">?</a>
<br /><a href="" id="hrefCalcPvAutonome">Cliquer ici pour indiquer ces valeurs pour le calcul <br /> de votre installation photovoltaïque</a></p>

<p><input type="button" class="add" value="Ajouter une ligne vide" /> 
<select id="addEquiModele" name="addEquiModele">
<option value="0">Ajouter une ligne selon un modèle...</option>
<option value="7||">Ampoule Led</option><option value="75||">Ampoule à incandescence</option><option value="15||">Ampoule fluocompacte</option><option value="45||">Ordinateur Portable</option><option value="140||">Ordinateur de bureau + écran</option><option value="70||">Télé</option><option value="16||">Mini chaîne (musique)</option><option value="6||">Recharge téléphone portable</option><option value="2|24|48">Téléphone fixe</option><option value="20|24|480">Box Internet</option><option value="700||">Aspirateur Classe A</option><option value="1200||">Four micro-onde</option><option value="250|24|600">Réfrigérateur 200L Classe A</option><option value="78|24|360">Petit réfrigérateur 70L Classe A</option><option value="370|24|800">Congélateur Bahut 200L Classe A</option><option value="2000||">Bouilloire</option><option value="1333||">Cafetière</option><option value="800||">Fer à repasser</option><option value="700||">Grille pain</option><option value="2300||">Plaque cuisson électrique</option><option value="2200||">Lave linge standard</option><option value="300||">Lave linge sans chauff.</option><option value="2500||">Lave vaiselle standard</option><option value="300||">Lave vaiselle sans chauff.</option><option value="100||">Machine à coudre</option><option value="5||">Rasoir</option><option value="500||">Sèche-cheveux</option><option value="600||">Perceuse</option><option value="750||">Scie sauteuse</option><option value="1150||">Scie circulaire</option><option value="270||">Ponceuse</option><option value="450||">Rabot</option><option value="170||">Surpresseur</option><option value="400||">Pompe immergée</option></select> <a rel="tooltip" class="bulles" title="Les valeurs des modèles sont des estimations indicatives, afin d'être précis nous vous encourageons à vous procurer un Wattmètre pour mesurer la consommation de chacun de vos appareils">?</a></p>


<!-- hidden -->
<input type="hidden" value="0" name="equiIncrement" id="equiIncrement" />

<!-- Fonction désactivé
<p>
	<input type="button" value="Partager/Mémoriser ce tableau" id="share" />
</p>
-->

<!-- Save poup -->
<div id="savePopup" class="modal">
	<div class="modal-content">
	<span class="closeSavePopup close">&times;</span>
		<h1>Enregistrer</h1>
		<p>Ces données seront supprimées après 900 jours sans consultation</p>
		<p><label>Nom de ce tableau : </label><input type="name" name="name" value="" required />
		<p><label>Votre email : </label><input type="email" name="email" value="" required /></p>
		<p><input type="button" class="closeSavePopup" value="Annuler"><input type="submit" name="saveAs" value="Enregistrer" /></p>
	</div>
</div>

</form>

<!-- Open popup -->
<div id="openPopup" class="modal">
	<div class="modal-content">
	<span class="closeOpenPopup close">&times;</span>
		<form method="post" action="#">
			<h1>Ouvrir</h1>
			<p>Vous allez recevoir un email avec des liens vers les tableaux que vous avez enregistrés</p>
			<p><label>Votre email : </label><input type="email" name="email" value="" required /></p>
			<p><input type="button" class="closeOpenPopup" value="Annuler"><input type="submit" name="open" value="Envoi moi" /></p>
		</form>
	</div>
</div>


<script type="text/javascript">

// Copy link   
$('#idpub-copy').on('click', function() {
	$('#idpub-to-copy').select();
	document.execCommand( 'copy' );
	return false;
} );
$('#idadmin-copy').on('click', function() {
	$('#idadmin-to-copy').select();
	document.execCommand( 'copy' );
	return false;
} );
$('#new').on('click', function() {
	document.location.href="https://conso.calcpv.net/"
} );
	
function ajoutUneLigne() {
	$('#equiIncrement').val(parseInt($('#equiIncrement').val(),10)+1);
	$('table').append( 
        [
		'\n<tr>', 
			'<td>', 
				'<input class="nom" type="text" placeholder="Equipement ' + $('#equiIncrement').val() + '" name="EquiNom' + $('#equiIncrement').val() + '" id="EquiNom' + $('#equiIncrement').val() + '" />', 
			'</td>', 
			'<td>', 
				'<input class="Puis" onChange="calcTableau();" type="number"  style="width: 80px;" value="0" min="0" max="99999" name="EquiPuis' + $('#equiIncrement').val() + '" id="EquiPuis' + $('#equiIncrement').val() + '" />W', 
			'</td>', 
			'<td>', 
				'<input class="EquiPmax" onChange="calcTableau();" type="checkbox" name="EquiPmax' + $('#equiIncrement').val() + '" id="EquiPmax' + $('#equiIncrement').val() + '" checked="checked" />',
				'<a rel="tooltip" class="bulles" title="Cocher tous les appareils suceptibles d`être allumés en même temps (exemple : un ordinateur, le réfrigérateur, l\'ampoule du salon. Par contre la perceuse non, préférez débrancher votre ordinateur si vous avez à l\'allumer">?</a>',
			'</td>', 
			'<td>', 
				'<input class="Nb" onChange="calcTableau();"  type="number" style="width: 60px;" value="1"  min="1" max="99" name="EquiNb' + $('#equiIncrement').val() + '" id="EquiNb' + $('#equiIncrement').val() + '" />', 
			'</td>', 
			'<td>', 
				'<select class="Uti" onChange="calcTableau();"  id="EquiUti' + $('#equiIncrement').val() + '" name="EquiUti' + $('#equiIncrement').val() + '">', 
					'<option value="0">0</option>',
					'<option value="0.08">5 m</option>', 
					'<option value="0.25">15 m</option>', 
					'<option value="0.5">30 m</option>', 
					'<option value="0.75">45 m</option>', 
					'<option value="1">1 H</option>', 
					'<option value="1.5">1 H 30</option>', 
					'<option value="2">2 H</option>', 
					'<option value="2.5">2 H 30</option>', 
					'<option value="3">3 H</option>', 
					'<option value="4">4 H</option>', 
					'<option value="5">5 H</option>', 
					'<option value="6">6 H</option>', 
					'<option value="7">7 H</option>', 
					'<option value="8">8 H</option>', 
					'<option value="9">9 H</option>', 
					'<option value="10">10 H</option>', 
					'<option value="11">11 H</option>', 
					'<option value="12">12 H</option>', 
					'<option value="16">16 H</option>', 
					'<option value="20">20 H</option>', 
					'<option value="24">24 H</option>', 
				'</select>', 
			'</td>', 
			'<td>', 
				'<input onChange="calcTableau();" class="AutoEquiTotal" type="checkbox" name="AutoEquiTotal' + $('#equiIncrement').val() + '" id="AutoEquiTotal' + $('#equiIncrement').val() + '" checked="checked" />',
				'<a rel="tooltip" class="bulles" title="Coché : le calcul de consommation quotidienne se fera automatiquement<br />Décoché : la consommation quotidienne est à indiquer (pratique pour un réfrigérateur qui est branché 24/24 mais qui ne consomme pas sa puissance 24/24, il s\'alume uniquement si la température monte à l\'intérieur">?</a>',
			'</td>', 
			'<td>', 
				'<p>',
					'<input onChange="calcTableau();"  class="EquiTotal" step="0.01" type="number"  style="width: 80px;" value="0" min="0,01" max="99999" name="EquiTotalInput' + $('#equiIncrement').val() + '" id="EquiTotalInput' + $('#equiIncrement').val() + '" />',
					'<span id="EquiTotal' + $('#equiIncrement').val() + '">0</span>', 
					' Wh/j <a rel="tooltip" class="bulles" title="Le calcul est : Puissance (W) * Temps (en heure) * Nombre = Wh/j (Watt heure par jour)">?</a>',
				'</p>', 
			'</td>', 
			'<td>', 
				'<img src="./lib/trash.png" width="30" class="remove" />', 
			'</td>', 
		'</tr>'
        ].join('') //un seul append pour limiter les manipulations directes du DOM
    );  
    
}

// Ajout d'une ligne dans le tableau
$('.add').on('click', function() {    
	ajoutUneLigne();
	autocomplete();
	calcTableau();
});
// Suppression d'une ligne dans le tableau
$('table').on('click', '.remove', function() {
	var $this = $(this);
	$this.closest('tr').remove();   
	calcTableau(); 
});

// Ajout d'un modèle d'équipement
$('#addEquiModele').change(function() {
	if ($('#addEquiModele').val() != 0) {
		// Split les data du select
		var ModeleData = $('#addEquiModele').val().split('|');
		
		// Utilisation
		if (ModeleData[1] != '') {
			var uti = ModeleData[1];
		} else {
			var uti = 0;
		}
		if (ModeleData[2] != '') {
			var calcauto = 0;
			var pj = ModeleData[2];
		} else {
			var calcauto = 1;
			var pj = null
		}
		chargeEquipement($('#addEquiModele option:selected').html(), ModeleData[0], 1, 1, uti, calcauto, pj);
		
		$('#addEquiModele').val(0);

	}
});

// Contrib quentin@electree.eu
// récupère une liste d'équipement en bdd et propose une autocompletion lors de l'ajout d'un materiel
function autocomplete() {
	let availableTags = [{"id":0,"value":"Ampoule Led","puissance":"7","consommation_quotidienne":null,"temps_utilisation":null},{"id":1,"value":"Ampoule \u00e0 incandescence","puissance":"75","consommation_quotidienne":null,"temps_utilisation":null},{"id":2,"value":"Ampoule fluocompacte","puissance":"15","consommation_quotidienne":null,"temps_utilisation":null},{"id":3,"value":"Ordinateur Portable","puissance":"45","consommation_quotidienne":null,"temps_utilisation":null},{"id":4,"value":"Ordinateur de bureau + \u00e9cran","puissance":"140","consommation_quotidienne":null,"temps_utilisation":null},{"id":5,"value":"T\u00e9l\u00e9","puissance":"70","consommation_quotidienne":null,"temps_utilisation":null},{"id":6,"value":"Mini cha\u00eene (musique)","puissance":"16","consommation_quotidienne":null,"temps_utilisation":null},{"id":7,"value":"Recharge t\u00e9l\u00e9phone portable","puissance":"6","consommation_quotidienne":null,"temps_utilisation":null},{"id":8,"value":"T\u00e9l\u00e9phone fixe","puissance":"2","consommation_quotidienne":"48","temps_utilisation":"24"},{"id":9,"value":"Box Internet","puissance":"20","consommation_quotidienne":"480","temps_utilisation":"24"},{"id":10,"value":"Aspirateur Classe A","puissance":"700","consommation_quotidienne":null,"temps_utilisation":null},{"id":11,"value":"Four micro-onde","puissance":"1200","consommation_quotidienne":null,"temps_utilisation":null},{"id":12,"value":"R\u00e9frig\u00e9rateur 200L Classe A","puissance":"250","consommation_quotidienne":"600","temps_utilisation":"24"},{"id":13,"value":"Petit r\u00e9frig\u00e9rateur 70L Classe A","puissance":"78","consommation_quotidienne":"360","temps_utilisation":"24"},{"id":14,"value":"Cong\u00e9lateur Bahut 200L Classe A","puissance":"370","consommation_quotidienne":"800","temps_utilisation":"24"},{"id":15,"value":"Bouilloire","puissance":"2000","consommation_quotidienne":null,"temps_utilisation":null},{"id":16,"value":"Cafeti\u00e8re","puissance":"1333","consommation_quotidienne":null,"temps_utilisation":null},{"id":17,"value":"Fer \u00e0 repasser","puissance":"800","consommation_quotidienne":null,"temps_utilisation":null},{"id":18,"value":"Grille pain","puissance":"700","consommation_quotidienne":null,"temps_utilisation":null},{"id":19,"value":"Plaque cuisson \u00e9lectrique","puissance":"2300","consommation_quotidienne":null,"temps_utilisation":null},{"id":20,"value":"Lave linge standard","puissance":"2200","consommation_quotidienne":null,"temps_utilisation":null},{"id":21,"value":"Lave linge sans chauff.","puissance":"300","consommation_quotidienne":null,"temps_utilisation":null},{"id":22,"value":"Lave vaiselle standard","puissance":"2500","consommation_quotidienne":null,"temps_utilisation":null},{"id":23,"value":"Lave vaiselle sans chauff.","puissance":"300","consommation_quotidienne":null,"temps_utilisation":null},{"id":24,"value":"Machine \u00e0 coudre","puissance":"100","consommation_quotidienne":null,"temps_utilisation":null},{"id":25,"value":"Rasoir","puissance":"5","consommation_quotidienne":null,"temps_utilisation":null},{"id":26,"value":"S\u00e8che-cheveux","puissance":"500","consommation_quotidienne":null,"temps_utilisation":null},{"id":27,"value":"Perceuse","puissance":"600","consommation_quotidienne":null,"temps_utilisation":null},{"id":28,"value":"Scie sauteuse","puissance":"750","consommation_quotidienne":null,"temps_utilisation":null},{"id":29,"value":"Scie circulaire","puissance":"1150","consommation_quotidienne":null,"temps_utilisation":null},{"id":30,"value":"Ponceuse","puissance":"270","consommation_quotidienne":null,"temps_utilisation":null},{"id":31,"value":"Rabot","puissance":"450","consommation_quotidienne":null,"temps_utilisation":null},{"id":32,"value":"Surpresseur","puissance":"170","consommation_quotidienne":null,"temps_utilisation":null},{"id":33,"value":"Pompe immerg\u00e9e","puissance":"400","consommation_quotidienne":null,"temps_utilisation":null}];
	console.log(availableTags);
	$('input.nom').autocomplete({
		source: availableTags,
		select: function(event, ui) {
			console.log(ui);
			$(this).closest("tr").find("input.Puis").val(ui.item.puissance);
			if (ui.item.temps_utilisation != null) {
	            $(this).closest("tr").find("select.Uti").val(ui.item.temps_utilisation);
	        } else {
	            $(this).closest("tr").find("select.Uti").val(0);
	        }
	        if (ui.item.consommation_quotidienne != null) {
	            $(this).closest("tr").find("input.AutoEquiTotal").prop('checked', false);
	            $(this).closest("tr").find("input.EquiTotal").val(ui.item.consommation_quotidienne);
	            $(this).closest("tr").find("span.consobdd").text(ui.item.consommation_quotidienne);

	        } else {
	            $(this).closest("tr").find("input.AutoEquiTotal").prop('checked', true);
	        }
			calcTableau();
		}
	});
	};

// Charger une ligne d'équipement
function chargeEquipement (name, p, pmax, nb, uti, calcauto, pj) {
	ajoutUneLigne();
	$( '#EquiNom'+$('#equiIncrement').val()).val(name);
	$( '#EquiPuis'+$('#equiIncrement').val()).val(p);
	if (pmax == 0 || pmax == false) {
		$( '#EquiPmax'+$('#equiIncrement').val()).prop('checked', false);
	}  else {
		$( '#EquiPmax'+$('#equiIncrement').val()).prop('checked', true);
	}
	$( '#EquiNb'+$('#equiIncrement').val()).val(nb);
	if (uti != null || uti != '') {
		$( '#EquiUti'+$('#equiIncrement').val()).val(uti);
	}
	if (calcauto == 0 || calcauto == false) {
		$( '#AutoEquiTotal'+$('#equiIncrement').val()).prop('checked', false);
	} else {
		$( '#AutoEquiTotal'+$('#equiIncrement').val()).prop('checked', true);
	}
	if (pj != null || pj != '') {
		$( '#EquiTotalInput'+$('#equiIncrement').val()).val(pj);
	}
	autocomplete();
	calcTableau();
}


// Re-calcule le tableau
function calcTableau() {
	var ConsoTotal = 0;
	var PmaxTotal = 0;
	var PmaxNbEqui = 0;
	var PmaxEquiRecord = 0;
	for (var idEqui = 1; idEqui <= parseInt($('#equiIncrement').val(),10); idEqui++) {
		var ConsoEqui = 0;
		if ($( '#EquiNom'+idEqui).length) {
			// Consommation 
			ConsoEqui=parseInt($('#EquiPuis'+idEqui).val(),10)*parseInt($('#EquiNb'+idEqui).val(),10)*$('#EquiUti'+idEqui).val(),10;
			// Automatique
			if ($('#AutoEquiTotal'+idEqui).is(':checked')) {
				$( '#EquiTotalInput'+idEqui).hide();
				$( '#EquiTotal'+idEqui).show();
				$( '#EquiTotalInput'+idEqui).val(ConsoEqui);
				$( '#EquiTotal'+idEqui).text(ConsoEqui);
				$( '#EquiNb'+idEqui).prop('disabled',false);
				$( '#EquiUti'+idEqui).prop('disabled',false);
			// Manuel
			} else {
				//console.log('Equipement ' + idEqui + ' Mode Manuel');
				$('#EquiTotalInput'+idEqui).show();
				$('#EquiTotal'+idEqui).hide();
				$('#EquiTotal'+idEqui).text(ConsoEqui);
				$('#EquiNb'+idEqui).prop('disabled',true);
				$('#EquiUti'+idEqui).prop('disabled',true);
				ConsoEqui=parseInt($('#EquiTotalInput'+idEqui).val());
			}
			//console.log('Equipement ' + idEqui + ' conso = ' + ConsoEqui);
			ConsoTotal = ConsoTotal + ConsoEqui;
			// Si 24/24, on coche alumage simultané
			if ($('#EquiUti'+idEqui).val() == '24') {
				$('#EquiPmax'+idEqui).prop('checked', true);
			}
			// alumage simultané coché : : 
			if ($('#EquiPmax'+idEqui).is(':checked')) {
				//console.log('Puissance Max coché !');
				PmaxTotal = PmaxTotal + parseInt($('#EquiPuis'+idEqui).val(),10);
				PmaxNbEqui++;
			}
			// Nouveau record de consommation ?
			if (PmaxEquiRecord < parseInt($('#EquiPuis'+idEqui).val(),10)) {
				PmaxEquiRecord = parseInt($('#EquiPuis'+idEqui).val(),10)
			}
		}
	}
	//console.log('Conso total : ' + ConsoTotal);
	//console.log('Puissance Max total : ' + PmaxTotal);
	$( '#ConsoTotal').text(ConsoTotal);
	if (PmaxNbEqui == 0 || PmaxTotal < PmaxEquiRecord) {
		PmaxTotal = PmaxEquiRecord
	}
	$( '#PmaxTotal').text(PmaxTotal);
	$('#hrefCalcPvAutonome').attr('href', 'https://calcpv.net/'+'?Bj='+Math.round(ConsoTotal)+'&Pmax='+Math.round(PmaxTotal));
	
	 shareSocial(); }

// Bouton de partage
function shareSocial() {
	// Liste le formulaire 
	var URLconstruction = '?';
	var nbPourDeVrai=0;
	for (var idEqui = 1; idEqui <= parseInt($('#equiIncrement').val(),10); idEqui++) {
		if ($('#EquiNom'+idEqui).length) {
			nbPourDeVrai++;
			URLconstruction=URLconstruction + 'EquiNom'+nbPourDeVrai+'=' + $('#EquiNom'+idEqui).val()+'&EquiPuis'+nbPourDeVrai+'=' + $('#EquiPuis'+idEqui).val()+'&EquiNb'+nbPourDeVrai+'=' + $('#EquiNb'+idEqui).val()+'&EquiUti'+nbPourDeVrai+'=' + $('#EquiUti'+idEqui).val()+'&';
			if (!$('#AutoEquiTotal'+idEqui).is(':checked')) {
				URLconstruction=URLconstruction + 'EquiTotalInput'+nbPourDeVrai+'=' + $('#EquiTotalInput'+idEqui).val()+'&';
			}
			if (!$('#EquiPmax'+idEqui).is(':checked')) {
				URLconstruction=URLconstruction + 'EquiPmax'+nbPourDeVrai+'=0&';
			}
		}
	}
	
	URLconstruction=URLconstruction+'&from=CalcPvAutonome';	URLconstruction=URLconstruction+'&equiIncrement='+nbPourDeVrai;
	
	$( "#shareUrl" ).val('https://conso.calcpv.net/'+URLconstruction);
	UrlForShare=encodeURIComponent("https://conso.calcpv.net/"+URLconstruction);
	
	
}


// init
$(document).ready(function() {
	
			// Ajout de la première ligne si pas enregistré
		ajoutUneLigne();
		
		calcTableau();
	autocomplete();

	// Check modification
	$( "#save" ).attr("disabled", "disabled");
			$( "#new" ).attr("disabled", "disabled");
		$( "input" ).change(function() {
		$( "#save" ).removeAttr("disabled");    
		$( "#new" ).removeAttr("disabled");
	}); 
}); 

$( "#save" ).click(function() {
	$( "#formEqui" ).submit();
});
$( "#saveAs" ).click(function() {
	savePopupOn();
});
$( "#open" ).click(function() {
	openPopupOn();
});
$( ".closeSavePopup" ).click(function() {
	savePopupOff();		
});
$( ".closeOpenPopup" ).click(function() {
	openPopupOff();		
});
function savePopupOn() {
	$( "#savePopup" ).show();
}
function savePopupOff() {
	$( "#savePopup" ).hide();
}
function openPopupOn() {
	$( "#openPopup" ).show();
}
function openPopupOff() {
	$( "#openPopup" ).hide();
}


</script>


<script type="text/javascript"></script>


        

		

		
		
	</div>		
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
