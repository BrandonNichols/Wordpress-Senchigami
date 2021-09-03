const users = ["sehkuro", "veluxe_gg", "LicheeLi", "Delicatexo", "y4mikun"];

let liveStreams = "";
let streamers = "";
const streamerStatus = {};
const headerOptions = {
  Authorization: `Bearer ${TWITCH_SECURITY_KEYS.token}`,
  "Client-Id": TWITCH_SECURITY_KEYS.id
};

users.forEach((user) => {
  liveStreams = liveStreams + `&user_login=${user}`;
  streamers = streamers + `&login=${user}`;
});

liveStreams = liveStreams.substr(1);
streamers = streamers.substr(1);

function getLive() {
  return axios.get(`https://api.twitch.tv/helix/streams?${liveStreams}`, {
    headers: {
      ...headerOptions
    }
  });
}

function getStreamers() {
  return axios.get(`https://api.twitch.tv/helix/users?${streamers}`, {
    headers: {
      ...headerOptions
    }
  });
}

Promise.all([getLive(), getStreamers()])
  .then((res) => {
    console.log("RES: ", res);
  })
  .catch((err) => {
    console.log("ERR: ", err);
  });

// axios
//   .get(`https://api.twitch.tv/helix/streams?${userCollection}`, {
//     headers: {
//       Authorization: "Bearer bqc8xdiix7x0lu1fn7z44iu3o6ct53",
//       "Client-Id": "cm7mz7zd4jy6pfptik8wwjoomwgkv9"
//     }
//   })
//   .then((res) => {
//     console.log("Res: ", res);
//   })
//   .catch((err) => {
//     console.log("Error: ", err);
//   });
