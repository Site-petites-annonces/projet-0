import React from 'react';
//import { Navlink } from "react-router-dom";

const Navigation = () => {
    return (
        <div className="navigation">
            <Navlink exact to="/" activeClassName="nav-active" >
                Acceuil
            </Navlink>
            <Navlink exact to="a-propos" activeClassName="nav-active">
                À propos
            </Navlink>
        </div>
    );
};

export default Navigation;