import React from 'react';
import '../styles/sass/menu.scss';

const Menu = () => {
  return (
    <div className="menu">
      <nav>
        <ul>
          <li><a href="/Homepage">Accueil</a></li>
          <li><a href="/OneAnnonce">Vélos</a></li>
          <li><a href="/OneAnnonce">Jeux</a></li>
          <li><a href="/OneAnnonce">Informatique</a></li>
        </ul>
      </nav>
    </div>
  );
};

export default Menu;