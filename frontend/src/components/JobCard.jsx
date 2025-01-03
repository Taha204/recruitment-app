import React from 'react';
import './JobCard.css'; // JobCard-specific styles

const JobCard = ({ job }) => {
    return (
        <div className="job-card">
            <h3 className="job-title">{job.title}</h3>
            <p className="job-description">{job.description}</p>
            <div className="job-details">
                <span className="job-category">
                    {job.category || 'Uncategorized'}
                </span>
                <span className="job-salary">
                    {job.salary ? `$${job.salary}` : 'Salary not specified'}
                </span>
            </div>
            <button className="job-apply-button">View Details</button>
        </div>
    );
};

export default JobCard;
