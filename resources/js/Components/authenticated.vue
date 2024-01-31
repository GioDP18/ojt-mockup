<template>
    <!-- LOADING -->
	<div class="loading-container col-12" v-if="$store.state.loading">
		<div class="loading spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>


    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid text-light d-flex justify-content-between">
            <a class="navbar-brand text-light" href="#">Mock Up</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-lg-end" id="navbarSupportedContent">
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
    <div class="indent">
        <router-view />
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
		return {
      		// loading: false,
		};
	},

    methods: {
        closeNavbar() {
            const navbar = document.querySelector('.navbar-collapse.show');
            if (navbar) {
                navbar.classList.remove('show');
            }
        },

        async Logout() {
            try {
				// this.loading = true;
                this.$store.commit('setLoading', true);
                const token = localStorage.getItem('token');
                const headers = { Authorization: `Bearer ${token}` };

                await axios.post('http://localhost:8000/api/auth/logout', {}, { headers })
                .then(response => {
                    localStorage.removeItem('token');
                    localStorage.setItem('valid', false);
					this.$store.commit('setAlertMessage', "");
                    this.$router.push({ name: 'login' });
                })
				.finally(() => {
					// this.loading = false;
                    this.$store.commit('setLoading', false);
				});

                
            } catch (error) {
                console.error('Logout failed', error.response.data);
            }
        },
    }
}
</script>

<style scoped>
.loading-container{
	position: absolute;
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.loading-container .loading{
	width: 4rem;
	height: 4rem;
	font-weight: bold;
	color: white;
	z-index: 1;
}

nav{
    background-color: #646ACF;
    box-shadow: 1px 2px 3px ;
    height: 4rem;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 2;
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


@media screen and (min-width: 992px){
    nav{
        position: static;
    }
}
</style>