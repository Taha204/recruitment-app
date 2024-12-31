import axios from 'axios';

const API_BASE_URL = 'http://127.0.0.1:8000/api';

export const testConnection = async () => {
  try {
    const response = await axios.get(`${API_BASE_URL}/test-connection`);
    return response.data;
  } catch (error) {
    console.error('Error connecting to API:', error);
    return { success: false, message: 'Failed to connect to API' };
  }
};
