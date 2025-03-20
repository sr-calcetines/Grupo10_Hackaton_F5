import { useState } from "react";
import Card from "../../components/Card/Card";
import Paginator from "../../components/Paginator/Paginator";
import mockData from "../../data/mockData";
import SearchingBar from "../../components/Searchingbar/Searchingbar";
import NavBar from "../../components/Navbar/Navbar";

function SearchingPage() {
  const [currentPage, setCurrentPage] = useState(1);
  const [filteredData, setFilteredData] = useState(mockData);
  const itemsPerPage = 6;

  const handleFilter = (filters) => {
    let filtered = mockData;

    if (filters.name) {
      filtered = filtered.filter((item) =>
        item.name.toLowerCase().includes(filters.name.toLowerCase())
      );
    }

    if (filters.priceMin) {
      filtered = filtered.filter((item) => item.price >= filters.priceMin);
    }

    if (filters.priceMax) {
      filtered = filtered.filter((item) => item.price <= filters.priceMax);
    }

    if (filters.rooms) {
      filtered = filtered.filter(
        (item) => item.rooms === parseInt(filters.rooms)
      );
    }

    if (filters.bedrooms) {
      filtered = filtered.filter(
        (item) => item.bedrooms === parseInt(filters.bedrooms)
      );
    }

    if (filters.bathrooms) {
      filtered = filtered.filter(
        (item) => item.bathrooms === parseInt(filters.bathrooms)
      );
    }

    if (filters.size) {
      filtered = filtered.filter(
        (item) => item.size >= parseFloat(filters.size)
      );
    }

    setFilteredData(filtered);
    setCurrentPage(1);
  };

  const indexOfLastItem = currentPage * itemsPerPage;
  const indexOfFirstItem = indexOfLastItem - itemsPerPage;
  const currentItems = filteredData.slice(indexOfFirstItem, indexOfLastItem);
  const totalPages = Math.ceil(filteredData.length / itemsPerPage);

  const handlePageChange = (page) => {
    setCurrentPage(page);
  };

  return (
    <>
    <NavBar />
    <div className="container mt-5">
  <h1 className="text-center mb-4">Buscar contenido</h1>
  <p className="text-center mb-4">
    Ingresa lo que deseas buscar en la barra de búsqueda.
  </p>

  <SearchingBar onFilter={handleFilter} />

  <div className="row">
    {currentItems.map((item) => (
      <div key={item.id} className="col-12 col-md-4 mb-4">
        <Card
          img={item.img}
          name={item.name}
          price={item.price}
          rooms={item.rooms}
          bedrooms={item.bedrooms}
          bathrooms={item.bathrooms}
          size={item.size}
        />
      </div>
    ))}
  </div>

  <Paginator
    currentPage={currentPage}
    totalPages={totalPages}
    onPageChange={handlePageChange}
  />
</div>
  </>
  );
}

export default SearchingPage;




