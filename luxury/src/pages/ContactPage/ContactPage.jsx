import { useState } from "react";

const ContactPage = () => {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    message: "",
  });

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    alert(
      "Mensaje enviado con éxito. Nos pondremos en contacto contigo pronto."
    );
    setFormData({ name: "", email: "", message: "" }); 
  };

  return (
    <div className="container-fluid min-vh-100 d-flex align-items-center justify-content-center flex-column">
      <h1 className="text-center mb-4">Contáctanos</h1>

      <div
        className="contact-info p-4 border rounded shadow bg-light w-100 text-center px-3"
        style={{ maxWidth: "800px" }}
      >
        <h3 className="mb-3">Información de Contacto</h3>
        <p>
          📍 <strong>Dirección:</strong> Paseo de Gracia, Barcelona, España
        </p>
        <p>
          📞 <strong>Teléfono:</strong> +34 123 456 789
        </p>
        <p>
          📧 <strong>Email:</strong>{" "}
          <a href="mailto:info@luxurybarcelona.com">info@luxurybarcelona.com</a>
        </p>
      </div>

      <div className="mt-4 w-100 d-flex justify-content-center px-3">
        <form
          onSubmit={handleSubmit}
          className="p-4 border rounded shadow bg-white w-100"
          style={{ maxWidth: "800px" }}
        >
          <h3 className="text-center mb-3">Envíanos un Mensaje</h3>
          <div className="mb-3">
            <label className="form-label">Nombre</label>
            <input
              type="text"
              name="name"
              className="form-control"
              value={formData.name}
              onChange={handleChange}
              required
            />
          </div>

          <div className="mb-3">
            <label className="form-label">Correo Electrónico</label>
            <input
              type="email"
              name="email"
              className="form-control"
              value={formData.email}
              onChange={handleChange}
              required
            />
          </div>

          <div className="mb-3">
            <label className="form-label">Mensaje</label>
            <textarea
              name="message"
              className="form-control"
              rows="4"
              value={formData.message}
              onChange={handleChange}
              required
            ></textarea>
          </div>

          <button type="submit" className="btn btn-dark w-100">
            Enviar Mensaje
          </button>
        </form>
      </div>
    </div>
  );
};

export default ContactPage;
