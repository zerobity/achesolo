<template>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-3">
                    <label for="exampleFormControlFile1">Imagen</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="col-7">
                    <label for="description">Introducción</label>
                    <textarea class="form-control" id="description" rows="3" name="description" v-model="part.text">
                    </textarea>
                </div>
                <div class="col-1">
                    <label for="timei">Inicio</label>
                    <input type="number" class="form-control" id="timei" name="timei" v-model="part.star">
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    props: ['part'],
    mounted() {
            //
        },
    data: function() {
            return {
                
            }
        },
}
</script>