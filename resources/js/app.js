require("./bootstrap");

window.Vue = require("vue");

import App from "./views/App"; // importa il componente

const app = new Vue({
    el: "#root",
    render: (h) => h(App), // file che reindirizza alla pagina
});
