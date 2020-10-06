let ppbutton = document.getElementById("vidbutton");
ppbutton.addEventListener("click", playPause);
myVideo = document.getElementsByClassName("myvid");

//script for autoplay the videos
$("video[autoplay]").each(function () {
  $(this).prop("muted", true);
  this.play();
});

function playPause() {
  for (let i = 0; i < myVideo.length; i++) {
    cur_video = myVideo[i];
    if (cur_video.paused) cur_video.play();
    else cur_video.pause();
  }
}

$("#incident_btn").click(function () {
  $.ajax({
    url: "http://bimtestserver.com/digital_signage/incident.php",
    cache: false,
  }).done(function (incident_data) {
    incident_data = $.parseJSON(incident_data);
    //let incident_id = incident_data.IncidentMessage.MessageID;
    let incident_message = incident_data.IncidentMessage.Content;

    window.setTimeout(function () {
      window.setTimeout(function () {
        playPause();
        $(".incident").html("");
        $(".incident").hide();
        $(".myvid").show();
      }, 30000);

      playPause();

      $(".incident").html(
        '<marquee direction="left" width="100%" height="220" bgcolor="white"><h2>' +
          incident_message +
          "</h2></marquee>"
      );
      $(".myvid").hide();
      $(".incident").show();
    }, 500);
  });
});
