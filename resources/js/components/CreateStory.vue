<template>
    <div class="container">
        <div class="titule-component">
            <h3>Nueva Historia</h3>
        </div>
        <form action="">
            <div class="row">
                <div class="col">
                    <label for="title">Titulo Historia</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="col">
                    <label for="language">Idioma Nativo</label>
                    <select class="form-control" id="language" name="language">
                    <option v-for="language in languages">
                        {{language}}
                    </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Introducción</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlFile1">Imagen Principal</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="col">
                    <label for="exampleFormControlFile1">Archivo de Audio</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-success" @change="createStory()">Crear</button>
        </form>
        <br>
        <div>
            <!-- <PratStory v-for="part in parts" part="part" ></PratStory> -->
            <CreatePartStory story-id="1"  
            ></CreatePartStory>
        </div>
    </div>
</template>

<script>
    import PratStory from './CreatePart.vue'
    import CreatePartStory from './Part.vue'

    export default {
        mounted() {
            //
        },
        components: {
            CreatePartStory,
            PratStory
        },
        data: function() {
            return {
                languages: ['Ingles', 'Español', 'Aleman', 'Portugues'],
                viewparts: false,
                parts: [
                    {},
                ],
            }
        },
        methods : {
            createStory: function () {
                this.viewparts = true;
            },
        }
    }
</script>