function SearchingPage() {
  return (
    <div className="text-center mt-5">
      <h1>Buscar contenido</h1>
      <p>Ingresa lo que deseas buscar en la barra de búsqueda.</p>
      <input
        type="text"
        placeholder="Escribe aquí..."
        className="form-control w-50 mx-auto mt-3"
      />
    </div>
  );
}

export default SearchingPage;
