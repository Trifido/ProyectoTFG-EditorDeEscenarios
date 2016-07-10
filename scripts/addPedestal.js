
function addAlturaPedestal( alturaPedestal ){
	if(alturaPedestal!="" && alturaPedestal>-1 && elementoSeleccionado!=null){
		elementoSeleccionado.setAttributeNS(null, 'pedestalAlto', parseFloat(alturaPedestal));
	}
	updateInfoForm("campPedAlto");
}

function addAnchuraPedestal( anchuraPedestal ){
	if(anchuraPedestal!="" && anchuraPedestal>-1 && elementoSeleccionado!=null){
		elementoSeleccionado.setAttributeNS(null, 'pedestalAncho', parseFloat(anchuraPedestal));
	}
	updateInfoForm("campPedAncho");
}

function addAlturaCuadro( alturaCuadro ){
	if(alturaCuadro!="" && alturaCuadro>-1 && elementoSeleccionado!=null){
		elementoSeleccionado.setAttributeNS(null, 'alturaCuadro', parseFloat(alturaCuadro));
	}
	updateInfoForm("campCuadAlto");
}

function addAlturaCamaraFP( altura ){
	if(altura!="" && altura>-1){
		document.getElementById('VRcamera_level').childNodes[0].setAttributeNS(null, 'altura', parseFloat(altura));
	}
}

function addZancadaCamaraFP( zancada ){
	if(zancada!="" && zancada>-1){
		document.getElementById('VRcamera_level').childNodes[0].setAttributeNS(null, 'zancada', parseFloat(zancada));
	}
}