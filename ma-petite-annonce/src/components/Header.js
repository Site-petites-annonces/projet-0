import React from 'react';
import '../styles/sass/header.scss';
//import Logo from '../images/logo.svg'
//
const Header = () => {
  return (
    // <figcaption>Le Logo du site Ma Petite annonce</figcaption>

    <header className="header">
      <div>

        <figure>
          <img src="./img/logotest.svg" alt="logo"></img>
        </figure>
        <h1 className="logo">Ma Petite Annonce</h1>


      </div>
      <div className="btn">

        <a href="/CreateAnnonce">Créer une annonce</a>

      </div>
    </header >
  );
};

export default Header;