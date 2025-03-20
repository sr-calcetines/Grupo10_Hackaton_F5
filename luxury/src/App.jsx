import { Routes, Route, useLocation } from "react-router-dom";
import Navbar from "./components/Navbar/Navbar";
import LandingPage from "./pages/LandingPage/LandingPage";
import SearchingPage from "./pages/SearchingPage/SearchingPage";
import DetailPage from "./pages/DetailPage/DetailPage";
import ContactPage from "./pages/ContactPage/ContactPage";
import AboutPage from "./pages/AboutPage/AboutPage";
import "./index.css";


function App() {
  const location = useLocation();

  const isLandingPage = location.pathname === "/";

  return (
    <div className={`app-container ${isLandingPage ? "landing-page" : ""}`}>
      {" "}
      {!isLandingPage && <Navbar />}{" "}
      <div className="main-content">
        <Routes>
          <Route path="/" element={<LandingPage />} />
          <Route path="/search" element={<SearchingPage />} />
          <Route path="/detail/:id" element={<DetailPage />} />
          <Route path="/contact" element={<ContactPage />} />
          <Route path="/about" element={<AboutPage />} />
        </Routes>
      </div>
    </div>
  );
}

export default App;
