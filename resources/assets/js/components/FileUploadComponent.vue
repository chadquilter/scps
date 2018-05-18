// ImageuploadComponent.vue

<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">File Upload Component</div>
                    <div class="card-body">
                       <div class="row">
                          <form id="new-file-form" action="#" method="#" @submit.prevent="submitForm">
                          <div class="col-md-3" v-if="image">
                              <img :src="image" class="img-responsive" height="70" width="90">
                               <span class="file-name" v-if="attachment.name" v-html="attachment.name"></span>
                           </div>
                          <div class="col-md-6">
                              <input type="file" v-on:change="onImageChange" class="form-control" ref="fileInput" id="file">
                          </div>
                          <div class="col-md-6">
                            <p>
                              <input class="input" type="text" name="name" placeholder="File name" v-model="fileName" required>
                            </p>
                         </div>
                          <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">
                              Add new file
                            </button>
                          </div>
                        </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  let token = document.head.querySelector('meta[name="csrf-token"]');

  if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
  } else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
  }

    export default {
        data(){
            return {
                image: '',

                formData: {},
                fileName: '',
                attachment: ''
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
            fetchFile(type, page) {
              this.loading = true;
              axios.get('files/' + type + '?page=' + page).then(result => {
                this.loading = false;
                this.files = result.data.data.data;
                this.pagination = result.data.pagination;
              }).catch(error => {
                console.log(error);
                this.loading = false;
              });

            },

            submitForm(){
              //use form data for now..
              //var data = new FormData();
              this.formData = new FormData();
              this.formData.append('name', this.fileName);
              this.formData.append('file', this.attachment);

              axios.post('files/add', this.formData,  {headers: {'Content-Type': 'multipart/form-data'}})
                .then(response => {
                    this.resetForm();
                    this.showNotification('File successfully upload!', true);
                    //this.fetchFile(this.activeTab);
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                    this.showNotification(error.response.data.message, false);
                    //this.fetchFile();
              });

            },
            showNotification(text, success) {
                if (success === true) {
                    this.clearErrors();
                }

                var application = this;
                application.message = text;
                application.notification = true;
                setTimeout(function() {
                    application.notification = false;
                }, 15000);
            },
            addFile() {
              this.attachment = this.$refs.file.files[0];
            },
            resetForm() {
                this.formData = {};
                this.fileName = '';
                this.attachment = '';
            },
            anyError() {
                return Object.keys(this.errors).length > 0;
            },

            clearErrors() {
                this.errors = {};
            }
        }
    }
</script>
