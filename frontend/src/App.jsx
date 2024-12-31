import React, { useEffect, useState } from 'react';
import { testConnection } from './api';

function App() {
  const [apiResponse, setApiResponse] = useState('');

  useEffect(() => {
    const checkApi = async () => {
      const response = await testConnection();
      setApiResponse(response.message);
    };

    checkApi();
  }, []);

  return (
    <div className="App">
      <h1>Test API Connection</h1>
      <p>{apiResponse}</p>
    </div>
  );
}

export default App;
