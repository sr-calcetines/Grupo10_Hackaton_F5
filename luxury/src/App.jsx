import { Routes, Route } from "react-router-dom";
import LandingPage from "./pages/LandingPage/LandingPage";
import SearchingPage from "./pages/SearchingPage/SearchingPage";

function App() {
  return (
    <Routes>
      <Route path="/" element={<LandingPage />} />
      <Route path="/search" element={<SearchingPage />} />
    </Routes>
  );
}

export default App;
