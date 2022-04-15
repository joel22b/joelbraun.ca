import './ProjectPage.css';
import NavBar from '../NavBar/NavBar.jsx'

function ProjectPage({props}) {
    return (
        <div>
            <NavBar />
            <h1>Hellloooo</h1>
            <p>{props.text}</p>
        </div>
    );
}

export default ProjectPage;