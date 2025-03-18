import { useState } from "react";

function SearchingBar({ onFilter }) {
  const [filters, setFilters] = useState({
    name: "",
    priceMin: "",
    priceMax: "",
    rooms: "",
    bedrooms: "",
    bathrooms: "",
    size: "",
  });

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFilters({
      ...filters,
      [name]: value,
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    onFilter(filters);
  };

  const roomOptions = Array.from({ length: 11 }, (_, index) => index);

  return (
    <form onSubmit={handleSubmit} className="mb-4">
      <div className="row">
  
        <div className="col-12 col-md-3">
          <input
            type="text"
            name="name"
            value={filters.name}
            onChange={handleChange}
            className="form-control"
            placeholder="Nombre del piso"
          />
        </div>

        <div className="col-12 col-md-3">
          <input
            type="number"
            name="priceMin"
            value={filters.priceMin}
            onChange={handleChange}
            className="form-control"
            placeholder="Precio mínimo"
            step="0.01" 
          />
        </div>

        <div className="col-12 col-md-3">
          <input
            type="number"
            name="priceMax"
            value={filters.priceMax}
            onChange={handleChange}
            className="form-control"
            placeholder="Precio máximo"
            step="0.01"
          />
        </div>

        <div className="col-12 col-md-3">
          <select
            name="rooms"
            value={filters.rooms}
            onChange={handleChange}
            className="form-control"
          >
            <option value="">Habitaciones</option>
            {roomOptions.map((room) => (
              <option key={room} value={room}>
                {room}
              </option>
            ))}
          </select>
        </div>

        <div className="col-12 col-md-3">
          <select
            name="bedrooms"
            value={filters.bedrooms}
            onChange={handleChange}
            className="form-control"
          >
            <option value="">Dormitorios</option>
            {roomOptions.map((bedroom) => (
              <option key={bedroom} value={bedroom}>
                {bedroom}
              </option>
            ))}
          </select>
        </div>

        <div className="col-12 col-md-3">
          <select
            name="bathrooms"
            value={filters.bathrooms}
            onChange={handleChange}
            className="form-control"
          >
            <option value="">Baños</option>
            {roomOptions.map((bathroom) => (
              <option key={bathroom} value={bathroom}>
                {bathroom}
              </option>
            ))}
          </select>
        </div>

        <div className="col-12 col-md-3">
          <input
            type="number"
            name="size"
            value={filters.size}
            onChange={handleChange}
            className="form-control"
            placeholder="Tamaño (m²)"
            step="0.1"
          />
        </div>

        <div className="col-12 mt-3 text-center">
          <button type="submit" className="btn btn-primary">
            Filtrar
          </button>
        </div>
      </div>
    </form>
  );
}

export default SearchingBar;
