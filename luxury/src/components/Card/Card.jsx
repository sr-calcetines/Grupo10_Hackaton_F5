import "./Card.css"; 

function Card({ id, img, name, price, rooms, bedrooms, bathrooms, size }) {
  return (
    <div className="card" style={{ width: "22rem" }}>
      <img src={img[0]} className="card-img-top" alt={name} />
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

export default Card;
