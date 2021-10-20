import './styles/sass/App.scss';
import Header from './components/Header';
import CreateAnnonce from './components/CreateAnnonce';
import Footer from './components/Footer';
import Homepage from './components/Homepage';
import Menu from './components/Menu';
import OneAnnonce from './components/OneAnnonce';
import PopupContact from './components/PopupContact';

function App() {
  return (
    <div>
      <Header />
      <CreateAnnonce />
      <Footer />
      <Homepage />
      <Menu />
      <OneAnnonce />
      <PopupContact />
    </div>
  );
}

export default App;
