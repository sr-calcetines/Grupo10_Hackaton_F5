import React, { useState } from "react";
import { NavLink } from "react-router-dom";

const NavBar = () => {
    return (
      <nav className="navbar">
      <div className="nav-links">
        <NavLink className="nav-link" to="/" activeclassname="active">
          Inicio
        </NavLink>
        
        <NavLink className="nav-link" to="/" activeclassname="active">
          </NavLink>
       
        <NavLink className="nav-link" to="/" activeclassname="active">
          </NavLink>
        
        <NavLink className="nav-link" to="/Contacto" activeclassname="active">
          Contacto
        </NavLink>
      </div>
    </nav>
  );
  };

export default NavBar;