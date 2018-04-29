// ImageuploadComponent.vue

<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">File Upload Component</div>
                    <div class="card-body">
                       <div class="row">
                          <div class="col-md-3" v-if="image">
                              <img :src="image" class="img-responsive" height="70" width="90">
                           </div>
                          <div class="col-md-6">
                              <input type="file" v-on:change="onImageChange" class="form-control" ref="fileInput" id="my_file">
                          </div>
                          <div class="col-md-3">
                             <button class="btn btn-success btn-block" @click="uploadImage">Upload Image</button>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                image: ''
            }
        },
        methods: {
            onImageChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            uploadImage(){
              //use form data for now..
              var data = new FormData()
              var file = this.$refs.fileInput.files[0]
              data.append('my_file', file)
              axios.post('/file/store',data).then(response => {
                   console.log(response.data);
                   if (response.data.success) {
                     alert(response.data.success);
                   }
                });
            }
        }
    }
</script>
