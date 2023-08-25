<script>
import axios from 'axios';
import { onMounted, ref } from 'vue';
export default {
    setup() {
        let hoteles = ref([]);
        onMounted(() => {
        // fetch api from laravel backend
        axios
            .get('http://127.0.0.1:8000/api/hoteles')
            .then((res) => {
                hoteles.value = res.data.data;
            })
            .catch((error) => {
                console.log(error.res.data);
            });
        });
        return {
            hoteles,
        };
    },
};
</script>

<template>
    <div class="row">
        <div class="offset-sm-4 col-sm-4">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Nit</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Habitaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="h in hoteles" :key="h.hotel_id">
                                <td>{{ h.hotel_nombre }}</td>
                                <td>{{ h.hotel_nit }}</td>
                                <td>{{ h.hotel_ciudad }}</td>
                                <td>{{ h.hotel_direccion }}</td>
                                <td><a class="btn btn-primary btn-lg" :href="'/habitaciones/show/'+h.hotel_id">
                                    {{ h.hotel_habitaciones }} <i class="bi bi-plus-circle"></i>
                                </a></td>
                            </tr>
                        </tbody>
                    </table>
        </div>
    </div>
</template>