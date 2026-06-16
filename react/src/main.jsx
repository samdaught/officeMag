import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter } from 'react-router-dom';
import { App } from './App.jsx';
import { routerBaseUrl } from './config.js';

createRoot(document.getElementById('react-root')).render(
  <BrowserRouter basename={routerBaseUrl}>
    <App />
  </BrowserRouter>
);
