
<template>
    <div>
        <div class="form-group">
            <label for="searchBox" class="font-weight-bold">Filter Terms:</label>
            <input id="searchBox" class="form-control" type="text" v-model="searchString" placeholder="Enter Term" />
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Term</th>
                    <th>Definition</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="flashcard in filteredFlashcards">
                    <td>{{ flashcard.term }}</td>
                    <td>{{ flashcard.definition }}</td>
                    <td>
                        <div class="row">
                            <div class="col-xs-auto">
                                <button class="btn btn-sm bg-transparent"><a :href="'/flashcards/' + flashcard.id + '/edit'"><i class="fas fa-edit text-primary"></i></a></button>
                            </div>
                            <div class="col-xs-auto">
                                <form method="post" :action="'/flashcards/' + flashcard.id">
                                    <input type="hidden" name="_token" :value="csrf">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-sm bg-transparent" type="submit"><i class="fas fa-times text-danger"></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
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