import React from 'react';

const Header = () => {
  return (
    <div className="header">
      <h1>Header</h1>
      <span id="logo">
        Logo: <image src="./img/logotest.svg"> </image>
      </span>
      <section id="recherche">
        <span> Rechercher une annonce</span>
      </section>
    </div>
  );
};

export default Header;