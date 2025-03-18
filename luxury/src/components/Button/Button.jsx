import PropTypes from "prop-types";
import { useNavigate } from "react-router-dom";

function Button({ text, to, type = "button", className = "" }) {
  const navigate = useNavigate();

  const handleClick = () => {
    if (to) {
      navigate(to);
    }
  };

  return (
    <button
      type={type}
      className={`btn btn-dark rounded-pill ${className}`}
      onClick={handleClick}
    >
      {text}
    </button>
  );
}

Button.propTypes = {
  text: PropTypes.string.isRequired,
  to: PropTypes.string,
  type: PropTypes.string,
  className: PropTypes.string,
};

export default Button;
