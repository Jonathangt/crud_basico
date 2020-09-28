<template>
    <div class="col-md-6"><br><br>
        <div class="form-group">
            <label for="" class="col-md-6">Productos y precio</label>
            <select class="col-md-6" v-model="producto" id="" required>
                <option value="Camisa negra">Camisa negra $10</option>
                <option value="Camisa azul">Camisa azul $20</option>
                <option value="Camisa verde">Camisa verde $30</option>
                <option value="Camisa lila">Camisa lila $40</option>
                <option value="Pantalon negro">Pantalon negro $50</option>
                <option value="Pantalon azul">Pantalon azul $60</option>
                <option value="Pantalon verde">Pantalon verde $70</option>
                <option value="Pantalon lila">Pantalon lila $80</option>
                <option value="Gorra verde">Gorra verde $90</option>
                <option value="Gorra lila">Gorra lila $100</option>
            </select>
        </div>

        <div class="form-grup">
            <label for="" class="col-md-6">Cantidad</label>
            <input class="col-md-6" type="text" v-model="cantidad" name="" id="" required>
        </div>

        <!--  <div class="form-grup"><br>
            <label for="" class="col-md-6">Total a pagar</label>
            <p class="col-md-6" v-text="precioTotal"></p>
        </div> -->

          <div class="form-grup"><br>
           <button @click="registrarCompra()" type="button" class="btn btn-primary">Registrar Compra</button>
        </div>


    </div>


</template>

<script>
export default {
    data(){
        return{
            producto: null,
            cantidad: null,
            precioTotal: null,
        }
    },
    methods:{
        registrarCompra(){
            if (!this.producto) {
                alert('escoja un producto')
                return;
            }
            if (!this.cantidad) {
                alert('ingrese una cantidad')
                return;
            }

            if (this.producto == 'Camisa negra') {
                this.precioTotal =  this.cantidad * 10; 
            }
            if (this.producto == 'Camisa azul') {
                this.precioTotal =  this.cantidad * 20; 
            }
            if (this.producto == 'Camisa verde') {
                this.precioTotal =  this.cantidad * 30; 
            }
            if (this.producto == 'Camisa lila') {
                this.precioTotal =  this.cantidad * 40; 
            }
            if (this.producto == 'Pantalon negro') {
                this.precioTotal =  this.cantidad * 50; 
            }
            if (this.producto == 'Pantalon azul') {
                this.precioTotal =  this.cantidad * 60; 
            }
            if (this.producto == 'Pantalon verde') {
                this.precioTotal =  this.cantidad * 70; 
            }
            if (this.producto == 'Pantalon lila') {
                this.precioTotal =  this.cantidad * 80; 
            }
            if (this.producto == 'Gorra verde') {
                this.precioTotal =  this.cantidad * 90; 
            }
            if (this.producto == 'Gorra lila') {
                this.precioTotal =  this.cantidad * 100; 
            }

            console.log(this.valorPagar)

            if (confirm('Desea confirmar la compra?')) {

                var url = '/store-compra';
                axios.post(url,{
                    producto: this.producto,
                    cantidad: this.cantidad,
                    precioTotal: this.precioTotal
                }).then(response=>{
                    alert('compra registrada')
                }).catch(error =>{
                    console.log(error)
                })

                
            }else{
                alert('compra no registrada')
                this.precioTotal="",
                this.producto="",
                this.cantidad=""
            }
           
        }
    },
}
</script>