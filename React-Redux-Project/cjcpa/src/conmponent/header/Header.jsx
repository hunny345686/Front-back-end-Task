import "./header.css";
function Header() {
  return (
    <div>
      <nav className="navbar navbar-expand-lg navbar-light bg-light">
        <div className="container">
          <a className="navbar-brand" href="index.html">
            <img
              className="img-responsive"
              src="http://103.206.101.252:30/wp-content/uploads/2021/05/Group-42-l-1.png"
              alt="logo"
            />
          </a>
          <button
            className="navbar-toggler collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span className="navbar-toggler-icon"></span>
          </button>
          <div
            className="collapse navbar-collapse justify-content-end"
            id="navbarNavAltMarkup"
          >
            <div className="navbar-nav" id="navbar_link">
              <a className="nav-link active" aria-current="page" href="#">
                Home
              </a>
              <a className="nav-link" href="#">
                Services
              </a>
              <a className="nav-link" href="#">
                Industries
              </a>
              <a className="nav-link" href="#">
                Blog
              </a>
              <a className="nav-link" href="#">
                About Us
              </a>
              <a className="nav-link" href="#">
                Contact Us
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  );
}

export default Header;
