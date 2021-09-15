const users = [
  "sehkuro",
  "veluxe_gg",
  "LicheeLi",
  "Delicatexo",
  "y4mikun",
  "pixzelesart",
  "aereio_"
];
// const users = [
//   "AnEternalEnigma",
//   "boxbox",
//   "HasanAbi",
//   "xQcOW",
//   "Lacari",
//   "datmodz"
// ];

let liveStreams = "";
let streamers = "";
const streamerStatus = {};
const headerOptions = {
  Authorization: `Bearer ${TWITCH_SECURITY_KEYS.token}`,
  "Client-Id": TWITCH_SECURITY_KEYS.id
};
let embed;

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

function displayStreamers(currentLiveData, allStreamsData) {
  const container = document.querySelector(".streamer-container");
  const streamCollection = {};

  allStreamsData.forEach((streamer) => {
    streamCollection[streamer.display_name] = {
      image: streamer.profile_image_url,
      category: "Offline",
      viewers: 0
    };
  });

  currentLiveData.forEach((streamer) => {
    streamCollection[streamer.user_name]["category"] = streamer.game_name;
    streamCollection[streamer.user_name]["viewers"] = streamer.viewer_count;
  });

  for (const [key, value] of Object.entries(streamCollection).sort((a, b) =>
    a[1].viewers > b[1].viewers ? -1 : 1
  )) {
    const streamer = document.createElement("div");
    streamer.className = "streamer";

    const image = document.createElement("img");
    image.src = `${value.image}`;
    image.className = "profile-pic";

    const streamerDetails = document.createElement("div");
    const name = document.createElement("p");
    name.textContent += key;
    name.className = "streamer-name";
    const category = document.createElement("p");
    category.textContent += value.category;
    streamerDetails.appendChild(name);
    streamerDetails.appendChild(category);

    streamer.appendChild(image);
    streamer.appendChild(streamerDetails);

    if (value.viewers > 0) {
      const viewerCount = document.createElement("p");
      viewerCount.textContent += value.viewers;
      streamer.appendChild(viewerCount);
    }

    streamer.addEventListener("click", clickStreamer);

    container.appendChild(streamer);
  }

  console.log("STREAMERS: ", streamCollection);
}

function twitchPlayer() {
  return new Twitch.Embed("twitch-embed", {
    width: 1603,
    height: 767.34,
    channel: "y4mikun",
    parent: ["localhost"]
  });
}

function clickStreamer(e) {
  const streamer = e.currentTarget.querySelector(".streamer-name").innerHTML;
  embed.setChannel(streamer);
}

async function populateLivePage() {
  try {
    const res = await Promise.all([getLive(), getStreamers()]);
    displayStreamers(res[0].data.data, res[1].data.data);
    embed = twitchPlayer();
  } catch (error) {
    console.log("ERR: ", err);
  }
}

populateLivePage();
