import React from 'react';
import '../styles/sass/menu.scss';
import { NavLink, Navlink } from "react-router-dom"
//<NavLink>Test</NavLink>
const Menu = () => {
  return (
    <div className="menu">
      <h1>Menu</h1>
      <nav>
        <ul>
          <li></li>
          <li><a href="/Homepage">Accueil</a></li>
          <li><a href="/OneAnnonce">Vélos</a></li>
          <li><a href="/OneAnnonce">Jeux</a></li>
          <li><a href="/OneAnnonce">Informatique</a></li>
          <li><a href="./About">À propos</a></li>
        </ul>
      </nav>
    </div>
  );
};

export default Menu;