<template lang="">
    <div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8" style="background-color: #afc1d1;border-radius: 27px;padding: 30px;">
                <br><br>
                <h1 style="width: 100%; text-align:center">CARGA DE ARCHIVOS</h1>
                <hr>
                <br>
                <br>
                <label style="font-weight: bold" for="">Item para el cual subira los archivos</label>
                <select id="selectId" class="form-control" name="">
                    <option :style="'color: '+Item.color+'; font-weight: bold'" v-for="(Item, index) in items" :key="index" :value="Item.name">{{Item.name}}</option>
                </select>
                <br>
                <label  style="font-weight: bold" for="">Selecciona los archivos a subir</label>
                <input type="file" multiple class="form-control">
                <br>
                <label  style="font-weight: bold" for="observacionesItem">Observaciones</label>
                <textarea class="form-control" name="observacionesItem" id="observacionesItem" cols="30" rows="10"></textarea>
                <br>
                <hr>
                <div style="width: 100%" class="text-center">
                    <button style="width: 200px !important;" @click="enviarArchivos" class="btn btn-success">Guardar Archivos</button>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</template>
<script>

import axios from 'axios';
import Swal from 'sweetalert2'

export default {
    name: 'CargarArchivos',
    data() {
        return {
            items: [
                "Item 1",
                "Item 2",
                "Item 3",
                "Item 4",
                "Item 5",
                "Item 6",
                "Item 7",
                "Item 8",
                "Item 9",
                "Item 10",
                "Item 11",
                "Item 12",
                "Item 13",
                "Item 14",
                "Item 15",
                "Item 16",
                "Item 17",
                "Item 18",
                "Item 19",
                "Item 20",
                "Item 21",
                "Item 22",
                "Item 23",
                "Item 24",
                "Item 25",
                "Item 26",
                "Item 27",
                "Item 28",
                "Item 29",
                "Item 30",
                "Item 31",
                "Item 32",
                "Item 33",
                "Item 34",
                "Item 35",
                "Item 36",
                "Item 37",
                "Item 38",
                "Item 39",
                "Item 40",
                "Item 41",
                "Item 42",
                "Item 43",
                "Item 44",
                "Item 45",
                "Item 46",
                "Item 47",
                "Item 48",
                "Item 49",
                "Item 50"
            ],
            baseServidor: "http://rgl-ingenieria.com/visorphp/",
            //baseServidor: 'http://192.168.1.93/visorphp/'
        };
    },  
    mounted() {
        this.verCargados();
    },
    methods: {
        async enviarArchivos() {
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: 'subiendo archivos',
                showConfirmButton: false,
                timer: 600000
            });

            const selectedItem = this.$el.querySelector('#selectId').value;
            const observacionesItem = this.$el.querySelector('#observacionesItem').value;

            const formData = new FormData();
            formData.append('selectedItem', selectedItem);
            formData.append('observacionesItem', observacionesItem);

            const fileInput = this.$el.querySelector('input[type="file"]');
            for (let i = 0; i < fileInput.files.length; i++) {
                const file = fileInput.files[i];
                formData.append('files[]', file);
            }

            const url = this.baseServidor+'visor.php';

            try {
                const response = await axios.post(url, formData);
                document.querySelector('input[type="file"]').value = '';
                document.querySelector('#observacionesItem').value = '';
                this.$el.querySelector('#selectId').value = 'Item 1';
                Swal.fire({
                    title: 'Correcto!',
                    text: response.data,
                    icon: 'success',
                    confirmButtonText: 'ok'
                });

                setTimeout(()=>{
                    location.reload();
                }, 1000)
            } catch (error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'ocurrio un errro',
                    icon: 'error',
                    confirmButtonText: 'ok'
                });
            }
        },
        async verCargados(itemVer) {
            this.ItemSeleccionado = itemVer;
            const response = await axios.get(this.baseServidor+'cargados.php');
            var cargados = response.data;

            this.items = this.items.map(item => ({ name: item, color: "" }));

            this.items.forEach(element => {
                cargados.forEach(element2 => {
                    if (element.name == element2) {
                        element.color = "red";
                    }
                });
            });
        }
    },
}
</script>
<style>
    
</style>