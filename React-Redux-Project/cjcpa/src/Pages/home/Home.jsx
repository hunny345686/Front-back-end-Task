import "./home.css";
import "./homeResponsive.css";

function Home() {
  return (
    <>
      <section id="home_page_first_section">
        <div className="home_page_bg_imges">
          <div className="inner_content container">
            <h2>
              Manage Your Complex <br />
              <span>Finances & Bookkeeping</span> With Us
            </h2>
            <p className="mt-2">
              We Provide Holistic Accounting, Taxation, and Business Advisory
              Services That Are Custom-Tailored To Your Requirements
            </p>
            <button className="btn btn-info mt-5">Get In Touch</button>
          </div>
        </div>
      </section>
      <section id="ourServices">
        <div className="uperSection">
          <h4>Our Services</h4>
          <h2>Offering An Array Of Services To Our Customers</h2>
        </div>
        <div className="container ourServicesCards">
          <div className="row">
            <div className="col-sm-12 col-md-4 col-lg-4">
              <div className="card">
                <img
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/tax.png"
                  className="card_img"
                  alt="..."
                />
                <div className="card-body">
                  <h5 className="card-title">Tax Services</h5>
                  <p className="card-text m-auto">
                    Proactive tax planning, compliance, and auditing to
                    structure your personal and corporate transactions.
                  </p>
                  <a
                    href="http://103.206.101.252:30/tax"
                    className="explore-more-link mt-3"
                  >
                    Explore More
                    <img
                      alt=""
                      className="cardArrow"
                      src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/explore-arrow.png"
                    />
                  </a>
                </div>
              </div>
            </div>
            <div className="col-sm-12 col-md-4 col-lg-4">
              <div className="card">
                <img
                  alt=""
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/tax.png"
                  className="card_img"
                  alt="..."
                />
                <div className="card-body">
                  <h5 className="card-title">Tax Services</h5>
                  <p className="card-text m-auto">
                    Proactive tax planning, compliance, and auditing to
                    structure your personal and corporate transactions.
                  </p>
                  <a
                    href="http://103.206.101.252:30/tax"
                    className="explore-more-link mt-3"
                  >
                    Explore More
                    <img
                      alt=""
                      className="cardArrow"
                      src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/explore-arrow.png"
                    />
                  </a>
                </div>
              </div>
            </div>
            <div className="col-sm-12 col-md-4 col-lg-4">
              <div className="card">
                <img
                  alt=""
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/tax.png"
                  className="card_img"
                  alt="..."
                />
                <div className="card-body">
                  <h5 className="card-title">Tax Services</h5>
                  <p className="card-text m-auto">
                    Proactive tax planning, compliance, and auditing to
                    structure your personal and corporate transactions.
                  </p>
                  <a
                    href="http://103.206.101.252:30/tax"
                    className="explore-more-link mt-3"
                  >
                    Explore More
                    <img
                      alt=""
                      className="cardArrow"
                      src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/explore-arrow.png"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="planInnovateExecute">
        <div className="planInnovateExecuteBGImg">
          <div className="row">
            <div className="col-sm-12 col-md-6 col-lg-6"></div>
            <div className="col-sm-12 col-md-6 col-lg-6">
              <div className="planInnovateExecuteInterContent">
                <h1>PLAN. INNOVATE. EXECUTE</h1>
                <p>
                  With highly-qualified team of professionals, we provide
                  customer-centric accounting & consulting services to help meet
                  your business and personal goals
                </p>
                <button className="btn btn-info">Contact Us</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="whyChooseUs">
        <div className="uperSection">
          <h4>Why Choose Us?</h4>
          <h2>Transparent & Hassle-Free Work Process</h2>
        </div>
        <div className="row">
          <div className="col-sm-12 col-md-3 col-lg-3">
            <img
              alt=""
              src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/audit.png"
              className="whyChooseUsImg"
            />
            <p className="whyChooseUsImgFirstP">One-Stop CA Firm</p>
            <img
              alt=""
              src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/bottom-underline.jpg"
              className="whyChooseUsIcon"
            />
            <p className="whyChooseUsImgSecP">
              From corporate tax filing to audit & assurance, financial
              restructuring to CRA reviews, we are capable of handling all your
              accounting needs
            </p>
          </div>
          <div className="col-sm-12 com-md-3 col-lg-3">
            <img
              alt=""
              src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/audit.png"
              className="whyChooseUsImg"
            />
            <p className="whyChooseUsImgFirstP">One-Stop CA Firm</p>
            <img
              alt=""
              src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/bottom-underline.jpg"
              className="whyChooseUsIcon"
            />
            <p className="whyChooseUsImgSecP">
              From corporate tax filing to audit & assurance, financial
              restructuring to CRA reviews, we are capable of handling all your
              accounting needs
            </p>
          </div>
          <div className="col-sm-12 com-md-3 col-lg-3">
            <img
              alt=""
              src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/audit.png"
              className="whyChooseUsImg"
            />
            <p className="whyChooseUsImgFirstP">One-Stop CA Firm</p>
            <img
              alt=""
              src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/bottom-underline.jpg"
              className="whyChooseUsIcon"
            />
            <p className="whyChooseUsImgSecP">
              From corporate tax filing to audit & assurance, financial
              restructuring to CRA reviews, we are capable of handling all your
              accounting needs
            </p>
          </div>
          <div className="col-sm-12 com-md-3 col-lg-3">
            <img
              alt=""
              src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/audit.png"
              className="whyChooseUsImg"
            />
            <p className="whyChooseUsImgFirstP">One-Stop CA Firm</p>
            <img
              alt=""
              src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/bottom-underline.jpg"
              className="whyChooseUsIcon"
            />
            <p className="whyChooseUsImgSecP">
              From corporate tax filing to audit & assurance, financial
              restructuring to CRA reviews, we are capable of handling all your
              accounting needs
            </p>
          </div>
        </div>
      </section>
      <section id="ourExpertise">
        <div className="uperSection">
          <h4>Our Expertise</h4>
          <h2>Industries We Serve & Specialize In</h2>
        </div>
        <div className="container mt-5">
          <div className="row">
            <div className="col-sm-12 col-md-3 col-lg-3">
              <div className="ourExpertiseInerdiv text-center">
                <img
                  alt=""
                  className="ourExpertiseFirstImg"
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/bg/Professionals.jpg"
                />
                <h3 className="mt-4">Professionals</h3>
                <img
                  alt=""
                  className="bottom-underline-icon"
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/bottom-underline.jpg"
                />
              </div>
            </div>
            <div className="col-sm-12 col-md-3 col-lg-3">
              <div className="ourExpertiseInerdiv text-center">
                <img
                  alt=""
                  className="ourExpertiseFirstImg"
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/bg/Professionals.jpg"
                />
                <h3 className="mt-4">Professionals</h3>
                <img
                  alt=""
                  className="bottom-underline-icon"
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/bottom-underline.jpg"
                />
              </div>
            </div>
            <div className="col-sm-12 col-md-3 col-lg-3">
              <div className="ourExpertiseInerdiv text-center">
                <img
                  alt=""
                  className="ourExpertiseFirstImg"
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/bg/Professionals.jpg"
                />
                <h3 className="mt-4">Professionals</h3>
                <img
                  alt=""
                  className="bottom-underline-icon"
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/bottom-underline.jpg"
                />
              </div>
            </div>
            <div className="col-sm-12 col-md-3 col-lg-3">
              <div className="ourExpertiseInerdiv text-center">
                <img
                  alt=""
                  className="ourExpertiseFirstImg"
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/bg/Professionals.jpg"
                />
                <h3 className="mt-4">Professionals</h3>
                <img
                  className="bottom-underline-icon"
                  src="http://103.206.101.252:30/wp-content/themes/twentytwentyone/assets/media/icon/bottom-underline.jpg"
                />
              </div>
            </div>
          </div>
        </div>
        <div className="ourExpertiseButom">
          <h3>
            Looking for professional accountants and business advisors? We are
            here to assist!
          </h3>
          <h2>Get 30 Minutes Free Consultation</h2>
          <button className="btn btn-dark">Contact Us</button>
        </div>
      </section>
      <section id="ourTestimonial mt-4">
        <div className="ourTestimonialBgImg">
          <div className="uperSection">
            <h4 className="ourTestimonialHeader mt-5 text-white">
              Our Testimonial
            </h4>
            <h2 className="ourTestimonialHeaderTitle text-white">
              Industries We Serve & Specialize In
            </h2>
          </div>
          <div
            id="carouselExampleIndicators"
            className="carousel slide"
            data-ride="carousel"
          >
            <div className="carousel-inner">
              <div className="carousel-item active">
                <div className="carouselItem text-white text-center">
                  <p className="uperSectionP">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book
                  </p>
                  <h5>Prem SIngh</h5>
                  <p className="lowerSectionP">Partner,Loren Inc</p>
                </div>
              </div>
              <div className="carousel-item">
                <div className="carouselItem text-white text-center">
                  <p className="uperSectionP">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book
                  </p>
                  <h5>Prem SIngh</h5>
                  <p>Partner,Loren Inc</p>
                </div>
              </div>
              <div className="carousel-item">
                <div className="carouselItem text-white text-center">
                  <p className="uperSectionP">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book
                  </p>
                  <h5>Prem SIngh</h5>
                  <p>Partner,Loren Inc</p>
                </div>
              </div>
            </div>
            <a
              className="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span
                className="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span className="sr-only">Previous</span>
            </a>
            <a
              className="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span
                className="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span className="sr-only">Next</span>
            </a>
          </div>
        </div>
      </section>
      <section>
        <div id="getInTochHome">
          <div className="container">
            <div className="row">
              <div className="col-sm-12 col-md-6 col-lg-6"></div>
              <div className="col-sm-12 col-md-6 col-lg-6">
                <div className="uperText">
                  <p>Get In Touch</p>
                  <h2>Request A Free Quote For All Your Accounting Needs</h2>
                </div>
                <div className="homeContactForm">
                  <div className="conteet_title mt-5">
                    <p>Connect With Us!</p>
                    <form id="form">
                      <input type="text" placeholder="Name*" />
                      <input type="text" placeholder="Email*" />
                      <input type="text" placeholder="Phone*" />
                      <textarea placeholder="Your Message"></textarea>
                      <button className="btn-lg btn-primary">Contact Us</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}

export default Home;
