import './Experiences.css';
import Experience from '../Experience/Experience';

import workExperienceJSON from '../../generic/data/WorkExperience.json';
import volunteerExperienceJSON from '../../generic/data/VolunteerExperience.json';
import eductionExperienceJSON from '../../generic/data/EductionExperience.json';

import companyLogoOANDA from '../../img/company-logo-oanda.png';
import companyLogoCARFAX from '../../img/company-logo-carfax.png';
import companyLogoNCR from '../../img/company-logo-ncr.png';
import companyLogoWestheightsCC from '../../img/company-logo-westheights-cc.png';
import companyLogoForestHeightsCI from '../../img/company-logo-forest-heights-ci.png';
import companyLogoCampKahquah from '../../img/company-logo-camp-kahquah.png';
import companyLogoUW from '../../img/company-logo-uw.png';
import companyLogoDefault from '../../img/company-logo-default.png';

function Experiences() {
    return (
        <div className="section" id="experienceSection">
            <h1 className="section-header" id="projectSection">Experiences</h1>
            <div className="item">
                <h2 className="header Experiences-header">Work Experience</h2>
                {
                    experienceMapper(workExperienceJSON)
                }
            </div>
            <div className="item">
                <h2 className="header Experiences-header">Education</h2>
                {
                    experienceMapper(eductionExperienceJSON)
                }
            </div>
            <div className="item">
                <h2 className="header Experiences-header">Volunteer Experience</h2>
                {
                    experienceMapper(volunteerExperienceJSON)
                }
            </div>
        </div>
    );
}

const experienceMapper = (experienceJSON) => {
    return experienceJSON.experience.map(
        (experience, i) => {
            switch(experience.logoName) {
                case 'companyLogoOANDA':
                    experience.logo = companyLogoOANDA
                    break
                case 'companyLogoCARFAX':
                    experience.logo = companyLogoCARFAX
                    break
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
            return <Experience props={experience} key={i} />
        }
    )
}

export default Experiences;