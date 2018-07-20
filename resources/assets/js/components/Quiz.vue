<template>
    <div class="card flash-card-width">
        <img class="card-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASIAAACuCAMAAAClZfCTAAAAKlBMVEX////7/P/y8v+ZnP95fP/Nzv/Awv92ev+Hiv+mqP/j5P/a2/+xs///gIAlaR6pAAAAk0lEQVR4nO3buQ0EQQwDQd3/55/uhUDI4hpVKbAdDTAzAAAAAAAAAMAh/QjaCwEAAMDGl2A+BO2IAQAAYONB0F4IAAAANt4E8yJoRwwAAAAbT4I5EbQjBgAAgI32D4vjay8EAAAAG3eCuRG0IwYAAICNK0F7IQAAANg4E8yFoB0xAAAAbLTv6OPzXhS1IwYAAICFP38+dK9SmODpAAAAAElFTkSuQmCC" alt="Card image">
        <div class="card-img-overlay text-center">
            <h1>{{ currentTerm }}</h1>
            <h3 class="mt-5">{{ currentDef }}</h3>
        </div>
        <div class="card-footer py-0 bg-transparent">
            <div class="row">
                <button class="bg-transparent col btn btn-sm float-left" v-on:click="nextCard(-1)"><i class="float-left fas fa-arrow-left"></i></button>
                <button class="bg-transparent col btn btn-sm float-right" v-on:click="nextCard(1)"><i class=" float-right fas fa-arrow-right"></i></button>
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
                if(this.current + iteration < 0)
                {
                    this.current = this.flashcardsData.length - 1;
                }
                else
                {
                    this.current = (this.current + iteration) % this.flashcardsData.length;
                }
                this.currentTerm = this.flashcardsData[this.current].term;
                this.currentDef = this.flashcardsData[this.current].definition;
            },
        }
    }
</script>