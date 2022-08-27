<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1>{{titulo}}</h1>
                    <h1>{{enteros}}</h1>
                    <ul>
                        <li v-for="elemento of lenguajes" >
                            {{elemento}}
                        </li>
                    </ul>
                    <ul>
                        <li v-for="elemento of categoriasArray">
                            {{elemento.nombre}} - {{elemento.categoria}}
                            <span v-if="elemento.categoria==='Back End'">
                                ** Lado Servidor
                            </span>
                            <span v-else-if="elemento.categoria==='Front End'" >
                                ** Lado Cliente
                            </span>
                        </li>
                    </ul>
                    <br>
                    <input type="text" v-model="textoFormulario" >
                    <br>
                    <button type="button" class="btn btn-success" v-on:click="agregarElementos" >Agregar Elemento</button>
                    <input type="text" class="form-control mt-4" v-model="nuevoEvento" >

                    <ul>
                        <span>Lista de Eventos</span>
                        <li v-for="elemento of eventos">
                            <input type="number" v-model.number="elemento.valor">{{elemento.clave}}
                        </li>
                    </ul>
                    <h4>Elementos Computed</h4>
                    <h5>{{sumarValores}}</h5>
                </div>
                <button type="button" class="btn btn-primary mb-3" v-on:click="metodoNuevo" >Primary</button><br>
                <button type="button" class="btn btn-primary" v-on:click="lanzarMensaje" >Primary</button>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    data(){
        return{
            titulo:'Hola Mundo con Vue - Desweb',
            enteros:12345,
            lenguajes:['JavaScript', 'PHP', 'Java'],
            categoriasArray:[
                {nombre:'JavaScript', categoria:'Front End' },
                {nombre:'PHP', categoria:'Back End' },
                {nombre:'Java', categoria:'Back End' },
            ],
            textoFormulario:'Texto de ejemplo',
            eventos:[
                {clave:'Evento1', valor:1}
            ],
            nuevoEvento:'',
            indice:2,
            total:0
        }
    },
    mounted() {

    },
    methods:{
        metodoNuevo(){
            console.log('Evento reconocido');
        },
        lanzarMensaje(){
            alert('Mensaje de bienvenida');
        },
        agregarElementos(){
            this.eventos.push({
                clave:this.nuevoEvento, valor:this.indice
            });
            this.indice=this.indice+1;
        }
    },
    computed:{
        sumarValores(){
            this.total=0;
            let elemento;
            for(elemento of this.eventos){
                this.total=this.total+elemento.valor;
            }
            return this.total;
        }
    }
}
</script>

