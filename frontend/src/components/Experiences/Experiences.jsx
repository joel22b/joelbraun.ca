import './Experiences.css';
import Experience from '../Experience/Experience';

import experiencesJSON from '../../generic/data/experiences.json';

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
            <h1 className="section-header">Experiences</h1>
            {
                experiencesJSON.map((exp, i) => {
                    return <div className="item">
                        <h2 className="header Experiences-header">{exp.name}</h2>
                        {
                            experienceMapper(exp.experience)
                        }
                    </div>
                })
            }
        </div>
    );
}

const experienceMapper = (exp) => {
    return exp.map(
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