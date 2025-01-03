import React, { useEffect, useState } from 'react';
import api from '../api';
import JobCard from '../components/JobCard';
import Header from '../components/Header'; // Import the Header component
import Footer from '../components/Footer'; // Import the Footer component
import './LandingPage.css'; // Landing Page-specific styles

const LandingPage = () => {
    const [jobs, setJobs] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() => {
        const fetchJobs = async () => {
            try {
                const response = await api.get('/jobs');
                setJobs(response.data.data || response.data); // Fetch job data
            } catch (err) {
                setError('We are unable to fetch job listings at the moment. Please try again later.');
                console.error(err);
            } finally {
                setLoading(false);
            }
        };

        fetchJobs();
    }, []);

    return (
        <div className="landing-page">
            {/* Fixed Header */}
            <Header />

            {/* Hero Section */}
            <section className="hero-section">
                <div className="hero-content">
                    <h2>Unlock Your Next Freelance Opportunity</h2>
                    <p>
                        Explore thousands of job opportunities that fit your skills and career aspirations.<br /><br />
                        Whether you're a developer, designer, or analyst, your next big opportunity is just a click away!
                    </p>
                    <button className="cta-button">Explore Jobs</button>
                </div>
            </section>

            {/* Job Opportunities Section */}
            <section className="job-section">
                <h2>Featured Job Listings</h2>
                {loading && <p className="loading">Loading job listings...</p>}
                {error && <div className="error-message">{error}</div>}
                {!loading && !error && jobs.length > 0 ? (
                    <div className="job-grid">
                        {jobs.map((job) => (
                            <JobCard key={job.id} job={job} />
                        ))}
                    </div>
                ) : (
                    <p>No job offers available right now. Check back later for more opportunities.</p>
                )}
            </section>

            {/* Footer */}
            <Footer />
        </div>
    );
};

export default LandingPage;
