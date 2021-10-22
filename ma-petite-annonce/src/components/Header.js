import React from 'react';
import '../styles/sass/header.scss';
//import Logo from '../images/logo.svg'

const Header = () => {
  return (
    <header className="header">
      <div>

        <h1 className="logo">Ma Petite Annonce</h1>
      </div>
      <div className="btn">

        <a href="/CreateAnnonce">Créer une annonce</a>

      </div>
    </header >
  );
};

export default Header;