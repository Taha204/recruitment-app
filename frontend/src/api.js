import axios from 'axios';
import config from './config'; // Import du fichier de configuration

const api = axios.create({
    baseURL: `${config.API_BASE_URL}/api`, // URL de l'API backend
    timeout: 10000, // Temps d'attente maximum pour une requête
});

export default api;
