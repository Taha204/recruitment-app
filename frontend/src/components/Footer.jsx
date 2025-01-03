import React from 'react';
import './Footer.css';
import { Link } from 'react-router-dom';

const Footer = () => {
 
 

  return (
    <footer className="footer">
      {/* Contact Us Section */}
      <div className="contact-us">
        <h2>Contact Us</h2>
        <form className="contact-form">
          <div className="form-group">
            <input type="text" placeholder="Name" required />
          </div>
          <div className="form-group">
            <input type="email" placeholder="Email" required />
          </div>
          <div className="form-group">
            <textarea placeholder="Message" rows="4" required></textarea>
          </div>
          <button type="submit" className="submit-btn">Send</button>
        </form>
      </div>

      {/* Top Section */}
      <div className="footer-top">
        <div className="footer-logo">
          <img src="/src/images/logo.png" alt="FlashSkill Logo" className="logo" />
          <span>FreelanceHub</span>
        </div>
        <ul className="footer-links">
          <li><a href="#pricing">Pricing </a></li>
          <li><Link to="/about">About us </Link></li>
          <li><a href="#features">Features </a></li>

          <li><a href="#help-center">Help Center </a></li>
          <li><a href="#faqs">FAQs</a></li>
        </ul>
      </div>

      <hr />

      {/* Bottom Section */}
      <div className="footer-bottom">
        <div className="language-select">
          <select>
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
          </select>
        </div>
        <p className="footer-meta">
          © 2024 FreelanceHub, Inc. • <a href="#privacy">Privacy</a> • <a href="#terms">Terms</a> • <a href="#sitemap">Sitemap</a>
        </p>
        <div className="social-icons">
          <a href="#twitter">
            <img src="/src/images/X_logo.jpg" alt="Twitter" />
          </a>
          <a href="#facebook">
            <img src="/src/images/fb.png" alt="Facebook" />
          </a>
          <a href="#linkedin">
            <img src="/src/images/linkedin.jpg" alt="LinkedIn" />
          </a>
          <a href="#youtube">
            <img src="/src/images/youtube.avif" alt="YouTube" />
          </a>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
