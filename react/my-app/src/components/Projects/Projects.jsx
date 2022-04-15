import './Projects.css';
import Project from '../Project/Project.jsx'

import projectsListJSON from '../../generic/data/projectsList.json'
import projectImageCapacitiveTouchLED from '../../img/project-image-capacitive-touch-led.png'
import projectImageYoilith from '../../img/project-image-yoilith.png'
import projectImageUMigrate from '../../img/project-image-umigrate.png'
import projectImageDefault from '../../img/project-image-default.jpg'

const Projects = () => {
    return (
        <div className="section">
            <h1 className="section-header" id="projectSection">Projects</h1>
            <div className="Projects-list">
                {
                    projectMapper(projectsListJSON)
                }
            </div>
        </div>
    );
}

const projectMapper = (projectsJSON) => {
    return projectsJSON.projects.map(
        project => {
            switch(project.imageName) {
                case 'projectImageCapacitiveTouchLED': 
                    project.image = projectImageCapacitiveTouchLED
                    break
                case 'projectImageYoilith': 
                    project.image = projectImageYoilith
                    break
                case 'projectImageUMigrate':
                    project.image = projectImageUMigrate
                    break
                default:
                    project.image = projectImageDefault
                    break
            }
            return <Project props={project} />
        }
    )
}

export default Projects;