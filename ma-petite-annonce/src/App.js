//Base - Reacte
import React from "react";
//import { BrowserRouter, Switch, Route } from "react-router-dom";
//style
import './styles/sass/App.scss';
//component
import Header from './components/Header';
import CreateAnnonce from './components/CreateAnnonce';
import Footer from './components/Footer';
import Menu from './components/Menu';
import OneAnnonce from './components/OneAnnonce';
import PopupContact from './components/PopupContact';
//Pages
import Homepage from './pages/Homepage';
//import About from "./pages/About";
//import NotFound from "./pages/NotFound";
//import OneAnnonce from './pages/OneAnnonce';
//import CreateAnnonce from './pages/CreateAnnonce';
function App() {
  return (
    /** */
    <div>
      <Header />
      <Menu />
      <CreateAnnonce />

      <Homepage />
      <OneAnnonce />
      <PopupContact />
      <Footer />
    </div>

    /** 
       <BrowserRouter>
         <Switch>
           <Route path="/" component={Homepage} />
           <Route path="/a-propos" exact component={About} />
           <Route component={NotFound} />
         </Switch>
       </BrowserRouter>
       */
  );
}

export default App;