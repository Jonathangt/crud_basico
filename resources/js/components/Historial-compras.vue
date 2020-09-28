<template>
    <div class="col-md-6"><br><br>
        <div class="table col-md-8">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                    <th>Fecha Compra</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="compras in arrayCompras" :key="compras.id">
                    <td v-text="compras.producto"></td>
                    <td v-text="compras.cantidad"></td>
                    <td v-text="compras.precioTotal"></td>
                    <td v-text="compras.fecha"></td>
                </tr>
            </tbody>
        </div>

       
    </div>


</template>

<script>
export default {
    data(){
        return{
            arrayCompras:[],
           
        }
    },
    methods:{
        getcompra() {
                let me = this;
                var url = '/compras';
                axios.get(url).then(function(response) {
                    var respuesta = response.data;
                    me.arrayCompras = respuesta.historial;

                  /*  arrayCompras = respuesta.historial;

                    me.compra = arrayCompras[0]['producto'];
                    me.cantidad = arrayCompras[0]['cantidad'];
                    me.precioTotal = arrayCompras[0]['precioTotal'];*/

                })
                   
        },
    },
    mounted() {
        this.getcompra();
    }
}
</script>