import PropTypes from "prop-types";

function Card({ img, name, price, rooms, bedrooms, bathrooms, size }) {
  return (
    <div className="card" style={{ width: "18rem" }}>
      <img src={img} className="card-img-top" alt={name} />
      <div className="card-body">
        <h5 className="card-title">{name}</h5>
        <p className="card-text">Precio: ${price}</p>
        <p className="card-text">Habitaciones: {rooms}</p>
        <p className="card-text">Dormitorios: {bedrooms}</p>
        <p className="card-text">Baños: {bathrooms}</p>
        <p className="card-text">Tamaño: {size} m²</p>
      </div>
    </div>
  );
}

Card.propTypes = {
  img: PropTypes.string.isRequired,
  name: PropTypes.string.isRequired,
  price: PropTypes.number.isRequired,
  rooms: PropTypes.number.isRequired,
  bedrooms: PropTypes.number.isRequired,
  bathrooms: PropTypes.number.isRequired,
  size: PropTypes.number.isRequired,
};

export default Card;
