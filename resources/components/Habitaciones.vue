<script>
import axios from 'axios';
import { onMounted, ref } from 'vue';
export default {
    setup() {
        let habitaciones = ref([]);
        onMounted(() => {
        // fetch api from laravel backend
        axios
            .get('http://127.0.0.1:8000/api/habitaciones')
            .then((res) => {
                habitaciones.value = res.data.data;
            })
            .catch((error) => {
                console.log(error.res.data);
            });
        });
        return {
            habitaciones,
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
                            <th scope="col">Tipo</th>
                            <th scope="col">Acomodación</th>
                            <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="h in habitaciones" :key="h.habitaciones_id">
                                <td>{{ h.habitaciones_tipo }}</td>
                                <td>{{ h.habitaciones_acomodacion }}</td>
                                <td>{{ h.habitaciones_cantidad }}</td>
                            </tr>
                        </tbody>
                    </table>
        </div>
    </div>
</template>