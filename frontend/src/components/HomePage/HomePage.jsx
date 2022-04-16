import './HomePage.css';
import NavBar from '../NavBar/NavBar.jsx';
import ContactBar from '../ContactBar/ContactBar.jsx';
import Landing from '../Landing/Landing.jsx';
import About from '../About/About.jsx';
import Experiences from '../Experiences/Experiences';
import Projects from '../Projects/Projects.jsx';

import resumeJoelBraun from '../../generic/resume/joel-braun-resume.pdf'

export function HomePage({section}) {
  return (
    <div className="HomePage">
      <NavBar resumeJoelBraun={resumeJoelBraun} />
      <ContactBar />
      <Landing />
      <Projects />
      <About resumeJoelBraun={resumeJoelBraun} />
      <Experiences />
    </div>
  );
}
