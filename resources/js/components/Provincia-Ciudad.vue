<template>
    <div class="form-group row">
        <label for="Provincia" class="col-md-4 col-form-label text-md-right">Provincia</label>

        <div class="col-md-6">
            <select name="idProvincia" v-model="idProvincia"  @click="getProvincia()" class="form-control col-md-12" required>
                <option v-for="provincia in arrayProvincia" :key="provincia.id" :value="provincia.id"
                  v-text="provincia.nombreProvincia">
                </option>
            </select>
        </div>
        <br><br><br>

         <label for="Ciudades" class="col-md-4 col-form-label text-md-right">Ciudades</label>

        <div class="col-md-6">
            <select name="idCiudad" v-model="idCiudad"  @click="getCiudad()" class="form-control col-md-12" required>
                <option v-for="ciudad in arrayCiudad" :key="ciudad.id" :value="ciudad.id"
                  v-text="ciudad.nombreCiudad">
                </option>
            </select>
        </div>
    </div>

    

</template>

<script>
    export default {
        data() {
            return {
              idProvincia: 0,
              idCiudad: 0,
              arrayProvincia: [],  
              arrayCiudad: [],  
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

            getCiudad() {
                let me = this;
                var url = '/ciudades?id=' + this.idProvincia;
                axios.get(url).then(function(response) {
                    var respuesta = response.data;
                    me.arrayCiudad = respuesta.ciudades;
                })
                   
            },
        },
        mounted() {
            this.getProvincia();
        }
    }
</script>
