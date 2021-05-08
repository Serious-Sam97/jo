<template>
    <div>
        <div v-if="!isLogged">
            <v-container>
                <v-row>
                    <v-col cols="12">
                        Login
                    </v-col>
                    <v-col cols="10" md="6">
                        <p class="text-h5">Nickname</p>
                        <v-text-field v-model="name"></v-text-field>
                    </v-col>
                    <v-col cols="10" md="6">
                        <p class="text-h5">Password</p>
                        <v-text-field v-model="password"></v-text-field>
                    </v-col>
                    <v-col cols="12">
                        <v-btn @click="setup">
                            Login
                        </v-btn>
                        <div v-if="hasError">
                            <p style="color: red" class="text-subtitle-1">Nickname or Password is wrong</p>
                        </div>
                    </v-col>
                </v-row>
            </v-container>
        </div>
        <config v-if="isLogged"/>
    </div>
</template>

<script>
import Config from './Config.vue'
    export default {
        name: 'Login',
        components: {
            Config,
        },
        data() {
            return {
                isLogged: false,
                hasError: false,
                name: '',
                password: '',
                defaultUserName: 'joeirente',
                defaultPassword: '27121997Panda+',
            }
        },
        methods: {
            setup() {
                if(this.name == this.defaultUserName && this.password == this.defaultPassword) {
                    this.isLogged = true;
                    return;
                }
                this.isLogged = false;
                this.hasError = true;
            }
        },
    }
</script>
