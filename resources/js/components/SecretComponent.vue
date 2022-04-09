<template>
    <div class="container">
        <!-- Login Form -->
        <div class="row mt-4">
            <div class="col-6 offset-3">
                <form action="#" @submit.prevent="handleLogin">
                    <h3>Sing in for secrets</h3>
                    <div class="form-row mb-2">
                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-row mb-2">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Sing In</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Secrets List -->
    </div>
</template>

<script>
    export default {
        data(){
            return {
                secrets: [],
                formData: [
                    email: '',
                    password: ''
                ]
            }
        },
        methods: {
            handleLogin(){
                // send axios request to the login route
            }
        }
    }
</script>
