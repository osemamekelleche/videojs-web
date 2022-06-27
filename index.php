<link href="videojs/video.js/dist/video-js.min.css" rel="stylesheet">
<script src="videojs/video.js/dist/video.min.js"></script>
<script src="videojs/videojs-hotkeys/videojs.hotkeys.min.js"></script>
<script src="videojs/@videojs/http-streaming/dist/videojs-http-streaming.min.js"></script>
<script src="videojs/videojs-contrib-eme/dist/videojs-contrib-eme.min.js"></script>
<script src=""></script>

<video id="player" class="video-js" controls preload="auto">

</video>


<script>
  var player = videojs('player', {
    width: 640,
    height: 360
  });

  player.src({
    src: 'https://www.udemy.com/assets/21248720/encrypted-files/out/v1/529784a0dd42485bb1a53d2901aa0a46/06c8dc12da2745f1b0b4e7c2c032dfef/842d4b8e2e014fbbb87c640ddc89d036/index.mpd?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJwYXRoIjoib3V0L3YxLzUyOTc4NGEwZGQ0MjQ4NWJiMWE1M2QyOTAxYWEwYTQ2LzA2YzhkYzEyZGEyNzQ1ZjFiMGI0ZTdjMmMwMzJkZmVmLzg0MmQ0YjhlMmUwMTRmYmJiODdjNjQwZGRjODlkMDM2LyIsImV4cCI6MTY1NjM0NzkzOH0.Tib7Y8tbJ0zmaK2tQ0ioqgXF-wLb1k2pD70Is7_zabs&provider=cloudfront&v=1',
    type: 'application/dash+xml',
    keySystems: {
      'com.widevine.alpha': 'https://www.udemy.com/api-2.0/media-license-server/validate-auth-token?drm_type=widevine&auth_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiJ9.eyJjb3Vyc2VfaWQiOjI1MDg5NDIsInVzZXJfaWQiOjE1NzUwOTkwLCJ1c2VyX2FnZW50IjoiUEMgLyBXaW5kb3dzIDEwIC8gQ2hyb21lIDEwMy4wLjUwNjAiLCJleHAiOjE2NTYzMzIwMzh9.UEQh2emAPmrzEg8stX7Y_eWQGTrzl8czApVUUpZEwh9rR6ghcqV97_ytYwEp3UWLZM9Th17auNVsL6V0zFkxWw'
    }
  });


  player.ready(function () {
    this.hotkeys({
      volumeStep: 0.1,
      seekStep: 5,
      enableModifiersForNumbers: false
    });
  });



</script>