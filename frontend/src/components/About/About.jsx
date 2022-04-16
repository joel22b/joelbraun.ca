import './About.css';
import BubbleList from '../BubbleList/BubbleList.jsx';

import aboutParagraph from '../../generic/data/aboutParagraph.json'
import joelHeadshot from '../../img/joel-headshot.jpg'

import skillsLanguages from '../../generic/data/skillsLanguages.json'
import skillsFrameworks from '../../generic/data/skillsFrameworks.json'
import skillsTools from '../../generic/data/skillsTools.json'
import skillsCloudTechnologies from '../../generic/data/skillsCloudTechnologies.json'
import skillsMethodologies from '../../generic/data/skillsMethodologies.json'

function About({resumeJoelBraun}) {
    return (
        <div className="section" id="aboutSection">
            <div className="item">
                <h1 className="section-header">About</h1>
                <img src={joelHeadshot} className="about-image about-headshot" alt=""/>
                {
                    aboutParagraph.paragraphs.map((text, i) => <p key={i}>{text}</p>)
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
                <h2 className="header">Tools</h2>
                <BubbleList skills={skillsTools.skills} />
            </div>
            <div className="item">
                <h2 className="header">Cloud Technologies</h2>
                <BubbleList skills={skillsCloudTechnologies.skills} />
            </div>
            <div className="item">
                <h2 className="header">Methodologies</h2>
                <BubbleList skills={skillsMethodologies.skills} />
            </div>
            <div className="item about-ending">
                <div style={{"alignSelf": "flex-start"}}>
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

export default About;