var scene = new THREE.Scene();
var camera;
var renderer= new THREE.WebGLRenderer();
var model;
var controls;
var room;

function movimiento_camara() {
	renderer.render(scene, camera.get_object());
}

function onWindowResize() {
	renderer.setSize(204, 204);
	camera.aspect(1);
	camera.updateProjectionMatrix();
}

function refresh(){
	requestAnimationFrame(refresh);
	renderer.render(scene, camera.get_object());
}

function loadModel(path){

	var oLoader = new THREE.OBJLoader();
	oLoader.load(path, function(object) {
		
		object.position.x= 0;
		object.position.y= 0;
		object.position.z= 0;

		object.scale.set(0.1, 0.1, 0.1);
		model = object;
		model.name= "modelo";
		scene.add(model);
	});
	refresh();
}

function removeModel(){
	scene.remove(model);
	controls = null;
	delete(controls);
	delete(model);
	refresh();
}

function main() {
	renderer.setClearColor(0x6E6E6E,1.0);	//0x6E6E6E
	//window.innerWidth/2.72, window.innerHeight/1.3
	//renderer.setSize(200, 200);
	renderer.shadowMapEnabled = true;
	renderer.setSize(204, 204);	


	var iluminacion= new Luz(0xafffff, 1, 500000);
	iluminacion.set_position(0, 50, 0);

	var iluminacion2= new Luz(0xafffff, 1, 500000);
	iluminacion.set_position(50, 0, 0);

	var iluminacion3= new Luz(0xafffff, 1, 500000);
	iluminacion.set_position(0, 0, 50);

	scene.add(iluminacion.get_object());
	scene.add(iluminacion2.get_object());
	scene.add(iluminacion3.get_object());

	// ************************* Camara ***************************** //
	camera= new Camara();
	camera.setPosition(0,3,10);
	camera.setUp(new THREE.Vector3(0,1,0));
	camera.setView(new THREE.Vector3(0,0,0));//room.getPosition());

	controls = new THREE.OrbitControls( camera.get_object() );
	controls.damping = 0.2;
	controls.addEventListener( 'change', movimiento_camara );
	
	refresh();
	
	window.addEventListener('resize', onWindowResize, false);
	$("#viewElement").append(renderer.domElement);
}