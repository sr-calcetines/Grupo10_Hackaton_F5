import { NavLink } from "react-router-dom";
import "./Navbar.css";

const Navbar = () => {
  return (
    <nav className="navbar navbar-expand-lg shadow-sm">
      <div className="container">
        <NavLink className="navbar-brand fw-bold" to="/">
          Luxury
        </NavLink>

        <div className="navbar-collapse show" id="navbarNav">
          <ul className="navbar-nav ms-auto d-flex flex-row">
            <li className="nav-item">
              <NavLink className="nav-link" to="/search">
                Buscar
              </NavLink>
            </li>
            <li className="nav-item">
              <NavLink className="nav-link" to="/contact">
                Contacto
              </NavLink>
            </li>
            <li className="nav-item">
              <NavLink className="nav-link" to="/about">
                Quiénes Somos
              </NavLink>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
