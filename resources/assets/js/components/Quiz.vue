<template>
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">

        </div>
    </div>
</template>

<script>
    export default {
        props: ['flashcardsData'],
        data () {
            return {
            searchString: '',
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        },      
        mounted() {
        },
        computed: {
            filteredFlashcards: function() {
                var flashcards_array = this.flashcardsData;
                var search_string = this.searchString.toLowerCase();
                if (!search_string) {
                    return flashcards_array;
                }
                flashcards_array = flashcards_array.filter(function(item) {
                    if(item.term.toLowerCase().indexOf(search_string) !== -1) {
                        return item;
                    }
                });
                return flashcards_array;
            }
        }
    }
</script>