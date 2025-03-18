import Button from "../../components/Button/Button";
import "./landingpage.css"; 

function LandingPage() {
  return (
    <div className="landing-page">
      <div className="overlay">
        <div className="content">
          <h1>Bienvenido Luxury</h1>
          <Button text="Explorar" to="/search" />
        </div>
      </div>
    </div>
  );
}

export default LandingPage;
