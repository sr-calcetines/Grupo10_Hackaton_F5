import { useParams } from "react-router-dom";
import mockData from "../../data/mockData"; 
const DetailPage = () => {
  
  const { id } = useParams();

  const apartment = mockData.find((item) => item.id === parseInt(id));

  if (!apartment) {
    return <h2 className="text-center mt-5">Piso no encontrado</h2>;
  }

  return (
    <div className="container mt-5">
      <h1 className="text-center">{apartment.name}</h1>
      <h3 className="text-center text-primary">{apartment.price} €</h3>

      <div className="text-center mt-4">
        <img
          src={apartment.img} 
          alt={apartment.name}
          className="img-fluid" 
          style={{ maxHeight: "500px", objectFit: "cover" }} 
        />
      </div>

      <div className="mt-4">
        <h4>Características del piso</h4>
        <ul>
          <li>
            <strong>Habitaciones:</strong> {apartment.rooms}
          </li>
          <li>
            <strong>Dormitorios:</strong> {apartment.bedrooms}
          </li>
          <li>
            <strong>Baños:</strong> {apartment.bathrooms}
          </li>
          <li>
            <strong>Tamaño:</strong> {apartment.size} m²
          </li>
        </ul>
      </div>

      <div className="mt-4">
        <h4>Descripción</h4>
        <p>{apartment.description}</p>
      </div>

      <div className="mt-4">
        <h4>Contacto</h4>
        <p>
          Email: <a href={`mailto:${apartment.mail}`}>{apartment.mail}</a>
        </p>
      </div>
    </div>
  );
};

export default DetailPage;
