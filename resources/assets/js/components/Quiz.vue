<template>
    <div class="card">
        <div class="card-header text-center">
            <h3>{{ currentTerm }}</h3>
        </div>
        <div class="card-body text-cener">
            {{ currentDef }}
        </div>
        <div class="card-footer bg-transparent">
            <div class="row">
                <button class="col btn btn-sm float-left" v-on:click="nextCard(-1)"><i class="fas fa-arrow-left"></i></button>
                <button class="col btn btn-sm float-right" v-on:click="nextCard(1)"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</template>

<script>
    export default 
    {
        props: ['flashcardsData'],
        data () 
        {
            return {
                current: 0,  
                currentTerm: "",
                currentDef: ""       
            }
        },   

        mounted() {
            this.currentTerm = this.flashcardsData[this.current].term;
            this.currentDef = this.flashcardsData[this.current].definition;

        },

        methods: {
            nextCard: function(iteration) 
            {
                this.current = (this.current + iteration) % this.flashcardsData.length;
                this.currentTerm = this.flashcardsData[this.current].term;
                this.currentDef = this.flashcardsData[this.current].definition;
            },
        }
    }
</script>