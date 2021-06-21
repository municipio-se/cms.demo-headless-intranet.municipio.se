// const localConfig = require("./config.local");
const plan = require("flightplan");
const { configure } = require("@whitespace/flightplan/municipio");

let config = {
  projectName: "cms.demo-headless-intranet.municipio.se",
  keepReleases: 5,
};

plan.target(
  "jenkins",
  {
    host: process.env.FLIGHTPLAN_HOST,
    username: "whitespace",
    agent: process.env.SSH_AUTH_SOCK,
  },
  {
    dir: process.env.FLIGHTPLAN_DIR,
    user: "web",
    domain: process.env.FLIGHTPLAN_DOMAIN,
    root: "/srv/www",
    targets: [process.env.FLIGHTPLAN_TARGET_DIR],
    phpVersion: "php7.4",
  },
);

configure(plan, config);
