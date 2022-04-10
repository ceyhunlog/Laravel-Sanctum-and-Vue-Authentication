<template>
    <div class="container">
        <!-- Login Form -->
        <div class="row mt-4" v-if="!secrets.length">
            <div class="col-6 offset-3">
                <form action="#" @submit.prevent="handleLogin">
                    <h3>Sing in for secrets</h3>
                    <div class="form-row mb-2">
                        <input v-model="formData.email" type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-row mb-2">
                        <input v-model="formData.password" type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Sing In</button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Secrets List -->
        <div class="row mt-4" v-if="secrets.length">
            <div class="col-6 offset-3">
                <h3>My Secrets</h3>
                <div class="secret" v-for="(secret, index) in secrets" :key="index">
                    <em v-text="secret.created_at"></em><br>
                    <strong v-text="secret.secret"></strong>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                secrets: [],
                formData: {
                    email: '',
                    password: ''
                }
            }
        },
        methods: {
            handleLogin(){
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/login', this.formData).then(response => {
                        this.getSecrets()
                    })
                });
            },
            getSecrets(){
                axios.get('/api/secrets').then(response => {
                    console.log(response.data)
                    this.secrets = response.data
                })
            }
        }
    }
</script>
