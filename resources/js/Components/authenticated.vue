<template>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid text-light d-flex justify-content-between">
            <a class="navbar-brand text-light" href="#">Mock Up</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse show navbar-collapse justify-content-lg-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" @click="closeNavbar">
                        <a class="nav-link text-light active" aria-current="page" href="#home">
                            Home
                        </a>
                    </li>
                    <hr class="m-0">
                    <li class="nav-item" @click="closeNavbar">
                        <a class="nav-link text-light" href="#about">
                            About
                        </a>
                    </li>
                    <hr class="m-0">
                    <li class="nav-item" @click="closeNavbar">
                        <a class="nav-link text-light" href="#education">
                            Education
                        </a>
                    </li>
                    <hr class="m-0">
                    <li class="nav-item" @click="closeNavbar">
                        <a class="nav-link text-light" href="#honorsAwards">
                            Awards
                        </a>
                    </li>
                    <hr class="m-0">
                    <li class="nav-item" @click="closeNavbar">
                        <a class="nav-link text-light" href="#certificates">
                            Certificates
                        </a>
                    </li>
                    <hr class="m-0">
                    <li class="nav-item" @click="closeNavbar">
                        <a class="nav-link text-light" href="#skills">
                            Skills
                        </a>
                    </li>
                    <hr class="m-0">
                    <li class="nav-item dropdown" @click="closeNavbar">
                        <a class="nav-link text-light" href="#projects">
                            Projects
                        </a>
                    </li>
                    <hr class="m-0">
                    <li class="nav-item dropdown" @click="closeNavbar">
                        <a class="nav-link text-light" @click="Logout">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <router-view />
</template>

<script>
import axios from 'axios';

export default {
    methods: {
        closeNavbar() {
            const navbar = document.querySelector('.navbar-collapse.show');
            if (navbar) {
                navbar.classList.remove('show');
            }
        },

        async Logout() {
            try {
                
                // Retrieve the token from localStorage
                const token = localStorage.getItem('token');

                // Include the token in the headers of the request
                const headers = { Authorization: `Bearer ${token}` };

                // Make a request to the logout endpoint
                await axios.post('http://localhost:8000/api/auth/logout', {}, { headers });

                // Clear the user information and token from the client-side storage
                localStorage.removeItem('token');
				localStorage.setItem('valid', false);

                // Redirect the user to the login page or perform any other necessary actions
                this.$router.push({ name: 'login' });
            } catch (error) {
                console.error('Logout failed', error.response.data);
            }
        },
    }
}
</script>

<style scoped>
nav{
    background-color: #646ACF;
    box-shadow: 1px 2px 3px ;
    height: 4rem;
}

.navbar-collapse{
    background-color: #646ACF;
    text-align: right;
    padding: 2px 1.5rem;
    z-index: 2;
}

a{
    cursor: pointer;
}
</style>