import { createApp } from 'vue'

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import specific icons */
import { 
    faFacebookF, 
    faGithub, 
    faInstagram, 
    faLinkedinIn
} from '@fortawesome/free-brands-svg-icons'

/* add icons to the library */
library.add(
    faFacebookF,
    faLinkedinIn,
    faInstagram,
    faGithub
)