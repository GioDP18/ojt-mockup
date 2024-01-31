// src/isAuthenticated.js
import axios from 'axios';

const isAuthenticated = async () => {
  // Check if the user has a valid JWT token in local storage or cookies
  const token = localStorage.getItem('token');
  const validity = localStorage.getItem('valid');

  // If no token is found, the user is not authenticated
  if (!token) {
    console.log('NO VALIDITY');
    localStorage.setItem('valid', false);
    console.log(token);
    console.log(validity);
    return false;
  }
  console.log(token);
  console.log(validity);
  return true
  

  // try {
  //   // Make a request to your server to verify the token
  //   const response = await axios.post('http://localhost:8000/api/auth/verify-token', {
  //     token,
  //   });

  //   // Assuming your server responds with a status indicating token validity
  //   return response.data.valid;
  // } catch (error) {
  //   // Handle error (e.g., network error, server error)
  //   console.error('Token verification failed:', error);
  //   return false;
  // }
};

export default isAuthenticated;
