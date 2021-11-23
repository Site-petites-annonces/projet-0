import React from 'react';
import ReactDOM from 'react-dom';

import './styles/css/index.css';
import App from './App'
/**
function App() {
  return (
    <div class="App">
      <h1>Hello petite annonces</h1>
    </div>
  )
}
 */
const rootElement = document.getElementById("root");
ReactDOM.render(<App />, rootElement)



ReactDOM.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>,
  document.getElementById('root'));
 /***/