<template lang="">
    <div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8" style="background-color: #afc1d1;border-radius: 27px;padding: 30px;">
                <br><br>
                <h1 style="width: 100%; text-align:center">EDITAR DESCRIPCION</h1>
                <hr>
                <br>
                <br>
                <label style="font-weight: bold" for="">Seleccione el item el cual desea editar</label>
                <select id="selectId" class="form-control" @change="onChange($event)" name="">
                    <option style="font-weight: bold" v-for="(Item, index) in cargados" :key="index" :value="Item.selectedItem">{{Item.selectedItem}}</option>
                </select>
                <br>
                <label  style="font-weight: bold" for="observacionesItem">Observaciones</label>
                <textarea v-model="objetoEditar.observacionesItem" class="form-control" name="observacionesItem" id="observacionesItem" cols="30" rows="10"></textarea>
                <br>
                <hr>
                <div style="width: 100%" class="text-center">
                    <button style="width: 200px !important;" @click="editarItems" class="btn btn-success">editar descripcion</button>
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
    name: 'EditarItems',
    data() {
        return {
            objetoEditar: {},
            cargados: [],
            baseServidor: "http://rgl-ingenieria.com/visorphp/",
            //baseServidor: 'http://192.168.1.76/visorphp/'
        };
    },  
    mounted() {
        this.verCargados();
    },
    methods: {
        onChange(event) {
            var valor = event.target.value;
            var elemento = this.cargados.filter((el) => el.selectedItem == valor);
            this.objetoEditar = elemento[0];
        },
        async editarItems() {
            const formData = new FormData();
            formData.append('selectedItem', this.objetoEditar.selectedItem);
            formData.append('observacionesItem', this.objetoEditar.observacionesItem);

            const url = this.baseServidor+'editar_item.php';

            try {
                const response = await axios.post(url, formData);
               
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
            const response = await axios.get(this.baseServidor+'items-guardados.php');
            this.cargados = response.data;
            if(this.cargados[0] != null){
                this.objetoEditar = this.cargados[0];
            }else{
                this.objetoEditar = {};
            }
            
        }
    },
}
</script>
<style>
    
</style>