import './About.css';
import BubbleList from '../BubbleList/BubbleList.jsx';

import aboutParagraph from '../../generic/data/aboutParagraph.json'
import joelHeadshot from '../../img/joel-headshot.jpg'

import skills from '../../generic/data/skills.json';

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
            {
                skills.map((skill, i) => {
                    return <div className="item">
                        <h2 className="header">{skill.name}</h2>
                        <BubbleList skills={skill.skills} />
                    </div>
                })
            }
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