<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Add Map</title>
    <script>
        let map;
        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
                scrollwheel: true,
            });

            const uluru = { lat: -34.397, lng: 150.644 };
            let marker = new google.maps.Marker({
                position: uluru,
                map: map,
                draggable: true
            });

            google.maps.event.addListener(marker,'position_changed',
                function (){
                    let lat = marker.position.lat()
                    let lng = marker.position.lng()
                    $('#lat').val(lat)
                    $('#lng').val(lng)
                })

            google.maps.event.addListener(map,'click',
            function (event){
                pos = event.latLng
                marker.setPosition(pos)
            })
        }
    </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5jX5gkS-4saYjcmuu-RrAywJVJf0MxDE&callback=initMap"
                        type="text/javascript"></script> 

         
  </head>
  
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map" style="height:400px; width: 800px;" class="my-3"></div><br><br>
    <input type="text" class="form-control" placeholder="lat" name="lat" id="lat">
    <input type="text" class="form-control" placeholder="lng" name="lng" id="lng">
    
  </body>
</html>  -->



<!---  Map second code start  -->
<!-- <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtgHh9PKOsMcsPAP1u-jYDhHUpZj4XjWI&callback=initialize"
    defer
></script>
<script type="text/javascript">
var map;
var marker;
var myLatlng = new google.maps.LatLng(20.268455824834792,85.84099235520011);
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();
function initialize(){
    var mapOptions = {
        zoom: 18,
        center:myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

    marker = new google.maps.Marker({
        map: map,
        position: myLatlng,
        draggable: true
    });

    geocoder.geocode({'latLng': myLatlng }, function(results, status){
        if (status == google.maps.GeocoderStatus.OK) {
            if(results[0]) {
            $('#latitude,#longitude').show();
            $('#latitude').val(marker.getPosition().lat());
            $('#longitude').val(marker.getPosition().lng());
            // infowindow.setContent(results[0].formatted_address);
            infowindow.open(map, marker);
            }
        }
    });
    google.maps.event.addListener(marker, 'dragend', function() {
        geocoder.geocode({'latLng': marker.getPosition()}, function(results, status)){
            if (status == google.maps.GeocoderStatus.OK) {
            if(results[0]) {
            $('#latitude').val(marker.getPosition().lat());
            $('#longitude').val(marker.getPosition().lng());
            // infowindow.setContent(results[0].formatted_address);
            infowindow.open(map, marker); 
        }
    }
});
});
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<style>
   #myMap {
    height: 500px;
    width: 800px;
   } 
</style>
<div id="myMap"></div>
        <input type="text" id="latitude" placeholder="Latitude">
        <input type="text" id="longitude" placeholder="Longitude"> -->
<!---  Map second code  End  -->
        






