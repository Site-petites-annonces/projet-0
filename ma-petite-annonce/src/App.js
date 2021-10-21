import './styles/sass/App.scss';
import Header from './components/Header';
import CreateAnnonce from './components/CreateAnnonce';
import Footer from './components/Footer';
import Homepage from './pages/Homepage';
import Menu from './components/Menu';
import OneAnnonce from './components/OneAnnonce';
import PopupContact from './components/PopupContact';

function App() {
  return (
    <div>
      <Header />
      <Menu />
      <Footer />

      <Homepage />
      <CreateAnnonce />
      <OneAnnonce />
      <PopupContact />
    </div>
  );
}

export default App;