import imageLuxury from "../../assets/imagen_luxury.png"; 
const AboutPage = () => {
  return (
    <div className="container mt-5">
      <h1 className="text-center mb-4">Sobre Nosotros</h1>

      <div className="text-center mb-4">
        <img
          src={imageLuxury}
          alt="Luxury Inmobiliaria"
          className="img-fluid rounded"
          style={{ maxWidth: "30%" }}
        />
      </div>

      <p className="text-center">
        <strong>Luxury</strong> es una inmobiliaria de lujo en Barcelona,
        especializada en la venta y alquiler de propiedades exclusivas en las
        mejores zonas de la ciudad.
      </p>

      <h3 className="mt-4">Nuestra Filosofía</h3>
      <p>
        En Luxury creemos que cada cliente es único, por eso ofrecemos un
        servicio totalmente personalizado. Nuestro equipo de expertos
        inmobiliarios te guiará en cada paso del proceso, asegurando que
        encuentres la propiedad ideal según tus necesidades y preferencias.
      </p>

      <h3 className="mt-4">¿Por qué elegirnos?</h3>
      <ul>
        <li>
          <strong>Propiedades Exclusivas:</strong> Solo trabajamos con inmuebles
          de alta gama.
        </li>
        <li>
          <strong>Ubicaciones Privilegiadas:</strong> Barcelona y sus mejores
          barrios.
        </li>
        <li>
          <strong>Atención Personalizada:</strong> Nos adaptamos a cada cliente.
        </li>
        <li>
          <strong>Experiencia y Profesionalismo:</strong> Más de 10 años en el
          sector inmobiliario.
        </li>
      </ul>

      <h3 className="mt-4">Contáctanos</h3>
      <p>
        📍 <strong>Oficina:</strong> Paseo de Gracia, Barcelona, España <br />
        📞 <strong>Teléfono:</strong> +34 123 456 789 <br />
        📧 <strong>Email:</strong>{" "}
        <a href="mailto:info@luxurybarcelona.com">info@luxurybarcelona.com</a>
      </p>
    </div>
  );
};

export default AboutPage;