<!---   Audio Recorder Code   Start---->
<!-- <!doctype html>
<html lang="en">
    <head>
        <title>Tutorial &gt; Audio Recorder</title>
        <link rel="canonical" href="https://markjivko.com/tutorials/B3wWIsNHPk4/">
        <meta charset="UTF-8">
        <meta name="Author" content="Mark Jivko">
        <meta name="Keywords" content="js,audio recorder">
        <meta name="Description" content="Recording audio with HTML 5 and JavaScript">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/ico" href="https://markjivko.com/favicon.ico">
        <style type="text/css">
            body {
                position: absolute;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                    -ms-flex-pack: center;
                        justify-content: center;
                -webkit-box-align: center;
                -webkit-align-items: center;
                    -ms-flex-align: center;
                        align-items: center;
                height: 100%;
                width: 100%;
                margin: 0;
            }
            .holder {
                background-color: #4c474c;
                background-image: -webkit-gradient(linear, left bottom, left top, from(#4c474c), to(#141414));
                background-image: -o-linear-gradient(bottom, #4c474c 0%, #141414 100%);
                background-image: linear-gradient(0deg, #4c474c 0%, #141414 100%);
                border-radius: 50px;
            }
            [data-role="controls"] > button {
                margin: 50px auto;
                outline: none;
                display: block;
                border: none;
                background-color: #D9AFD9;
                background-image: -webkit-gradient(linear, left bottom, left top, from(#D9AFD9), to(#97D9E1));
                background-image: -o-linear-gradient(bottom, #D9AFD9 0%, #97D9E1 100%);
                background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%);
                width: 100px;
                height: 100px;
                border-radius: 50%;
                text-indent: -1000em;
                cursor: pointer;
                -webkit-box-shadow: 0px 5px 5px 2px rgba(0,0,0,0.3) inset, 
                    0px 0px 0px 30px #fff, 0px 0px 0px 35px #333;
                        box-shadow: 0px 5px 5px 2px rgba(0,0,0,0.3) inset, 
                    0px 0px 0px 30px #fff, 0px 0px 0px 35px #333;
            }
            [data-role="controls"] > button:hover {
                background-color: #ee7bee;
                background-image: -webkit-gradient(linear, left bottom, left top, from(#ee7bee), to(#6fe1f5));
                background-image: -o-linear-gradient(bottom, #ee7bee 0%, #6fe1f5 100%);
                background-image: linear-gradient(0deg, #ee7bee 0%, #6fe1f5 100%);
            }
            [data-role="controls"] > button[data-recording="true"] {
                background-color: #ff2038;
                background-image: -webkit-gradient(linear, left bottom, left top, from(#ff2038), to(#b30003));
                background-image: -o-linear-gradient(bottom, #ff2038 0%, #b30003 100%);
                background-image: linear-gradient(0deg, #ff2038 0%, #b30003 100%);
            }
            [data-role="recordings"] > .row {
                width: auto;
                height: auto;
                padding: 20px;
            }
            [data-role="recordings"] > .row > audio {
                outline: none;
            }
            [data-role="recordings"] > .row > a {
                display: inline-block;
                text-align: center;
                font-size: 20px;
                line-height: 50px;
                vertical-align: middle;
                width: 50px;
                height: 50px;
                border-radius: 20px;
                color: #fff;
                font-weight: bold;
                text-decoration: underline;
                background-color: #0093E9;
                background-image: -webkit-gradient(linear, left bottom, left top, from(#0093E9), to(#80D0C7));
                background-image: -o-linear-gradient(bottom, #0093E9 0%, #80D0C7 100%);
                background-image: linear-gradient(0deg, #0093E9 0%, #80D0C7 100%);
                float: right;
                margin-left: 20px;
                cursor: pointer;
            }
            [data-role="recordings"] > .row > a:hover {
                text-decoration: none;
            }
            [data-role="recordings"] > .row > a:active {
                background-image: -webkit-gradient(linear, left top, left bottom, from(#0093E9), to(#80D0C7));
                background-image: -o-linear-gradient(top, #0093E9 0%, #80D0C7 100%);
                background-image: linear-gradient(180deg, #0093E9 0%, #80D0C7 100%);
            }
        </style>
        <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
        <script src="https://markjivko.com/dist/recorder.js"></script>
        <script>
            jQuery(document).ready(function () {
                var $ = jQuery;
                var myRecorder = {
                    objects: {
                        context: null,
                        stream: null,
                        recorder: null
                    },
                    init: function () {
                        if (null === myRecorder.objects.context) {
                            myRecorder.objects.context = new (
                                    window.AudioContext || window.webkitAudioContext
                                    );
                        }
                    },
                    start: function () {
                        var options = {audio: true, video: false};
                        navigator.mediaDevices.getUserMedia(options).then(function (stream) {
                            myRecorder.objects.stream = stream;
                            myRecorder.objects.recorder = new Recorder(
                                    myRecorder.objects.context.createMediaStreamSource(stream),
                                    {numChannels: 1}
                            );
                            myRecorder.objects.recorder.record();
                        }).catch(function (err) {});
                    },
                    stop: function (listObject) {
                        if (null !== myRecorder.objects.stream) {
                            myRecorder.objects.stream.getAudioTracks()[0].stop();
                        }
                        if (null !== myRecorder.objects.recorder) {
                            myRecorder.objects.recorder.stop();

                            // Validate object
                            if (null !== listObject
                                    && 'object' === typeof listObject
                                    && listObject.length > 0) {
                                // Export the WAV file
                                myRecorder.objects.recorder.exportWAV(function (blob) {
                                    var url = (window.URL || window.webkitURL)
                                            .createObjectURL(blob);

                                    // Prepare the playback
                                    var audioObject = $('<audio controls></audio>')
                                            .attr('src', url);

                                    // Prepare the download link
                                    var downloadObject = $('<a>&#9660;</a>')
                                            .attr('href', url)
                                            .attr('download', new Date().toUTCString() + '.wav');

                                    // Wrap everything in a row
                                    var holderObject = $('<div class="row"></div>')
                                            .append(audioObject)
                                            .append(downloadObject);

                                    // Append to the list
                                    listObject.append(holderObject);
                                });
                            }
                        }
                    }
                };

                // Prepare the recordings list
                var listObject = $('[data-role="recordings"]');

                // Prepare the record button
                $('[data-role="controls"] > button').click(function () {
                    // Initialize the recorder
                    myRecorder.init();

                    // Get the button state 
                    var buttonState = !!$(this).attr('data-recording');

                    // Toggle
                    if (!buttonState) {
                        $(this).attr('data-recording', 'true');
                        myRecorder.start();
                    } else {
                        $(this).attr('data-recording', '');
                        myRecorder.stop(listObject);
                    }
                });
            });
        </script>
    </head>
    <body>
        <div class="holder">
            <div data-role="controls">
                <button>Record</button>
            </div>
            <div data-role="recordings"></div>
        </div>
    </body>
</html>  -->

<!--  Audio Code end ---->


<!--  Video Code Start ---->

<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Media Recorder in Javascript</title>
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <div id="container">
      <video id="gum" playsinline autoplay muted></video>
      <video id="recorded" playsinline loop></video>

      <div>
        <form method="post">
        <button id="start" type="button">Start camera</button>
        <button id="record" disabled type="button">Record</button>
        <button id="play" disabled type="button">Play</button>
        <button id="download" disabled type="button">Download</button>
          </form>
      </div>

      <div>
        <h4>Media Stream Constraints options</h4>
        <p>
          Echo cancellation: <input type="checkbox" id="echoCancellation" />
        </p>
      </div>

      <div>
        <span id="errorMsg"></span>
      </div>
    </div>
  </body>
  <script src="script.js"></script>
</html>

<style>
    button {
  margin: 0 3px 10px 0;
  padding-left: 2px;
  padding-right: 2px;
  width: 99px;
}

button:last-of-type {
  margin: 0;
}

p.borderBelow {
  margin: 0 0 20px 0;
  padding: 0 0 20px 0;
}

video {
  vertical-align: top;
  --width: 25vw;
  width: var(--width);
  height: calc(var(--width) * 0.5625);
}

video:last-of-type {
  margin: 0 0 20px 0;
}

video#gumVideo {
  margin: 0 20px 20px 0;
}
</style>
<script>
'use strict';

/* globals MediaRecorder */

let mediaRecorder;
let recordedBlobs;

const errorMsgElement = document.querySelector('span#errorMsg');
const recordedVideo = document.querySelector('video#recorded');
const recordButton = document.querySelector('button#record');
const playButton = document.querySelector('button#play');
const downloadButton = document.querySelector('button#download');


recordButton.addEventListener('click', () => {
  if (recordButton.textContent === 'Record') {
    startRecording();
  } else {
    stopRecording();
    recordButton.textContent = 'Record';
    playButton.disabled = false;
    downloadButton.disabled = false;
  }
});


playButton.addEventListener('click', () => {
  const superBuffer = new Blob(recordedBlobs, {type: 'video/webm'});
  recordedVideo.src = null;
  recordedVideo.srcObject = null;
  recordedVideo.src = window.URL.createObjectURL(superBuffer);
  recordedVideo.controls = true;
  recordedVideo.play();
});


downloadButton.addEventListener('click', () => {
  const blob = new Blob(recordedBlobs, {type: 'video/mp4'});
  const url = window.URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.style.display = 'none';
  a.href = url;
  a.download = 'test.mp4';
  document.body.appendChild(a);
  a.click();
  setTimeout(() => {
    document.body.removeChild(a);
    window.URL.revokeObjectURL(url);
  }, 100);
});

function handleDataAvailable(event) {
  console.log('handleDataAvailable', event);
  if (event.data && event.data.size > 0) {
    recordedBlobs.push(event.data);
  }
}

function startRecording() {
  recordedBlobs = [];
  let options = {mimeType: 'video/webm;codecs=vp9,opus'};
  try {
    mediaRecorder = new MediaRecorder(window.stream, options);
  } catch (e) {
    console.error('Exception while creating MediaRecorder:', e);
    errorMsgElement.innerHTML = `Exception while creating MediaRecorder: ${JSON.stringify(e)}`;
    return;
  }

  console.log('Created MediaRecorder', mediaRecorder, 'with options', options);
  recordButton.textContent = 'Stop Recording';
  playButton.disabled = true;
  downloadButton.disabled = true;
  mediaRecorder.onstop = (event) => {
    console.log('Recorder stopped: ', event);
    console.log('Recorded Blobs: ', recordedBlobs);
  };
  mediaRecorder.ondataavailable = handleDataAvailable;
  mediaRecorder.start();
  console.log('MediaRecorder started', mediaRecorder);
}

function stopRecording() {
  mediaRecorder.stop();
}

function handleSuccess(stream) {
  recordButton.disabled = false;
  console.log('getUserMedia() got stream:', stream);
  window.stream = stream;

  const gumVideo = document.querySelector('video#gum');
  gumVideo.srcObject = stream;
}

async function init(constraints) {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    console.error('navigator.getUserMedia error:', e);
    errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
  }
}

document.querySelector('button#start').addEventListener('click', async () => {
  const hasEchoCancellation = document.querySelector('#echoCancellation').checked;
  const constraints = {
    audio: {
      echoCancellation: {exact: hasEchoCancellation}
    },
    video: {
      width: 1280, height: 720
    }
  };
  console.log('Using media constraints:', constraints);
  await init(constraints);
});
</script> -->
<!--  Video Code End ---->