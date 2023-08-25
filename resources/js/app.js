import './bootstrap';
import "bootstrap";

import { createApp } from "vue";

import Hoteles from "/resources/components/Hoteles.vue";
import Habitaciones from "/resources/components/Habitaciones.vue";
const app = createApp({});

app.component("hoteles", Hoteles);
app.component("habitaciones", Habitaciones);

const mountedApp = app.mount("#app");
