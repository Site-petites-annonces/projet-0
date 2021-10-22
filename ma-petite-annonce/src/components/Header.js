import React from 'react';
import '../styles/sass/header.scss';
//import Logo from '../images/logo.svg'

const Header = () => {
  return (
    <section className="header">
      <div>
        <h1 className="logo">Ma Petite Annonce</h1>
      </div>
      <div className="btn">
        <a href="/CreateAnnonce">Créer une annonce</a>
      </div>
    </section >
  );
};

export default Header;