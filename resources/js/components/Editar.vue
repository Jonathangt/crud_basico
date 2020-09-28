<template>

    <div>
        <label for=""></label>
        <div class="form-group row"> <br>
             <label class="col-md-4 col-form-label text-md-right">Nombres</label>
            <p class="form-control col-md-6"  v-text="nombres"></p>
        </div>



        <div class="form-group row"> <br>
             <label class="col-md-4 col-form-label text-md-right">Usuario</label>
            <p class="form-control col-md-6"  v-text="usuario"></p>
        </div>

        <div class="form-group  row"> <br>
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
            <input type="password" v-text="password" class="form-control col-md-6">
        </div>

        <div class="form-group  row"> <br>
             <label for="cedula" class="col-md-4 col-form-label text-md-right">Cedula</label>
            <p class="form-control col-md-6"  v-text="cedula"></p>
        </div>


        <div class="form-group row">
            <label for="Provincia" class="col-md-4 col-form-label text-md-right">Provincia</label>

            <div class="col-md-6">
                <select name="idProvincia" v-model="idProvincia"  @click="getCiudad()" class="form-control col-md-12" required>
                    <option v-for="provincia in arrayProvincia" :key="provincia.id" :value="provincia.id"
                    v-text="provincia.nombreProvincia">
                    </option>
                </select>
            </div>

        </div>

        <div class="form-group row">
            <label for="Ciudades" class="col-md-4 col-form-label text-md-right">Ciudad</label>

            <div class="col-md-6">
                <select name="idCiudad" v-model="idCiudad" class="form-control col-md-12" required>
                    <option v-for="ciudad in arrayCiudad" :key="ciudad.id" :value="ciudad.id"
                    v-text="ciudad.nombreCiudad">
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group row"> <br>
             <label for="email" class="col-md-4 col-form-label text-md-right">email</label>
            <p class="form-control col-md-6"  v-text="email"></p>
        </div>


        <div class="form-grup"><br>
          <center>
               <button @click="actualizarRegistro()" type="button" class="btn btn-primary">Actualizar Usuario</button>
                <button @click="eliminar()" type="button" class="btn btn-primary">Eliminar Usuario</button>
          </center>
        </div>


    </div>
</template>

<script>
    export default {
        data() {
            return {
                idUsuario:'',
                nombres:'',
                usuario:'',
                password:'',
                cedula:'',
                idProvincia: 0,
                idCiudad: 0,
                email:'', 

                arrayProvincia: [],
                arrayCiudad:[],
            }
        },
        methods: {
            getProvincia() {
                let me = this;
                var url = '/provincias';
                axios.get(url).then(function(response) {
                    var respuesta = response.data;
                    me.arrayProvincia = respuesta.provincia;
                    })
                   
            },

            getCiudad(idProvincia) {
                let me = this;
                var url = '/ciudades?id=' + this.idProvincia;
                axios.get(url).then(function(response) {
                    var respuesta = response.data;
                    me.arrayCiudad = respuesta.ciudades;
                })
                   
            },
            listar(){
               
                var url = '/user';
                axios.get(url).then(response=>{
                    var respuesta = response.data;
                    var arrayDatos = respuesta.user;

                    this.nombres = arrayDatos[0]['nombres'];
                    this.usuario = arrayDatos[0]['usuario'];
                    this.cedula = arrayDatos[0]['cedula'];
                    this.password = arrayDatos[0]['password'];
                    this.idProvincia = arrayDatos[0]['idProvincia'];
                    this.idCiudad = arrayDatos[0]['idCiudad'];
                    this.email = arrayDatos[0]['email'];
                    this.idUsuario = arrayDatos[0]['id'];

                    this.getProvincia();
                    this.getCiudad(this.idProvincia);


                }).catch(error=>{
                    console.log(error)
                })
            },
            actualizarRegistro(){
                var url = '/edit-user';
                axios.put(url,{
                    id: this.idUsuario,
                    password: this.password,
                    idProvincia: this.idProvincia,
                    idCiudad: this.idCiudad 
                }).then(response=>{
                   alert('usuario actualizardo')
                }).catch(error=>{
                    console.log(error)
                })
            },
            eliminar(){
                if (confirm('Desea eliminar su usuario?')) {
                    var url = '/delete-user';
                    axios.delete(url).then(response=>{
                        id: this.idUsuaro
                        location.reload()

                    }).catch(error=>{
                    console.log(error)
                    })
                       
                }
            }
        },
        mounted() {
            this.listar();
          
        }
    }
</script>
