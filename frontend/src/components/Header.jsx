import React from 'react';
import { Link } from 'react-router-dom';
import './Header.css'; // Header-specific styles

const Header = () => {
    return (
        <header className="header">
            <div className="container">
                <h1 className="brand-logo">FreelanceHub</h1>
                <nav className="navigation">
                    <a href="#discover">Discover</a>
                    <a href="#training">Training</a>
                    <a href="#community">Community</a>
                </nav>
                <Link to="/signup" className="signup-button">Sign Up</Link>
            </div>
        </header>
    );
};

export default Header;
