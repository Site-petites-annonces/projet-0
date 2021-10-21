import './styles/sass/App.scss';
import Header from './components/Header';
import CreateAnnonce from './components/CreateAnnonce';
import Footer from './components/Footer';
import Homepage from './pages/Homepage';
import Menu from './components/Menu';
import OneAnnonce from './components/OneAnnonce';
import PopupContact from './components/PopupContact';
import { BrowserRouter, Switch, Route } from "react-router-dom";

function App() {
  return (
    <BrowserRouter>
      <Switch>
        <Route path="/homemepage" component={Homepage} />
        <Route path="/createAnnonce" component={CreateAnnonce} />
        <Route path="/OneAnnonce" component={OneAnnonce} />
        <Route path="/PopupContact" component={PopupContact} />
        <Route path="/Menu" component={Menu} />
        <Route path="/Header" component={Header} />
        <Route path="/Footer" component={Footer} />

      </Switch>
    </BrowserRouter>
  );
}

export default App;