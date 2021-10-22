//Base - Reacte
import React from "react";
import { BrowserRouter, Switch, Route } from "react-router-dom";
//style
import './styles/sass/App.scss';
//compoenent
import Header from './components/Header';
import Footer from './components/Footer';
import Menu from './components/Menu';
import PopupContact from './components/PopupContact';
//Pages
import Homepage from './pages/Homepage';
import About from "./pages/About";
import NotFound from "./pages/NotFound";
import OneAnnonce from './pages/OneAnnonce';
import CreateAnnonce from './pages/CreateAnnonce';
function App() {
  return (
    <BrowserRouter>
      <Switch>
        <Route path="/" component={Homepage} />
        <Route path="/a-propos" exact component={About} />
        <Route component={NotFound} />
      </Switch>
    </BrowserRouter>

    /**
     *   <Route path="/createAnnonce" exact component={CreateAnnonce} />
        <Route path="/oneAnnonce" exact component={OneAnnonce} />
        <Route path="/popupContact" exact component={PopupContact} />
        <Route path="/menu" exact component={Menu} />
        <Route path="/header" exact component={Header} />
        <Route path="/footer" exact component={Footer} />
     */
  );
}

export default App;