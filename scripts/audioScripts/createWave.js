/**
 * Created by Alba on 20/04/2016.
 */

var wavesurfer;

function handleAudioFile( files ){
    createAudioWave( files[0] );
}

function createAudioWave( file ){
    destroyAudioWave(); //Para evitar dobles cargas

    //Crear Wave
    wavesurfer = Object.create(WaveSurfer);
    wavesurfer.init({ //Inicializar parámetros de objeto
        container: '#waveform',
        waveColor: 'deepskyblue',
        progressColor: 'darkslateblue',
        cursorWidth: 2,
        //barWidth: 2, // Para que salga cn cuadritos
        //scrollParent: true // Para que se pueda desplazar con una barra espaciadora
    });
    wavesurfer.loadBlob( file ); //Cargar objeto de tipo "File" o "Blob"

    //Crear TimeLine
    wavesurfer.on('ready', function(){
        //Timeline
        var timeline = Object.create(WaveSurfer.Timeline);
        timeline.init({ //Inicializar parámetros de objeto
            wavesurfer: wavesurfer,
            container: '#waveform-timeline'
        });

        //Region
        // Add a region
        wavesurfer.addRegion({
            start: 0, // time in seconds
            end: 30, // time in seconds --- AQUI PONER LA DURACION DEL RECORRIDO DE LA CAMARA, CONTROLAR SI ES MAYOR
            color: 'hsla(275, 100%, 30%, 0.2)' //Color rosa-rojo
        });
    });

    $('#removeAudio').removeAttr('disabled');
    $('#playAudio').removeAttr('disabled');
    $('#pauseAudio').removeAttr('disabled');
    $('#stopAudio').removeAttr('disabled');
}

function destroyAudioWave() {
    if (typeof wavesurfer !== 'undefined') { // Si ya está creada, se elimina
        wavesurfer.destroy();

        // Truco para que no se quede activo el tooltip
        $('#removeAudio').tooltip('hide')
        //Desactivar los botones
        $('#removeAudio').attr('disabled', 'disabled');
        $('#playAudio').attr('disabled', 'disabled');
        $('#pauseAudio').attr('disabled', 'disabled');
        $('#stopAudio').attr('disabled', 'disabled');

        //Eliminar el contenido del sonido que no funciona porque no se actualiza despues
        //var inputAudio = $("#loadAudio");
        //inputAudio.replaceWith( inputAudio = inputAudio.clone( true ) );
        //inputAudio.val("");
    }
}

function playAudioWave() {
    if (typeof wavesurfer !== 'undefined') { // Si ya está creada
        wavesurfer.play();
    }
}

function pauseAudioWave() {
    if (typeof wavesurfer !== 'undefined' && wavesurfer.isPlaying()) { // Si ya está creada y sonando
        wavesurfer.playPause();
    }
}

function stopAudioWave() {
    if (typeof wavesurfer !== 'undefined') { // Si ya está creada
        wavesurfer.stop();
    }
}
