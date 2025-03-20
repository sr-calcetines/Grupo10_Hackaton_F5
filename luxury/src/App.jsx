import { Routes, Route } from "react-router-dom";
import LandingPage from "./pages/LandingPage/LandingPage";
import SearchingPage from "./pages/SearchingPage/SearchingPage";
import DetailPage from "./pages/DetailPage/DetailPage";

function App() {
  return (
    <Routes>
      <Route path="/" element={<LandingPage />} />
      <Route path="/search" element={<SearchingPage />} />
     <Route path="/detail/:id" element={<DetailPage />} />

    </Routes>
  );
}

export default App;
