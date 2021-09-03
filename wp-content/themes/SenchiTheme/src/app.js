let player1;
let player2;
let player3;
function onYouTubeIframeAPIReady() {
  player1 = new YT.Player("player1", {
    height: "390",
    width: "400",
    videoId: "vGMEB2SbU_I",
    playerVars: {
      rel: 0
    }
  });
  player2 = new YT.Player("player2", {
    height: "390",
    width: "400",
    videoId: "XecBOTPSlAo",
    playerVars: {
      rel: 0
    }
  });
  player3 = new YT.Player("player3", {
    height: "390",
    width: "400",
    videoId: "kqSEOLcd7p0",
    playerVars: {
      rel: 0
    }
  });
}
