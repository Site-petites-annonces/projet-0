import React from 'react';
import '../styles/sass/header.scss';
//import Logo from '../images/logo.svg'

const Header = () => {
  return (
    <header className="header">
      <div>
        <figure>
          <image src="./images/logotest.svg" width="100"> </image>
          <figcaption>Le Logo du site</figcaption>
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