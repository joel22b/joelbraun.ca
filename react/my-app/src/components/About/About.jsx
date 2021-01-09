import './About.css';
import BubbleList from '../BubbleList/BubbleList.jsx';
import Experience from '../Experience/Experience';

import aboutParagraph from '../../generic/data/aboutParagraph.json'
import joelHeadshot from '../../img/joel-headshot.jpg'

import skillsLanguages from '../../generic/data/skillsLanguages.json'
import skillsFrameworks from '../../generic/data/skillsFrameworks.json'
import skillsOthers from '../../generic/data/skillsOthers.json'
import skillsMethodologies from '../../generic/data/skillsMethodologies.json'

import workExperienceJSON from '../../generic/data/WorkExperience.json';
import volunteerExperienceJSON from '../../generic/data/VolunteerExperience.json';
import eductionExperienceJSON from '../../generic/data/EductionExperience.json';
import companyLogoNCR from '../../img/company-logo-ncr.png';
import companyLogoWestheightsCC from '../../img/company-logo-westheights-cc.png';
import companyLogoForestHeightsCI from '../../img/company-logo-forest-heights-ci.png';
import companyLogoCampKahquah from '../../img/company-logo-camp-kahquah.png';
import companyLogoUW from '../../img/company-logo-uw.png';
import companyLogoDefault from '../../img/company-logo-default.png';

import resumeJoelBraun from '../../generic/resume/joel-braun-resume.pdf'

function About() {
    return (
        <div className="section" id="about-section">
            <div className="item">
                <h1 className="section-header">About</h1>
                <img src={joelHeadshot} className="about-image about-headshot" alt=""/>
                {
                    aboutParagraph.paragraphs.map(text => <p>{text}</p>)
                }
                <div style={{"clear": "both"}}/>
            </div>
            <div className="item">
                <h2 className="header">Languages</h2>
                <BubbleList skills={skillsLanguages.skills} />
            </div>
            <div className="item">
                <h2 className="header">Frameworks</h2>
                <BubbleList skills={skillsFrameworks.skills} />
            </div>
            <div className="item">
                <h2 className="header">Other</h2>
                <BubbleList skills={skillsOthers.skills} />
            </div>
            <div className="item">
                <h2 className="header">Methodologies</h2>
                <BubbleList skills={skillsMethodologies.skills} />
            </div>
            <div className="item">
                <h2 className="header experience-header">Work Experience</h2>
                {
                    experienceMapper(workExperienceJSON)
                }
            </div>
            <div className="item">
                <h2 className="header experience-header">Volunteer Experience</h2>
                {
                    experienceMapper(volunteerExperienceJSON)
                }
            </div>
            <div className="item">
                <h2 className="header experience-header">Education</h2>
                {
                    experienceMapper(eductionExperienceJSON)
                }
            </div>
            <div className="item about-ending">
                <div style={{"align-self": "flex-start"}}>
                    <a href={resumeJoelBraun} rel="noreferrer" target="_blank" download="Joel-Braun-Resume">
					    <button type="button" className="btn btn-outline-dark btn-md">Resume</button>
			 	    </a>
                </div>
                <div className="about-linkedin">
                    <a href="https://www.linkedin.com/in/joel-braun" rel="noreferrer" target="_blank">
                        <h4 className="large-text text-linkedin about-vertical-center">Connect with me on LinkedIn!</h4>
                        <i className="fab fa-linkedin fa-lg about-linkedin-logo"/>
                    </a>
                </div>
            </div>
        </div>
    );
}

const experienceMapper = (experienceJSON) => {
    return experienceJSON.experience.map(
        experience => {
            switch(experience.logoName) {
                case 'companyLogoNCR': 
                    experience.logo = companyLogoNCR
                    break
                case 'companyLogoWestheightsCC': 
                    experience.logo = companyLogoWestheightsCC
                    break
                case 'companyLogoForestHeightsCI': 
                    experience.logo = companyLogoForestHeightsCI
                    break
                case 'companyLogoCampKahquah': 
                    experience.logo = companyLogoCampKahquah
                    break
                case 'companyLogoUW': 
                    experience.logo = companyLogoUW
                    break
                default:
                    experience.logo = companyLogoDefault
                    break
            }
            return <Experience props={experience} />
        }
    )
}

export default About;