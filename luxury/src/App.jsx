import { BrowserRouter as Router, Routes,Route,Navigate,} from "react-router-dom";
import LandingPage from "./pages/LandingPage/LandingPage";
import SearchingPage from "./pages/SearchingPage/SearchingPage";


function App() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<LandingPage />} />
        <Route path="/search" element={<SearchingPage />} />
      </Routes>
    </Router>
  );
}

export default App;
