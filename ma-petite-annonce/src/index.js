import React from 'react';
import ReactDOM from 'react-dom';
import Header from './components/Header';
import CreateAnnonce from './components/CreateAnnonce';
import Footer from './components/Footer';
import Menu from './components/Menu';
import OneAnnonce from './components/OneAnnonce';
import PopupContact from './components/PopupContact';
import Homepage from './pages/Homepage';
import About from "./pages/About";
import './styles/css/index.css';
//import App from './App'

class App extends React.Component {
  render() {
    return <div>
      <div clasName="App">
        <Header />
        <Homepage />

      </div>

      <h1>Liste des annonces actuelle</h1>
      <ul>
        <li>Vélos</li>
        <li> Jeux</li>
        <li><a href="/OneAnnonce">Informatique</a></li>
      </ul>

      <Footer />
    </div >
  }
}
/**

ReactDOM.render(
<React.StrictMode>
 <App />
</React.StrictMode>,
document.getElementById('root'));
*/
const rootElement = document.getElementById("root");
ReactDOM.render(<App />, rootElement)