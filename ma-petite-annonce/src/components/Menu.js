import React from 'react';
import '../styles/sass/menu.scss';

const Menu = () => {
  return (
    <div className="menu">
      <ul>
        <li><a href="/Homepage">Accueil</a></li>
        <li><a href="/OneAnnonce">Annonce selon categorie</a></li>
        <li><a href="/CreateAnnonce">Créer une annonce</a></li>
      </ul>
    </div>
  );
};

export default Menu;

